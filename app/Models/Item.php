<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {


        if ($filters['tag'] ?? false) {
            $query->where('category', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('category', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }

    //to eale mass assigmet for the tale
    protected $fillable = ['name', 'Description', 'amount', 'image', 'status', 'category', 'price', 'discount','user_id'];
    //to set  null values to zero when the form is inserted
    protected static function boot()
    {

        parent::boot();
        //to set the discout 0 if the user iserted othig
        static::creating(function ($model) {
            if ($model->discount === null) {
                $model->discount = 0;
            }
        });
    }
    //Relationship with the user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
