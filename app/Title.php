<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model {
    protected $guarded = [];

    public function results()
    {
        return $this->hasMany('App\Result');
    }

}