<?php


class PlatformController extends BaseController {
    protected $platform;

    public function __construct(Platform $platform, Game $game)
    {
        parent::__construct();

        $this->platform = $platform;
        $this->game = $game;
    }

    public function getList()
    {
        $platforms = $this->platform->paginate(12);

        return View::make('site/platform/list_platforms', compact('platforms'));
    }

    public function getView($slug)
    {
        $platform = $this->platform->getBySlug($slug);

        if (is_null($platform))
        {
            return App::abort(404);
        }

        $games = $this->game->getByPlatform($platform, 12);

        return View::make('site/platform/view_platform', compact('platform', 'games'));
    }

} 