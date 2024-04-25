<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome'],
        ];

        $activeMenu = 'dashboard';

        return view('welcome', compact('breadcrumb', 'activeMenu'));
    }
}
