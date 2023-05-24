<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;



class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'project';

    public function seoquery(): MorphMany
    {
        return $this->MorphMany(Seoquery::class, 'parentable');
    }

    public function resource(): MorphMany
    {
        return $this->MorphMany(Resource::class, 'parentable');
    }

    public function text(): MorphMany
    {
        return $this->morphMany(Text::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
