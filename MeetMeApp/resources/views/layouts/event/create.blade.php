@extends('layouts.app')

@section('htmlheader_title')
	Crear Nuevo Evento
@endsection

<!--seccion principal-->
@section('main-content')
	<section class="content">
		<div class="row">
			<div class="col-md-8">
		{!! Form::open(
				array(
					'route' => 'evento.store', 
					'class' => 'form')
		) !!}
			@if($errors->any())
	            <div class="alert alert-danger">
	                <strong>Whoops!</strong> Hay algunos problemas con tus entradas.<br><br>
	                <ul>
	                    @foreach ($errors->all() as $error)
	                        <li>{{ $error }}</li>
	                    @endforeach
	                </ul>
	            </div>
			@endif
				<div class="box box-success">
					{{ Form::hidden('user_id', Auth::user()->id, array('id' => 'user_id')) }}
		              	<div class="box-body">
		                    <div class="form-group">
								{!! Form::label('nombre_evento','Nombre del evento') !!}
								{!! Form::text('nombre_evento', null, ['class' => 'form-control', 'placeholder' => 'Nombre del evento']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('ubicacion', 'Ubicación (opcional)') !!}
		                    	{!! Form::text('ubicacion', null, ['class' => 'form-control', 'placeholder' => 'Introduce la ubicación']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('descripcion', 'Descripción (opcional)') !!}
		                    	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Agregar un comentario', 'size' => '5x4']) !!}
		                    </div>
		                    <div class="form-group">
			                    {!! Form::label('fecha_ini', 'Fecha inicio') !!}
			                    <div class="input-group">
			                      <div class="input-group-addon">
			                        <i class="fa fa-calendar"></i>
			                      </div>
			                      {!! Form::text('fecha_ini', null, ['class' => 'form-control datelonger', 'id' => 'fecha_ini'])!!}
			                    </div><!-- /.input group -->
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('fecha_fin', 'Fecha fin (opcional)') !!}
			                    <div class="input-group">
			                      <div class="input-group-addon">
			                        <i class="fa fa-calendar"></i>
			                      </div>
			                      {!! Form::text('fecha_fin', null, ['class' => 'form-control datelonger', 'id' => 'fecha_fin'])!!}
			                    </div><!-- /.input group -->
		                    </div>              		
		              	</div><!--/.box body-->

		                  <div class="box-footer">
		                  	{{ Form::submit('Agregar', array('class' => 'btn btn-primary'))}}
		                  </div>
		              
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</section>
@endsection