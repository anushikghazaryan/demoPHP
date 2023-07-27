<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function customUsers() : BelongsToMany {
        return $this->belongsToMany(CustomUser::class)->as('named');
    }
}
