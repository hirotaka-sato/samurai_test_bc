<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    public function getData() {

        return $this->id . ': ' . $this->name .' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str) {

        return $query->where('name', $str);
    }

    protected static function boot() {

        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }
}
