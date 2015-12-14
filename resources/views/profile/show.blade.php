<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>@yield('title')::Bountify::Realize abundance.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> [this line makes the page responsive on multiple interfaces]
        <link rel="stylesheet" href="/assets/css/profiles.css" /> [calls the stylesheet]
-->

@extends('layouts.master')
@section('title', $user->first_name." ".$user->last_name.'\'s Profile') <!--check $username here-->
@section('plugin-styles')
    <link rel="stylesheet" href="/assets/css/bootstrap-editable.css"> <!--edit this href to what the actual value is-->
@endsection
@section('page-header', 'My Profile')
@section('content')

                <div class="half-row col-md-6">
                         <div class="equal-height-title column-inner text-center">
                               <h3>{{{$user->$username}}}</h3>
                           </div>

                <div class="half-row col-md-6">
                         <div class="equal-height-title column-inner text-center">
                               <h3>{{{$user->first_name." ".$user->last_name}}}</h3>
                           </div>
                
                <div class="half-row col-md-6">
                         <div class="equal-height-title column-inner text-center">
                               <h3>{{{$user->email}}}</h3>
                           </div>

                <div class="half-row col-md-6">
                         <div class="equal-height-title column-inner text-center">
                               <h3>{{{$user->phone_number}}}</h3>
                           </div>


{{ Route::get('testController@edit' }}


@endsection
<!--<h1>Username</h1>
            <p>
                <div class="profile-info-value"><id="username">{{ $username->username }}</span></div>
                
            </p>

            <div><strong>Username: </strong> {{ $test->name }}</div>
            <div><strong>Description: </strong> {{ $test->description }}</div>

        <h1>Name:</h1>
             <p>
                <div class="profile-info-value"><id="first_name">{{ $username->first_name }}</span></div>
                <div class="profile-info-value"><id="last_name">{{ $username->last_name }}</span></div>
             </p>
        <h1>E-mail:</h1>
             <p>
                <div class="profile-info-value"><id="email">{{ $username->email }}</span></div>
            </p>-->
