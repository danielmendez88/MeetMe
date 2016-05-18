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
		                    	{!! Form::label('user_id', 'Mi nombre') !!}
		                    	{!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'Mi Nombre']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('creado_por', 'Correo Eléctronico') !!}
		                    	{!! Form::email('creado_por', null, ['class' => 'form-control', 'placeholder' => 'correo@dominio.com'])!!}
		                    </div>              		
		              	</div><!--/.box body-->

		                  <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">Agregar</button>
		                  </div>
		              
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</section>
@endsection