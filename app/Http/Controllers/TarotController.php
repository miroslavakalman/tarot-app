<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spread;

class TarotController extends Controller
{
    public function index() {
        return view('tarot.index');
    }

    public function generate(Request $request) {
        $spread = Spread::inRandomOrder()->first();
        $cards = [
            'card1' => $this->getCardImage($spread->card1),
            'card2' => $this->getCardImage($spread->card2),
            'card3' => $this->getCardImage($spread->card3),
        ];
        return view('tarot.index', compact('spread', 'cards'));
    }

    private function getCardImage($cardName) {
        $cards = [
            'The Fool' => '0.png',
            'The Magician' => '1.png',
            'The High Priestess' => '2.png',
            'The Empress' => '3.png',
            'The Emperor' => '4.png',
            'The Hierophant' => '5.png',
            'The Lovers' => '6.png',
            'The Chariot' => '7.png',
            'Strength' => '8.png',
            'The Hermit' => '9.png',
            'Wheel of Fortune' => '10.png',
            'Justice' => '11.png',
            'The Hanged Man' => '12.png',
            'Death' => '13.png',
            'Temperance' => '14.png',
            'The Devil' => '15.png',
            'The Tower' => '16.png',
            'The Star' => '17.png',
            'The Moon' => '18.png',
            'The Sun' => '19.png',
            'Judgement' => '20.png',
            'The World' => '21.png'
        ];
        return $cards[$cardName] ?? 'default.png';
    }
}

