<?php

use App\Models\Comic;
use App\Models\ComicType;

use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
  public function run() {

    DB::table('comics')->delete();
    DB::table('comic_types')->delete();

    $strip = ComicType::create([
      'name' => 'Strip'
    ]);

    $book = ComicType::create([
      'name' => 'Book'
    ]);


    $wallace = Comic::create([
      'comic_type_id' => $strip->id,
      'title' => 'Wallace and Friends'
    ]);

  }
}