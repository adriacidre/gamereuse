<?php

class Genre extends Eloquent
{

    public function genres()
    {
        return $this->belongsToMany('Games');
    }
}