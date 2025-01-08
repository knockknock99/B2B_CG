<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kyc extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'gender', 'email', 'phone', 'dob', 'password',
        'state', 'city', 'pin', 'firm_name', 'address', 'aadhar_number', 'pan_number',
        'aadhar_front', 'aadhar_back', 'pan_upload', 'frontpic'
    ];

    

    // Accessor to generate user_id before saving the record
    public static function boot()
    {
        parent::boot();

        static::creating(function ($kyc) {
            if (empty($kyc->user_id)) {
                $kyc->user_id = 'CG' . rand(10000, 99999);
            }
        });
    }
  

}
