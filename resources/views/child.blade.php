@extends('master')

@section('title','注册')

@section('sidebar')
    @parent
    <h1>yaoqingsong</h1>
@endsection

@section('content')
    <p>This is my body {{$name or 'defalut'}}.</p>
    {{ time() }}
    hello , @function aa(){
    }

    {{ isset($names) ? $names : 'Default' }}
    {{ $names or 'Default' }}
    <br>
    <br>
    {{--{!!   '<script>alert("spam spam spam!")</script>' !!}--}}

    if表达式
    <hr>
    {{--@if($name == 'aigo')--}}
        {{--I want a book, I'm going to the bookshop.--}}
    {{--@elseif($name == '')--}}
        {{--哈哈--}}
    {{--@else--}}
        {{--嘿嘿--}}
    {{--@endif--}}

    {{--取反--}}
    {{--@unless($name == 'aigo')--}}
        {{--his is name aigo.--}}
    {{--@endunless--}}

    {{--{{ dump($yao) }}--}}
    {{--{{dump($a)}}--}}
    {{dump($data)}}




    {{--@include('errors.503')--}}



@endsection


