<?php
namespace App\Http\Controllers;

use App\Models\Quote;

class MotivationController extends Controller
{
  public function showQuote($id) {
    return view('quote.view', ['quote' => Quote::findOrFail($id)]);
  }
}