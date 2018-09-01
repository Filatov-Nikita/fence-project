<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index($city) {
        $product = Product::find(0);
       $listCities = [
            'ufa' => 'Уфа',
            'kazan' => 'Казань',
            'samara' => 'Самара'
       ];
      if(!array_key_exists($city, $listCities)) {
          abort(404);
      }
   
      $currentCity = mb_substr($listCities[$city], 0, -1) . 'e';
      

       return view('index', ['city' => $currentCity, 'listCities' => $listCities, 'product' => $product]);
    }

    public function admin() {
       $product = Product::find(0);
       return view('admin', ['product' => $product]);
    }
    public function adminPost(Request $request) {
        $product = Product::find(0);
        $product->name = $request->input('name');
        $product->save();
        return view('admin', ['product' => $product])->with(['success' => 'Успешно']);
     }
}
