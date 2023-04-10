<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function controllerMethod(Request $request) {
        $key = $request->key;
        $product = [
            ['name' => 'The Red Gundam', 'price' => '100000', 'type' => 'r', 'desc' => 'Red Gundam, also known as the RX-78-2 Gundam, is a fictional mecha from the popular Japanese animated series Mobile Suit Gundam. It is one of the most iconic mobile suits in the franchise, and has been featured in various forms of media such as video games, films, and manga', 'index' => '1'],
            ['name' => 'The Blue Gundam', 'price' => '120000', 'type' => 'r', 'desc' => 'hai', 'index' => '2'],
            ['name' => 'Ultra Blue Gundam', 'price' => '220000', 'type' => 'sr', 'desc' => '', 'index' => '3'],
            ['name' => 'Ultra Red Gundam', 'price' => '210000', 'type' => 'sr', 'desc' => '', 'index' => '4'],
            ['name' => 'Senior Premium Red Gundam', 'price' => '350000', 'type' => 'ssr', 'desc' => '', 'index' => '5'],
            ['name' => 'Senior Premium Green Gundam', 'price' => '360000', 'type' => 'ssr', 'desc' => '', 'index' => '6']
        ];
        return view('productdetail', compact('key'), compact('product'));
    }
}
