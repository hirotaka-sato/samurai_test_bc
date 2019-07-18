<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    public function getData() {

        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
    
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric|min:0|max:150',
    ];

    public function boards() {
        return $this->hasMany('App\Board');
    }
}
