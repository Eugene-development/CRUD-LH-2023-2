<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'service';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
