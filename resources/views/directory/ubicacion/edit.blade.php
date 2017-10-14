@extends('layouts.master')

@section('content')

    <h1>Edit Ubicacion</h1>
    <hr/>

    {!! Form::model($ubicacion, [
        'method' => 'PATCH',
        'url' => ['ubicacion', $ubicacion->id],
        'class' => 'form-horizontal'
    ]) !!}


            @php( $campo = 'estacione_id' )
            <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
                {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select($campo,  \App\Estaciones::all()->pluck('estacion','id'), null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('edificio') ? 'has-error' : ''}}">
                {!! Form::label('edificio', 'Edificio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('edificio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('edificio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('piso') ? 'has-error' : ''}}">
                {!! Form::label('piso', 'Piso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('piso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            @php( $campo = 'area_id' )
            <div class="form-group {{ $errors->has($campo) ? 'has-error' : ''}}">
                {!! Form::label($campo, $campo.':', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select($campo,  \App\Areas::all()->pluck('area','id'), null, ['class' => 'chosen-select form-control']) }}
                    {!! $errors->first($campo, '<p class="help-block">:message</p>') !!}
                </div>
            </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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