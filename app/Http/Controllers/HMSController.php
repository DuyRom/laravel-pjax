<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HMS;

class HMSController extends Controller
{
    public function demo()
    {
    	echo "Test";
    }

    public function hms()
    {
    	$hms = HMS::select('BienSo','Km')->take(5)->get();
    	dd($hms);
    }
}
