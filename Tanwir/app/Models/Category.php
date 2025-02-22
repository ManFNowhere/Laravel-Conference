<?php

namespace App\Models;

use App\Models\Tutorial;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tutorial(): HasMany
    {
        return $this->hasMany(Tutorial::class);
    }
}
