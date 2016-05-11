@extends('layouts.app')

@section('htmlheader_title')
	Crear Nuevo Evento
@endsection

<!--seccion principal-->
@section('main-content')
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-success">
					
		              {!! Form::open(array('route' => 'eventos.event.store', 'method' => 'POST')) !!}
		              	<div class="box-body">
		                    <div class="form-group">
								{!! Form::label('name','Nombre del evento') !!}
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del evento']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('ubicacion', 'Ubicación (opcional)') !!}
		                    	{!! Form::text('ubicacion', null, ['class' => 'form-control', 'placeholder' => 'Introduce la ubicación']) !!}
		                    </div>
		                    <div class="form-group">
		                    	{!! Form::label('comentario', 'Descripción (opcional)') !!}
		                    	{!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Agregar un comentario']) !!}
		                    </div>
		                    <div class="form-group">
		                    	<label for="InputText">Mi Nombre</label>
		                    	<input type="text" class="form-control" id="InputNameself"></input>
		                    </div>
		                    <div class="form-group">
		                    	<label for="InputText">Correo</label>
		                    	<input type="email" class="form-control" id="InputEmail"></input>
		                    </div>              		
		              	</div><!--/.box body-->

		                  <div class="box-footer">
		                    <button type="submit" class="btn btn-primary">Submit</button>
		                  </div>
		              {!! Form::close() !!}	
				</div>
			</div>
		</div>
	</section>
@endsection