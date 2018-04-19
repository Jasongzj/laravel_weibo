@extends('layouts.default')
@section('title', '重置密码')

@section('content')
<div class="col-sm-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">重置密码</div>
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">邮箱地址：</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email')}}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">发送重置密码邮件</button>
            </form>
        </div>
    </div>
</div>
@stop