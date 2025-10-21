<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserConsent;
use DataTables;

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
    public function index(Request $request)
    {
        try {
            $datas = UserConsent::all();
            return view('home', compact('datas'));
        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
}
