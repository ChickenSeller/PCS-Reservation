@extends('layouts.base')


@section('content')
    <div class="a-content">
        <div class="inner">
            {!! Form::open(array('url'=>'login','method'=>'post'))  !!}
                <h1 class="content-heading">Admin Login</h1>
                <div class="input-group">
                    {!! Form::text('name',"",array('class'=>'form-control','placeholder'=>'账号','required'=>'')) !!}
                    {!! Form::password('password',array('class'=>'form-control','placeholder'=>'密码','required'=>'')) !!}
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
            {!!  Form::close()  !!}
        </div>
    </div>


@stop
