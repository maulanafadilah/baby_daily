<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Global
        $page_title = 'Beranda';
        $page_description = "Beranda KMS Digital";
		$action = __FUNCTION__;

        // Component
        $header = 'default';
        $search = true;
        $extraHeader = false;
        $footer = true;
        $bottom = true;
        $sidebar = true;

        return view('index', compact('page_title', 'page_description', 'action', 'header', 'search', 'extraHeader', 'footer', 'bottom', 'sidebar'));
    }
}
