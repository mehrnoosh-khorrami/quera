<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['text' => $this->convertText($request->text)]);
    }

    protected function convertText($text)
    {
        $alpha = [
            'a' => 'ش',
            'b' => 'ذ',
            'c' => 'ز',
            'd' => 'ی',
            'e' => 'ث',
            'f' => 'ب',
            'g' => 'ل',
            'h' => 'ا',
            'i' => 'ه',
            'j' => 'ت',
            'k' => 'ن',
            'l' => 'م',
            'm' => 'پ',
            'n' => 'د',
            'o' => 'خ',
            'p' => 'ح',
            'q' => 'ض',
            'r' => 'ق',
            's' => 'س',
            't' => 'ف',
            'u' => 'ع',
            'v' => 'ر',
            'w' => 'ص',
            'x' => 'ط',
            'y' => 'غ',
            'z' => 'ظ',
            ';' => 'ک',
            '\'' => 'گ',
            ',' => 'و',
            '[' => 'ج',
            ']' => 'چ',
            '`' => 'ژ',
            ' ' => ' '
        ];
        foreach ($alpha as $k => $value) {
            $text = str_ireplace($k, $value, $text);
        }

        return $text;
    }
}

