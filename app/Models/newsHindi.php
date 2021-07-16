<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class newsHindi extends Model
{
    use HasFactory;

    protected $table = 'news_hindis';

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'news_slug' => [
                'source' => 'n_title'
            ]
        ];
    }
}
