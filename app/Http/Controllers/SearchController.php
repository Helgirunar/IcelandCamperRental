<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SearchController extends Controller
{
    public function index()
    {
        $attributes = request()->validate([
            'startDate' => 'required|string',
            'endDate' => 'required|string',
            'startDateTime' => 'required|string',
            'endDateTime' => 'required|string',
        ]);
        $attributes['startDate'] = new Carbon($attributes['startDate']);
        $attributes['endDate'] = new Carbon($attributes['endDate']);
        $attributes['startDateTime'] = str_replace(':','',$attributes['startDateTime']);
        $attributes['endDateTime'] = str_replace(':','',$attributes['endDateTime']);
        $url = "https://www.northbound.is/search?start=" . $attributes['startDate'] . "&start-time=" . $attributes['startDateTime'] . "&end=" . $attributes['endDate'] . "&end-time=" . $attributes['endDateTime'] . "&o=recommended&c=camper&f=1,0";
        return redirect($url);
    }
}
