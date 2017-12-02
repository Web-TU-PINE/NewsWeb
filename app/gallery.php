<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
  protected $table = 'gallery';

  public function news(){
    return $this->belongsTo(news::class,'news_id');
  }
}
