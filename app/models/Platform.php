<?php

use Illuminate\Support\Facades\URL;

class Platform extends Eloquent {

    public function __toString()
    {
        return $this->title;
    }

    public function getBySlug($slug)
    {
        return $this->where('slug', '=', $slug)->first();
    }

    public function games()
    {
        return $this->hasMany('Game');
    }

    public function url()
    {
        return '/platforms/' . $this->slug;
    }

    public function hasImage()
    {
        return !empty($this->image);
    }
} 