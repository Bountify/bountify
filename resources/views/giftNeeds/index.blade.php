@extends('layouts.master')

@section('content')
    <h1>{{ $giftNeed->title }}</h1>

    <giftNeed>

        {{ $giftNeed->body }}

    </giftNeed>

@stop