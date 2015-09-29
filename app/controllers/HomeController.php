<?php


class HomeController extends BaseController
{
    /**
     * Game Model
     * @var Game
     */
    protected $game;

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param Game $game
     * @param User $user
     */
    public function __construct(Game $game, User $user)
    {
        parent::__construct();

        $this->game = $game;
        $this->user = $user;
    }

    public function getIndex()
    {
        $games  = $this->game->orderBy('created_at', 'DESC')->paginate(12);

        return View::make('site/home/index', compact('games'));
    }
} 