<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    //

    public function getInfo()
    {
        return response()->json([
            'email' => 'noblehart8@gmail.com',
            'current_datetime' => Carbon::now()->toIso8601String(),
            'github_url' => 'https://github.com/uche-hart/hng-stage-0'
        ]);
    }
}