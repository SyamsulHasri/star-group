<?php

namespace App;
use Illuminate\Support\Facades\URL;

class Constants
{
    // state constant variable value for using in consent form
    const NEW_LINE = "<br>";

    public static function termCondition(): string
    {
        return "<a href='" . URL::to('/terms') . "' target='_blank' rel='noopener noreferrer' class='text-primary text-decoration-underline'>Terms & Conditions</a>";
    }

    public static function privacyPolicy(): string
    {
        return "<a href='" . URL::to('/privacy-policy') . "' target='_blank' rel='noopener noreferrer' class='text-primary text-decoration-underline'>Terms & Conditions</a>";
    }
}