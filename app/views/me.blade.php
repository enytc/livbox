@extends('template')

@section('title')
{{ trans('users.edit.title', array('email' => $user->email)) }}
@stop

@section('content')
<a href="{{ URL::to('/') }}" class="btn btn-lg btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> {{ trans('buttons.back') }}</a>
<hr />
<form class="form-horizontal" role="form" method="post" action="{{ URL::to('me/update') }}/{{ $user->id }}">
    <div class="form-group">
        <label for="email" class="col-lg-2 control-label">{{ trans('users.email') }}</label>
        <div class="col-lg-10">
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="{{ trans('users.email') }}">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-lg-2 control-label">{{ trans('users.password') }}</label>
        <div class="col-lg-10">
            <input type="password" class="form-control" name="password" placeholder="{{ trans('users.password') }}">
        </div>
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="col-lg-2 control-label">{{ trans('users.password_confirmation') }}</label>
        <div class="col-lg-10">
            <input type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('users.password_confirmation') }}">
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> {{ trans('buttons.edit') }}</button>
        </div>
    </div>
</form>
@stop