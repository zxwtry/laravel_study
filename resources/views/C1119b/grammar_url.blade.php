@extends('C1119b.layouts')


@section('content')

    <a href="{{url('1118b/info5')}}">url</a>
    <br/>
    <a href="{{action('C1118bController@info')}}">action</a>
    <br/>
    <a href="{{route('1118b_info5')}}">route</a>

@stop
