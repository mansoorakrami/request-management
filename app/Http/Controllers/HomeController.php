<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth'=>'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function superadminindex()
    {
        return view('homes.superadmin.index');
    }

    public function masterindex()
    {
        return view('homes.master.index');
    }

    public function successorindex()
    {
        return view('homes.successor.index');
    }

    public function supportindex()
    {
        return view('homes.support.index');
    }

    public function ownerindex()
    {
        return view('homes.owner.index');
    }

    public function protectionindex()
    {
        return view('homes.protection.index');
    }

    public function financialindex()
    {
        return view('homes.financial.index');
    }

    public function support()
    {
        return view('homes.financial.index');
    }

}
