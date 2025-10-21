<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\UserConsent;


class ConsentController extends Controller
{
    public function accept(Request $request)
    {
        try {

            $guid = Str::uuid();
            $version = 1;
            $timestamp = now();

            // Save to DB
            UserConsent::create([
                'guid' => $guid,
                'accepted_at' => $timestamp,
                'version' => $version,
            ]);

            // Set cookie for 1 year
            return response()->json(['status' => 'accepted'])
                ->cookie('user_consent', json_encode([
                    'guid' => $guid,
                    'accepted_at' => $timestamp,
                    'version' => $version,
                ]), 60 * 24 * 365);

        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }

    public function decline(Request $request)
    {
        try {

            $timestamp = now();

            // Set decline cookie for 1 day
            return response()->json(['status' => 'declined'])
                ->cookie('user_decline', json_encode([
                    'declined_at' => $timestamp,
                ]), 60 * 24);

        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
}
