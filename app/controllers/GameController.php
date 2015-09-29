<?php


class GameController extends BaseController
{
    protected $game;
    protected $user;
    protected $product;
    protected $offer;

    public function __construct(Game $game, User $user, Product $product, Offer $offer)
    {
        parent::__construct();

        $this->game = $game;
        $this->user = $user;
        $this->product = $product;
        $this->offer = $offer;
    }

    public function getList()
    {
        $games = $this->game->getLast();

        return View::make('site/game/list_games', compact('games'));
    }

    public function getView($slug)
    {
        $game       = $this->getModelFromSlug($slug);
        $products   = $game->products()->orderBy('created_at', 'DESC')->get();
        $platforms  = Platform::all();
        $conditions = Condition::all();

        return View::make('site/game/view_game', compact('game', 'products', 'platforms', 'conditions'));
    }

    public function postSell($slug)
    {
        $user = $this->user->currentUser();

        if (is_null($user)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }

        $game       = $this->getModelFromSlug($slug);

        $this->product->insert([
            'user_id'       => $user->id,
            'game_id'       => (int)$game->id,
            'conditions_id' => (int)Input::get( 'condition' ),
            'price'         => Input::get( 'price' ),
            'description'   => '',
        ]);

        return Redirect::to($game->url())
            ->withInput()
            ->with('success', 'Your product was successfully saved, you can see it on your products area');
    }

    protected function getModelFromSlug($slug)
    {
        $game = $this->game->where('slug', '=', $slug)->first();

        if (is_null($game))
        {
            return App::abort(404);
        }

        return $game;
    }

    public function getSell()
    {
        return View::make('site/game/sell_search');
    }

    public function getSearch($query)
    {
        $games = $this->game->search($query);

        return View::make('site/game/search_games', compact('games', 'query'));
    }

    public function postOffer()
    {
        $user = $this->user->currentUser();

        if (is_null($user)) {

            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }

        $id = (int)Input::get('product_id');
        $product = Product::find($id);

        $this->offer->insert([
            'user_id'    => $user->id,
            'product_id' => $product->id,
            'price'      => (int)Input::get('price'),
            'status_id'  => 2,
        ]);

        return Redirect::to($product->game()->url())
            ->withInput()
            ->with('success', 'You successfully add an offer for this game');

    }

}