@extends('C1119b/layouts')


@section('content')
    <p>{{time()}}</p>
    @include('C1119b.common1', ['msg' => '从section2来的msg'])
@stop