<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use function Monolog\alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function managerDashboard()
{
    return view('manager_dashboard');

}
public function superAdminDashboard()
{
    return view('backend.home');

}




}
