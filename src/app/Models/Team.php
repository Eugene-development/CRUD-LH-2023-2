<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'team';

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
