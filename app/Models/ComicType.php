<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class ComicType extends Model {

  public function comic() {
    return $this->belongsTo('Comic');
  }

}