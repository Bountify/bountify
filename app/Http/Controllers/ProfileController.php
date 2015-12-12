<?php

namespace Bountify\Http\Controllers;

class ProfileController extends Controller
{
    public function show($username)
    {

//write a Profile model so line 12 passes

    	//$profile = Profile::findBySlug($username);

    	$profile = new stdClass;
    	$profile->first_name="nick";
    		//do this for all properties that I want to display in profile

    	return view ('profile.show', ['profile'=>$profile]);
    }
}
