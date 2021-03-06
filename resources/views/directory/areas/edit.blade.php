@extends('layouts.master')

@section('content')

    <h1>@lang('fo.Edit Area')</h1>
    <hr/>

    {!! Form::model($area, [
        'method' => 'PATCH',
        'url' => ['areas', $area->id],
        'class' => 'form-horizontal'
    ]) !!}

        <div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
        {!! Form::label('area', trans('fo.area'), ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('area', null, ['class' => 'form-control']) !!}
            {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
        {!! Form::label('empresa', trans('form.empresa'), ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('empresa', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
            {!! $errors->first('empresa', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit(trans('fo.Update'), ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection