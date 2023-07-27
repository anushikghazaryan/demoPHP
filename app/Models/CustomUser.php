<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomUser extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function roles() : BelongsToMany {
        return $this->belongsToMany(Role::class)->as('named');
    }
}
