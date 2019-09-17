<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('how-mint-works');
    }

    public function bills()
    {
        return view('working.bills');
    }

    public function budgets()
    {
        return view('working.budgets');
    }

    public function credits()
    {
        return view('working.credit');
    }

    public function alerts()
    {
        return view('working.alerts');
    }

    public function categorization()
    {
        return view('working.categorization');
    }

    public function investments()
    {
        return view('working.investments');
    }

    public function security()
    {
        return view('working.security');
    }
    public function credit(){
        return view('working.credit');
    }

}
