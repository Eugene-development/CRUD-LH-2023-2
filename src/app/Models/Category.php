<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'category';

    public function product(): MorphMany
    {
        return $this->morphMany(Product::class, 'parentable');
    }

    public function text(): MorphMany
    {
        return $this->morphMany(Text::class, 'parentable');
    }

    public function seoTitle(): MorphOne
    {
        return $this->morphOne(SeoTitle::class, 'parentable');
    }
    public function seoDescription(): MorphOne
    {
        return $this->morphOne(SeoDescription::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
