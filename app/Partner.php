<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Partner extends Model
{
  protected $fillable=["name","logo"];

  public function projects(){

     return $this->hasMany(Project::class);
  }
}
