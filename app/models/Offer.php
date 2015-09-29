<?php


class Offer extends Eloquent
{
    public function product()
    {
        return $this->belongsTo('Product', 'product_id')->first();
    }

    public function status()
    {
        return $this->belongsTo('Status', 'status_id')->first();
    }
} 