<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    public function getdata(){
      return $this->id . ':' . $this->name .' (' . $this->age .')';
    }

    public function scopeNameEqual($query, $str){
      return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n){
      return $query->where('age','>=', $n);
    }

    public function scopeAgeLessThan($query, $n){
      return $query->where('age','<=', $n);
    }
}
