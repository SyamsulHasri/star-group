<?php

namespace App;

class Constants
{
    // state constant variable value for using in consent form
    const NEW_LINE = "<br>";
    const TERM_CONDITION = "<a href='{{ url('/terms') }}' target='_blank' class='text-primary text-decoration-underline'>Terms & Conditions</a>";
    const PRIVACY_POLICY = "<a href='{{ url('/privacy-policy') }}' target='_blank' class='text-primary text-decoration-underline'>Privacy Statement</a>";

}