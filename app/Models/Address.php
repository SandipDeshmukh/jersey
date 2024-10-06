<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address_type',
        'address',
        'country',
        'state',
        'mobile',
        'postCode',
        'customer_id',
    ];
    public static function getAddressByCustId($id){
        return self::where('customer_id', $id)->get();
    }
}
