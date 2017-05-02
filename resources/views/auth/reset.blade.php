@extends('layouts.default')
@section('title','更新密码')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">更新密码</div>
                    <div class="panel-body">

                        @include('shared.errors')

                        <form method="POST" action="{{ route('password.update') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
