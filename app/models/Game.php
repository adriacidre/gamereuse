<?php

use Illuminate\Support\Facades\URL;

class Game extends Eloquent
{
    protected $urlPath = '/game/';
    protected $imagePath = '';

    public function products()
    {
        return $this->hasMany('Product');
    }

    public function platform()
    {
        return $this->belongsTo('Platform', 'platform_id')->first();
    }

    public function content()
    {
        return nl2br($this->content);
    }

    public function url()
    {
        return Url::to($this->urlPath . $this->slug);
    }

    public function sellUrl()
    {
        return Url::to($this->urlPath . 'sell/' . $this->slug);
    }

    public function image()
    {
        return Url::to($this->imagePath . $this->image);
    }

    public function hasImage()
    {
        return !empty($this->image);
    }

    public function genres()
    {
        return $this->belongsToMany('Genre', 'game_genres');
    }


    public function productsByPlatform($platformId)
    {
        return Product::where('platform_id', $platformId)
            ->where('game_id', $this->id)
            ->get();
    }

    public function getLast($max = 12)
    {
        return $this->orderBy('created_at', 'DESC')
            ->paginate($max);
    }

    public function getByPlatform($platform, $max = 12)
    {
        $games = $platform->games()->paginate($max);

        if (!count($games)) {
            $games = $platform->games()->paginate($max);
        }

        return $games;
    }

    public function search($searchQuery, $max = 12)
    {
        $query = urldecode($searchQuery);
        $query = str_replace(' ', ' & ', $query);

        return $this->whereRaw("searchtext @@ to_tsquery('$query')")->paginate($max);
    }
}