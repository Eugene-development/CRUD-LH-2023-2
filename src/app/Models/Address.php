<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'address';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
