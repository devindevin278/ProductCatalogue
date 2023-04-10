<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function controllerMethod(Request $request) {
        $key = $request->key;
        $product = [
            ['name' => 'The Red Gundam', 'price' => '100000', 'type' => 'R', 'desc' => 'Red Gundam, also known as the RX-78-2 Gundam, is a fictional mecha from the popular Japanese animated series Mobile Suit Gundam. It is one of the most iconic mobile suits in the franchise, and has been featured in various forms of media such as video games, films, and manga', 'index' => '1'],
            ['name' => 'The Blue Gundam', 'price' => '120000', 'type' => 'R', 'desc' => 'The Blue Gundam is also powered by a nuclear reactor, which provides it with nearly unlimited energy. It is equipped with advanced sensors and communications systems, which allow its pilot to stay connected with their allies and detect enemy movements.', 'index' => '2'],
            ['name' => 'Ultra Blue Gundam', 'price' => '220000', 'type' => 'SR', 'desc' => 'The Ultra Blue Gundam is equipped with a variety of weapons, including a beam rifle, a shield, and a beam saber. Its beam rifle fires powerful beams of energy that can penetrate most types of armor, while its shield provides excellent defense against enemy attacks. The beam saber is a close-combat weapon that can slice through almost anything with ease.', 'index' => '3'],
            ['name' => 'Ultra Red Gundam', 'price' => '210000', 'type' => 'SR', 'desc' => 'The Ultra Red Gundam is primarily red in color, with white and blue accents. Its body is sleek and aerodynamic, with a humanoid shape that allows for fluid movement and combat. It stands at 18 meters tall and weighs 43.4 tons.', 'index' => '4'],
            ['name' => 'Premium Red Gundam', 'price' => '350000', 'type' => 'SSR', 'desc' => 'Senior Premium Red Gundam is a fictional mecha from the Mobile Suit Gundam franchise that has been customized to cater to senior pilots who prefer a more luxurious experience. It is a variant of the Blue Gundam, with unique features that distinguish it from the original model.', 'index' => '5'],
            ['name' => 'Premium Green Gundam', 'price' => '360000', 'type' => 'SSR', 'desc' => 'The Senior Premium Green Gundam is equipped with a variety of high-tech weapons and systems, including a beam rifle, a shield, and a beam saber. It also has additional weapons such as a beam javelin and a mega particle cannon. These weapons are all powered by the Gundams nuclear reactor, which provides it with nearly unlimited energy.', 'index' => '6']
        ];
        return view('productdetail', compact('key'), compact('product'));
    }
}
