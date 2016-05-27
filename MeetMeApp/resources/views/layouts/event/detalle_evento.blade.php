@extends('layouts.app')

@section('htmlheader_title')
	Evento
@endsection

<!--seccion principal-->
@section('main-content')
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<!-- box-header -->
					<div class="box-header with-border">
						<h3 class="box-title">Eventos</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<strong>
							<i class="fa fa-calendar margin-r-5"></i>
							evento
						</strong>
						<p class="text-muted">{{ $detalleEvent->nombre_evento }}</p>
						<hr></hr>
						<strong>
							<i class="fa fa-map-marker margin-r-5"></i>
							Lugar
						</strong>
						<p class="text-muted">{{ $detalleEvent->ubicacion }}</p>
						<hr></hr>
						<strong>
							<i class="fa fa-pencil margin-r-5"></i>
							skills
						</strong>
						<p>
							<span class="label label-danger">UI Design</span>
							<span class="label label-success">Coding</span>
							<span class="label label-info">Javascript</span>
							<span class="label label-primary">PHP</span>
						</p>
						<hr></hr>
						<strong>
							<i class="fa fa-file-text-o margin-r-5"></i>
							Notas
						</strong>
						<p>{{ $detalleEvent->descripcion }}</p>
					</div>	
					<!-- /.box-body -->				
				</div>
			</div>
			<!--/.col-->
			<div class="col-md-9">
				@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				        {{ Session::get('flash_message') }}
				    </div>
				@endif
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#timeline" data-toggle="tab" aria-expanded="true">Detalle del evento</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="timeline" class="tab-pane active">
							<!--The timeline-->
							<ul class="timeline timeline-inverse">
								<!--timeline timelabel-->
								<li class="time-label">
									<span class="bg-red">{{ $detalleEvent->fecha_ini }}</span>
								</li>
								<!-- /.timeline-label -->
								<li>
									<i class="fa fa-calendar bg-blue"></i>
									<div class="timeline-item">
										<span class="time">
											<i class="fa fa-clock-o"></i>
											12:05
										</span>
										<h3 class="timeline-header">
											<a href="#">{{ $detalleEvent->nombre_evento }}</a> 
										</h3>
										<div class="timeline-body">
                            				{{ $detalleEvent->descripcion }}
										</div>
										<div class="timeline-footer">
											<a class="btn btn-primary btn-xs">Ir a calendario</a>
											<a class="btn btn-danger btn-xs">Eliminar</a>
										</div>
									</div>
								</li>
								<!-- END timeline item -->
							</ul>
						</div>
						<!-- /.tab-pane -->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection