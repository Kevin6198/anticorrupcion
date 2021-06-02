@extends('template.master')

@section('contenido_transparencia')


<section class="informes">
		<div class="contenedor1">
			<h2 class="titulo" align="center"> Informes de transparencia</h2>
			<div class="contenedor-mes">
				<div class="mes">

					
					<a href="transparenciaini"><img  src="{!! asset('imgs/cpc1.png') !!}"></a>
					<div class="texto-libro">
						<h3>INFORMES ANUALES</h3>	
						
					</div>
				</div>
				<div class="mes">
					<img src="{!! asset('imgs/cpc2.png') !!}">
					<div class="texto-libro">
						<h3>MARCO JURIDICO</h3>
						
					</div>
				</div>
				<div class="mes">
					<img src="{!! asset('imgs/cpc3.png') !!}">
					<div class="texto-libro">
						<h3>SECCIONES</h3>
						
					</div>
				</div>
				<div class="mes">
					<img src="{!! asset('imgs/cpc4.png') !!}">
					<div class="texto-libro">
						<h3>Abril</h3>
						
					</div>
				</div>
				
				</div>
			</div>
		</div>
	</section>
	




@endsection()