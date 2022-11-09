<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'languange',
        'food',
        'departure',
        'duration',
        'type',
        'price',
    ];

    protected $hidden = [];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_package_id');
    }
}
