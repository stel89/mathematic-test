<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Language;
use App\City;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::all();

        foreach ($countries as $country)
        {
            $cities = explode(',', trim($country->towns));
            $i=0;
            foreach ($cities as $city)
            {
                    $towns[$country->id][$i] = City::find($city);
                    $i++;

            }
        }
        if (!isset($towns)) $towns=[];

        return view('main',['countries' => $countries, 'towns' => $towns]);
    }

    public function add_country(Request $request)
    {
      $country = new Country;

      $country->title = $request['country'];
        $country->towns = '';
      $country->save();

        $countries = Country::all();

        foreach ($countries as $country)
        {
            $cities = explode(',', trim($country->towns));
            $i=0;
            foreach ($cities as $city)
            {
                $towns[$country->id][$i] = City::find($city);
                $i++;

            }
        }
        if (!isset($towns)) $towns=[];

        if ($request->ajax()) {
            return view('main_content', ['countries' => $countries, 'towns' => $towns]);
        }
        return back();
    }

    public function add_language(Request $request)
    {
        $language = new Language;

        $language->title = $request['add_lang'];
        $language->save();

        $country2 = Country::find($request['id']);
        $language2 = Language::all();

        $cities2 = explode(',', trim($country2->towns));

        $i=0;

        foreach ($cities2 as $city)
        {
            $towns2[$i] = City::find($city);
            $i++;

        }

        return view('country_content', ['country' => $country2, 'languages' => $language2, 'cities' => $towns2]);

    }

    public function add_town(Request $request)
    {
        $country = Country::find($request['id']);
        $city = new City;
        $city->title = $request['town'];
        $city->language = $request['language'];
        $city->save();

        $country->towns = $country->towns.','.$city->id;
        $country->save();

        if ($request->ajax()) {

            $language2 = Language::all();

            $cities2 = explode(',', trim($country->towns));

            $i=0;

            foreach ($cities2 as $city)
            {
                $towns2[$i] = City::find($city);
                $i++;

            }

            return view('country_content', ['country' => $country, 'languages' => $language2, 'cities' => $towns2]);
        }

        return back();
    }

    public function show($id)
    {
        $country = Country::find($id);
        $language = Language::all();

        $cities = explode(',', trim($country->towns));

        $i=0;

        foreach ($cities as $city)
        {
                $towns[$i] = City::find($city);
                $i++;

        }


        return view('country', ['country' => $country, 'languages' => $language, 'cities' => $towns]);
    }

    public function destroy($id1, $id2)
    {
        $country=Country::find($id1);
        $city=City::find($id2);

        $cities = explode(',', trim($country->towns));

        for($i=0; $i<count($cities); $i++)
        {
            if ($cities[$i] == $id2) unset($cities[$i]);
        }

        $cities2 = implode(',', $cities);
        $country->towns = $cities2;
        $country->save();

        $city->delete();


            $country2 = Country::find($id1);
            $language2 = Language::all();

            $cities2 = explode(',', trim($country2->towns));

            $i=0;

            foreach ($cities2 as $city)
            {
                $towns2[$i] = City::find($city);
                $i++;

            }

            return view('country_content', ['country' => $country2, 'languages' => $language2, 'cities' => $towns2]);

    }

    public function destroy2($id)
    {
        $country=Country::find($id);
        if  (trim($country->towns) !='') {
            $cities = explode(',', trim($country->towns));

            foreach ($cities as $city)
            {
                if (trim($city) !='') {
                    $town = City::find($city);
                    $town->delete();
                }
            }

        }
        $country->delete();

    }
}
