@extends('C1119b/layouts');


@section('header')
    @parent
    header_section1
@stop


@section('sidebar')
    sidebar_section1
@stop

@section('content')
    <!--
        因为content是yield
        所以@parent不起作用
    -->
    @parent
    content
@stop
