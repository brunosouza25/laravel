<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $name = 'bruno';
        $age = 23;
        $profession = 'developer';
    
        $array = [1, 2, 3, 4, 5];
    
        $names = ['bruno', 'leandra', 'maria', 'josé'];

        return view('welcome', ['name' => $name, 'age' => $age, 'profession' => $profession, 'array' => $array, 'names' => $names]);
    }

    public function create() {
        return view('events.create');
    }
}
