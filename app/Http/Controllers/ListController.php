<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Language;
use App\City;

class ListController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('list',['countries' => $countries]);
    }

    public function get_towns($id)
    {
        $country = Country::find($id);

        $cities = explode(',', trim($country->towns));
        $i=0;
        foreach ($cities as $city)
        {
            $towns[$i] = City::find($city);
            $i++;

        }
        if (!isset($towns)) $towns[0]='Городов нет';


        return response()->json(['data' => $towns]);
    }

    public function get_lang($id)
    {
        $city= City::find($id);

        $languages = explode(',',$city->language);
        for($i=0; $i< count($languages); $i++)
        {
            if(trim($languages[$i]) =='') unset($languages[$i]);
        }


        return response()->json(['data' => $languages]);
    }

}
