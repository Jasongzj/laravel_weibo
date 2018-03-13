@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">你现在看到的是一个再来一次的Laravel练习</p>
        <p>一切，将从这里再次开始</p>
        <p><a class="btn btn-lg btn-success" href="{{ route('signup') }}">现在注册</a></p>
    </div>
@stop