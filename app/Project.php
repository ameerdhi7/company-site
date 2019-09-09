<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable=["title","location","partner_id","year"];
   public function Partner(){
      return $this->belongsTo(Partner::class);
   }
}
