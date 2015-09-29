<?php

class StaticController extends BaseController {

    public function __construct()
    {

    }

    public function getAbout()
    {
        return View::make('site/static/about');
    }

    public function getTerms()
    {
        return View::make('site/static/terms');
    }

    public function getPrivacy()
    {
        return View::make('site/static/privacy');
    }
}