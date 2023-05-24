<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Price extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'price';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
