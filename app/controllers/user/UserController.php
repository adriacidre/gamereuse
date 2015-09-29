<?php

class UserController extends BaseController {

    protected $user;

    public function __construct(User $user)
    {
        parent::__construct();
        $this->user = $user;
    }

    public function getProfile()
    {
        $user = $this->user->currentUser();

        if (is_null($user)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }

        $products = $user->products()->orderBy('created_at', 'ASC')->get();
        $offers   = $user->offers()->orderBy('created_at', 'ASC')->get();

        return View::make('site/user/profile', compact('user', 'products', 'offers'));
    }

    public function getOffers()
    {
        $user = $this->user->currentUser();

        if (is_null($user)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }

        $offers = $user->offers()->orderBy('created_at', 'ASC')->get();

        return View::make('site/user/view_offers', compact('user', 'offers'));
    }

    public function getIndex()
    {
        list($user, $redirect) = $this->user->checkAuthAndRedirect('user');

        if ($redirect) {

            return $redirect;
        }

        return View::make('site/user/index', compact('user'));
    }

    public function postIndex()
    {
        $this->user->username   = Input::get( 'username' );
        $this->user->email      = Input::get( 'email' );

        $password             = Input::get( 'password' );
        $passwordConfirmation = Input::get( 'password_confirmation' );

        if (!empty($password)) {

            if ($password === $passwordConfirmation) {
                $this->user->password = $password;
                $this->user->password_confirmation = $passwordConfirmation;
            } else {
                return Redirect::to('user/create')
                    ->withInput(Input::except('password','password_confirmation'))
                    ->with('error', Lang::get('admin/users/messages.password_does_not_match'));
            }

        } else {

            unset($this->user->password);
            unset($this->user->password_confirmation);

        }

        $this->user->save();

        if ( $this->user->id ) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.user_account_created') );

        } else {

            $error = $this->user->errors()->all();

            return Redirect::to('user/create')
                ->withInput(Input::except('password'))
                ->with( 'error', $error );
        }
    }


    public function postEdit($user)
    {
        $validator = Validator::make(Input::all(), $user->getUpdateRules());

        if ($validator->passes()) {
            $oldUser = clone $user;

            $user->username = Input::get( 'username' );
            $user->email    = Input::get( 'email' );

            $password             = Input::get( 'password' );
            $passwordConfirmation = Input::get( 'password_confirmation' );

            if(!empty($password)) {
                if($password === $passwordConfirmation) {
                    $user->password = $password;
                    $user->password_confirmation = $passwordConfirmation;
                } else {
                    return Redirect::to('users')->with('error', Lang::get('admin/users/messages.password_does_not_match'));
                }
            } else {
                unset($user->password);
                unset($user->password_confirmation);
            }

            $user->prepareRules($oldUser, $user);

            $user->amend();
        }

        $error = $user->errors()->all();

        if(empty($error)) {
            return Redirect::to('user')
                ->with( 'success', Lang::get('user/user.user_account_updated') );
        } else {
            return Redirect::to('user')
                ->withInput(Input::except('password','password_confirmation'))
                ->with( 'error', $error );
        }
    }


    public function getCreate()
    {
        return View::make('site/user/create');
    }


    public function getLogin()
    {
        $user = Auth::user();
        if (!empty($user->id)) {

            return Redirect::to('/');
        }

        return View::make('site/user/login');
    }


    public function postLogin()
    {
        $input = array(
            'email'    => Input::get( 'email' ), // May be the username too
            'username' => Input::get( 'email' ), // May be the username too
            'password' => Input::get( 'password' ),
            'remember' => Input::get( 'remember' ),
        );

        // If you wish to only allow login from confirmed users, call logAttempt
        // with the second parameter as true.
        // logAttempt will check if the 'email' perhaps is the username.
        // Check that the user is confirmed.
        if (Confide::logAttempt( $input, true )) {
            $r = Session::get('loginRedirect');
            if (!empty($r)) {
                Session::forget('loginRedirect');

                return Redirect::to($r);
            }
            return Redirect::to('/');
        } else {
            if ( Confide::isThrottled( $input ) ) {
                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            } elseif ( $this->user->checkUserExists( $input ) && ! $this->user->isConfirmed( $input ) ) {
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            } else {
                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }

            return Redirect::to('user/login')
                ->withInput(Input::except('password'))
                ->with( 'error', $err_msg );
        }
    }

    public function getConfirm($code)
    {
        if (Confide::confirm($code)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.confirmation') );
        } else {

            return Redirect::to('user/login')
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_confirmation') );
        }
    }

    public function getForgot()
    {
        return View::make('site/user/forgot');
    }


    public function postForgot()
    {
        if (Confide::forgotPassword(Input::get('email'))) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.password_forgot') );
        } else {

            return Redirect::to('user/forgot')
                ->withInput()
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_password_forgot') );
        }
    }

    public function getReset( $token )
    {
        return View::make('site/user/reset')
            ->with('token',$token);
    }


    public function postReset()
    {
        $input = [
            'token'=>Input::get( 'token' ),
            'password'=>Input::get( 'password' ),
            'password_confirmation'=>Input::get( 'password_confirmation' ),
        ];

        if (Confide::resetPassword( $input )) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.password_reset') );
        } else {

            return Redirect::to('user/reset/'.$input['token'])
                ->withInput()
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_password_reset') );
        }
    }

    public function getLogout()
    {
        Confide::logout();

        return Redirect::to('/');
    }

    public function getSettings()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/settings');
        if($redirect){return $redirect;}

        $products   = $user->products()->get();
        $offers     = $user->offers()->get();

        return View::make('site/user/profile', compact('user', 'products', 'offers'));
    }

    public function processRedirect($url1, $url2, $url3)
    {
        $redirect = '';
        if( ! empty( $url1 ) )
        {
            $redirect = $url1;
            $redirect .= (empty($url2)? '' : '/' . $url2);
            $redirect .= (empty($url3)? '' : '/' . $url3);
        }
        return $redirect;
    }

    public function getGames()
    {
        $user = $this->user->currentUser();

        if (is_null($user)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }

        $products = $user->products()->get();

        return View::make('site/user/my_products', compact('products'));
    }
}
