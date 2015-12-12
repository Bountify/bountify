@extends('layouts.master')

@section('content')
    <h1>Gifts and Needs</h1>

<hr/>

@foreach($giftNeeds as $giftNeed)
    <giftNeed>

        <h2>

            <a href="{{ url('/giftNeeds', $giftNeed->id) }}">{{ $giftNeed->title }}</a>
        
        </h2>

    <div class="body">{{ $giftNeed->body }}</div> <!--fill this with characteristics of the giftNeed-->

</giftNeed>

@endforeach

@stop
































