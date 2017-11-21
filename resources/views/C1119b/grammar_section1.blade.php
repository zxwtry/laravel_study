@extends('C1119b/layouts');



@section('content')

    <!-- 1, 模板中输出PHP变量 -->
    <h1>name: {{$name}}</h1>

    <!-- 2, 在模板中执行PHP代码 -->
    <p>{{ time() }}</p>
    <p>{{ date('Y-m-d H:i:s', time()) }}</p>
    <p>{{ in_array($name, $arr) ? 'true' : 'false'}}</p>
    {{ var_dump($arr) }}
    <p> name: {{ isset($name) ? $name : 'default_name' }} </p>
    <p> name: {{ isset($age) ? $age : 'default_age' }} </p>
    <p> name: {{ isset($sum) ? $sum : 'default_sum' }} </p>
    <!-- 3, 原样输出 -->
    @{{ var_dump($arr) }}

    {{-- 模板中的注释在html中是看不到的 --}}
    {{-- 比较隐私的注释可以通过模板注释来做 --}}
@stop
