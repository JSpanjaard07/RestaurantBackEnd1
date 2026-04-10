<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class DashboardController extends Controller
{
    public function index()
    {
        $menuItems = Menu::latest()->take(5)->get();

        return view('dashboard', compact('menuItems'));
    }
}