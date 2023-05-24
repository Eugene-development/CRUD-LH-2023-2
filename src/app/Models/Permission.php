<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Permission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'permission';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
