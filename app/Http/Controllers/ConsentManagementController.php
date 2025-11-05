<?php

namespace App\Http\Controllers;

use DB;
use App\Constants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Consent;

class ConsentManagementController extends Controller
{
    public function index()
    {
        try {
            $content = null;
            $term = Constants::TERM_CONDITION;
            $privacy = Constants::PRIVACY_POLICY;
            $break = Constants::NEW_LINE;

            $activeConsent = Consent::where('status', 'active')->first();
            if($activeConsent){
                $search = array("{new_line}", "{terms}" ,"{privacy}");
                $replace = array($break , $term , $privacy);

                $content = str_replace($search , $replace , $activeConsent->consent_text);
            }
        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }

        $datas = Consent::all();
        return view('admin.consents.index', compact('datas', 'activeConsent', 'content'));
    }

    /**
     * Activate selected consent form.
     */
    public function activate(Request $request, Consent $consent)
    {
        try {

            $consent->setActive();

        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }

        return redirect()->back()->with('success', 'Consent activated successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.consents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'consent_text' => 'required|string',
        ]);

        try {

            $version = number_format(Consent::count() + 1, 1);

            if($request->status)
            {
                DB::transaction(function () {
                // Deactivate all existing active records in the table
                    Consent::where('status', 'active')->update(['status' => 'deactive']);
                });
            }

            $consent = Consent::create([
                'consent_text' => $request->consent_text,
                'status' => $request->status ?? "deactive",
                'version' => $version,
                'created_by' => Auth::id(),
            ]);

        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }

        return redirect()->route('consents.index')->with('success', 'Consent created successfully!');

    }

}
