<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $json = file_get_contents(base_path('resources/word-rus-eng.json'));
        $words = json_decode($json, true);

        $randNum = rand(1, 3);

        return view('Home', [
            'words' => $words,
            'randNum' => $randNum,
        ]);
    }
}
