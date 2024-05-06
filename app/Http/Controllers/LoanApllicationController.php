<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LoanApllicationController extends Controller
{
    //
    public function index(){
        return Inertia::render('Front/LoanIndex');
    }
    public function information(){
        return Inertia::render('Front/LoanInformation');
    }
    public function eschedule(){
        return Inertia::render('Front/LoanEschedule');
    }
}
