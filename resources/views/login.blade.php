@extends('layouts.base')


@section('content')
    <div class="a-content">
        <div class="inner">
            <form>
                <h1 class="content-heading">Admin Login</h1>
                <div class="input-group">
                    <input type="text" id="username" class="form-control" placeholder="帐号" required>
                    <input type="text" id="password" class="form-control" placeholder="密码" required>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
            </form>        
        </div>
    </div>


@stop
