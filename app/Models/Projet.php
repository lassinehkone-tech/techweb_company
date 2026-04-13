<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $guarded = [];

    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return asset('storage/' . ltrim($this->image, '/'));
    }
}
