<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class SeoQuery extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seoquery';

    public function resource(): MorphMany
    {
        return $this->morphMany(Resource::class, 'parentable');
    }

    public function position(): MorphMany
    {
        return $this->morphMany(Position::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
