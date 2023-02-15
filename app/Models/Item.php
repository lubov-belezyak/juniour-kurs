<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'description',
        'cost',
        'amount',

    ];

    public function getCostAttribute($value) {
        return number_format($value, 2, '.', ' ');
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)
        -> format ('d.m.Y H:i:s');

    }

    public function getUpdatedAtAttribute($value) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)
        -> format ('d.m.Y H:i:s');

    }

}
