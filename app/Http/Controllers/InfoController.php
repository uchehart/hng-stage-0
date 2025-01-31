<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class InfoController extends Controller
{
    //

    public function getInfo()
    {
        return response()->json([
            'email' => 'noblehart8@gmail.com',
            'current_datetime' => Carbon::now()->toIso8601String(),
            'github_url' => 'https://github.com/uchehart/hng-stage-0',
        ]);
    }
}
