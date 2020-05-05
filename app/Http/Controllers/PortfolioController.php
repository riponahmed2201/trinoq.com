<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('frontend.pages.portfolio');
    }

    public function portfolioDetails() 
    {
        return view('frontend.pages.portfolio_details');
    }
}
