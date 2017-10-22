<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    protected $guarded = [];

    public function type()
    {
        return $this->type;
    }
}
