<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ComicType;

final class Comic extends Model {

  public function type() {
    return $this->hasOne('ComicType');
  }

}