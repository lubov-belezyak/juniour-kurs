<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'name',
        'birthdate',
        'birthplace',
    ];

    public function getBirthdateAttribute($value) {
       return implode('.', array_reverse(explode('-', $value)));

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


