@extends('layouts.admin')

@section('content')
    <div class="container well col-lg-12">
    	<div class="row">
            @include('Alerta.alertaFormulario')
    		<div class="col-lg-8 col-lg-offset-2 form-horizontal">
                <h3>Detalle de Investigacion</h3>
                {!! Form::open(['route'=>'investigacion.store','method'=>'POST']) !!}
                <div class="control-group">
                    {{ Form::label("Nombre: ") }}
                    <div class="controls">
                    	{!! Form::text('nombre',null,["class"=>"form-control","placeholder"=>"Investigacion..."]) !!}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label("Descripcion: ") }}
                    <div class="controls">
                    	{!! Form::textarea('descripcion',null,["class"=>"form-control","placeholder"=>"Descripcion...","rows"=>5]) !!}
                    </div>
                </div>
                <div class="control-group">
                    {{Form::label("Areas: ")}}
                    <div class="controls">
                        @foreach($areas as $area)
                            {{ Form::radio('inv',$area->id,false) }}{{$area->nombre }}<br>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="control-group">
                   <div class="controls">
                   		{!! Form::submit("Registrar",['class'=>'form-control btn btn-primary']) !!}
                   </div>
              </div>
            </div>
    	</div>
    </div>
@stop