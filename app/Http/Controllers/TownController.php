<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Language;
use App\City;

class TownController extends Controller
{

    public function show($id1, $id2)
    {
        $city = City::find($id2);
        $languages = explode(',',$city->language);
        for($i=0; $i< count($languages); $i++)
        {
            if(trim($languages[$i]) =='') unset($languages[$i]);
        }
        $languages2 = Language::all();

        return view('town',['city' => $city, 'languages'=> $languages, 'languages2'=> $languages2, 'id1'=>$id1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function add_lang($id, Request $request)
    {
        $city = City::find($id);
        $city->language = $city->language.','.$request['lang'];
        $city->save();

        $languages = explode(',',$city->language);
        for($i=0; $i< count($languages); $i++)
        {
            if(trim($languages[$i]) =='') unset($languages[$i]);
        }
        $languages2 = Language::all();

        return view('town_content',['city' => $city, 'languages'=> $languages, 'languages2'=> $languages2, 'id1'=>$request['id1']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id1, $id2)
    {
        $city = City::find($id2);
        $city->title = $request['title'];
        $language='';
        for ($i=0; $i<$request['count']; $i++)
        {
            if ($request['language' . $i] != 'delete') {
                if ($language == '') {
                    $language .= $request['language' . $i];
                } else {
                    $language .= ',' . $request['language' . $i];
                }
            }
        }
        $city->language = rtrim($language,',');
        $city->save();

        return redirect('/country/'.$id1);
    }

}
