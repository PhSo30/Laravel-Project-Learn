<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cards = [
            ['title' => 'Users', 'discription' => 'Maintaining all user function!', 'image' => 'img/bird.png', 'redirection' => '/users'],
            ['title' => 'Report', 'discription' => 'View and manage reports!', 'image' => 'img/bird_green.png', 'redirection' => '/reports'],
            ['title' => 'Users', 'discription' => 'Maintaining all user function!', 'image' => 'img/bird.png', 'redirection' => '/users'],
            ['title' => 'Report', 'discription' => 'View and manage reports!', 'image' => 'img/bird.png', 'redirection' => '/reports'],
            ['title' => 'Users', 'discription' => 'Maintaining all user function!', 'image' => 'img/bird.png', 'redirection' => '/users'],
            ['title' => 'Report', 'discription' => 'View and manage reports!', 'image' => 'img/bird.png', 'redirection' => '/reports'],   
        ];
        return view('home', compact('cards'));
    }
}
