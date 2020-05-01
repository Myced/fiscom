<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get all active documents.
        $documents = Document::where('active', true)->get();

        return view('front.index', compact('documents'));
    }

    public function apropos()
    {
        return view('front.apropos');
    }

    public function publication()
    {
        return view('front.publication');
    }
    public function metier()
    {
        return view('front.metier');
    }
    public function bibliotheque()
    {
        return view('front.bibliotheque');
    }
    public function reseau()
    {
        return view('front.reseau');
    }

    public function eventDetail()
    {
        return view('front.event_detail');
    }
    public function profile()
    {
        return view('front.profile');
    }
    public function booking()
    {
        return view('front.booking');
    }
    public function forfait()
    {
        return view('front.forfait');
    }
    public function myprofile()
    {
        return view('front.myprofile');
    }
    public function metierDetail()
    {
        return view('front.metier_detail');
    }
    public function claim()
    {
        return view('front.claim');
    }
    public function payment()
    {
        return view('front.payment');
    }

}
