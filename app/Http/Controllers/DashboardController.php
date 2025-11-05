<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserConsent;
use DataTables;

class DashboardController extends Controller
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
            
            $query = \App\Models\UserConsent::query();

            if ($request->filled('start_date') && $request->filled('end_date')) {
                $query->whereBetween('accepted_at', [
                    $request->start_date . ' 00:00:00',
                    $request->end_date . ' 23:59:59'
                ]);
            }

            $datas = $query->orderBy('accepted_at', 'desc')->get();

            return view('home', compact('datas'));

        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
}
