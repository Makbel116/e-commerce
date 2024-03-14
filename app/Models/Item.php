<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    //to eale mass assigmet for the tale
    protected $fillable = ['name','Description','amount','image','status','category','price','discount'];
    //to set  null values to zero when the form is inserted
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->discount === null) {
                $model->discount = 0;
            }
        });
    }
}
