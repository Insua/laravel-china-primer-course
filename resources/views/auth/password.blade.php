@extends('layouts.default')
@section('title','重置密码')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">重置密码</div>
                <div class="panel-body">

                    @include('shared.errors')

                    <form method="POST" action="{{ route('password.reset') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop