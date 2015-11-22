<?php

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
  public function run() {
    Quote::create([
      'text' => 'This is a test',
      'author' => 'Jim',
      'background' => '1.jpg'
    ]);
    Quote::create([
      'text' => 'Hello World!',
      'author' => 'Doom Kitty',
      'background' => '2.jpg'
    ]);
  }
}