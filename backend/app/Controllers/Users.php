<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing');
    }

    public function moodBoard(): string
    {
        return view('user/moodBoard');
    }

    public function roadMap(): string
    {
        return view('user/roadMap');
    }

    public function menuPage(): string
    {
        return view('user/menuPage');
    }

    public function userProfile(): string
    {
        return view('user/userProfile');
    }

    public function orderPage(): string
    {
        return view('user/orderPage');
    }
}
