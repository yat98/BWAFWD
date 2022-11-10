<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_package_id',
        'user_id',
        'additional_visa',
        'transaction_total',
        'transaction_status',
    ];

    protected $hidden = [];

    public function travelPackage(){
        return $this->belongsTo(TravelPackage::class, 'travel_package_id');
    }

    public function transactionMembers(){
        return $this->hasMany(TransactionMember::class, 'transaction_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
