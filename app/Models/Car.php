<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'image_code'
    ];

    protected $appends = ["image_url"];

    public function getImageUrlAttribute(): ?string
    {
        if(!is_null($this->image_code)) {
            return Storage::url($this->image_code);
        }

        return null;
    }
}
