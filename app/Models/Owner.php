<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Owner extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function house() : HasOne {
        return $this->hasOne(House::class);
    }

    public function cars() : HasMany {
        return $this->hasMany(Car::class);
    }
}
