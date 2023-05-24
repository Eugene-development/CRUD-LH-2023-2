<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'property';

//    protected $primaryKey = 'uuid';
//
//    public function getKeyType()
//    {
//        return 'string';
//    }


    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }

}
