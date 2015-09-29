<?php

use Illuminate\Support\Facades\URL;

class Product extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('User', 'user_id')->first();
    }

    public function game()
    {
        return $this->belongsTo('Game', 'game_id')->first();
    }

    public function condition()
    {
        return $this->belongsTo('Condition', 'conditions_id')->first();
    }

    public function platform()
    {
        return $this->belongsTo('platform', 'platform_id');
    }

    public function price()
    {
        return number_format($this->price, 2);
    }
}