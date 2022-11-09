<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_package_id',
        'image',
    ];

    protected $hidden = [];

    public function travelPackage(){
        return $this->belongsTo(TravelPackage::class, 'travel_package_id');
    }
}
