<?php

namespace App;

class Helpers
{
    function current_user()
    {
        return auth()->user();
    }
}
