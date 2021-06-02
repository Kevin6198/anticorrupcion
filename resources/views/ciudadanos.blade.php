@extends('template.master')

@section('contenido_ciudadanos')

	<h1 class="titulo-ciudadanos">Espacio Ciudadano</h1>
	<div class="contenedor-general alineado-flex-wrap">
		<div class="contenedor-carta2">
			<div class="carta2">
				<div class="contenedor-imgCarta2">
					<i class="fab fa-hornbill"></i>
					<a href="#" class="btn-g2 btn-accion2" data-toggle="modal" data-target="#myModal">
						<div class="btn-texto2">Denuncia</div>
					</a>
				</div>
				<div class="contenedor-text2">
					<div>
						<h2 class="titulo-ciudadanos3">Denuncias Anonimas</h2>
						<p class="texto-ciudadanos2">Los datos personales por usted, proporcionados serán protegidos en términos de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental y los Lineamientos de Protección de Datos Personales emitidos por el Instituto Federal de Acceso a la Información Pública (IFAI), y se registraran en el Sistema Electrónico de Atención Ciudadana cuya finalidad es supervisar, controlar y dar seguimiento a la atención que se brinde a la queja presentada, lo anterior con fundamento en el artículo 67, numerales 1y 2 del Reglamento Interior de la Secretaria de la Función Pública.</p>
					</div>
				</div>
			</div>
		</div>
	</div>	


	<div class="contenedor-general alineado-flex-wrap">
		<div class="contenedor-carta2">
			<div class="carta2">
				<div class="contenedor-imgCarta2">
					<i class="far fa-envelope-open"></i>
					<a href="#" class="btn-g2 btn-accion2" data-toggle="modal" data-target="#myModal2">
						<div class="btn-texto2">Contacto</div>
					</a>
				</div>
				<div class="contenedor-text2">
					<div>
						<h2 class="titulo-ciudadanos3">Contactanos</h2>
						<p class="texto-ciudadanos2">Los datos personales por usted, proporcionados serán protegidos en términos de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental y los Lineamientos de Protección de Datos Personales emitidos por el Instituto Federal de Acceso a la Información Pública (IFAI), y se registraran en el Sistema Electrónico de Atención Ciudadana cuya finalidad es supervisar, controlar y dar seguimiento a la atención que se brinde a la queja presentada, lo anterior con fundamento en el artículo 67, numerales 1y 2 del Reglamento Interior de la Secretaria de la Función Pública.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Denuncia Anónima</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form>
	               <!-- Modal body -->
	                <div class="modal-body">
	                	
	                	<h4>¿Dónde ocurrieron los hechos?</h4>
	                	<br />
	                	<h6>Entidad</h6>
	                	{!! Form::select ('entidad', 
						array('1'=>'Activo','0'=>'Baja') , null ,['class'=>'cajas-ciudadano', 'placeholder'=>'Seleccionar ...']) !!}
	                	<h6>Municipio</h6>
	                	{!! Form::select ('municipio', 
						array('1'=>'Activo','0'=>'Baja') , null ,['class'=>'cajas-ciudadano', 'placeholder'=>'Seleccionar ...']) !!}
	                	<h6>Colonia</h6>
	                	{!! Form::text ('colonia',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Dirección</h6>
	                	{!! Form::text ('direccion',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Código Postal</h6>
	                	{!! Form::text ('cp',null,['class'=>'cajas-ciudadano']) !!}
	                	
	                	<br /><br /><br />
	                	<h4>¿Cuándo sucedio?</h4>
	                	<br />
	                	{!! Form::date ('fecha',null,['class'=>'cajas-ciudadano', 'placeholder'=>'Fecha']) !!}
	                	<br /><br /><br />
	                	<h4>Descipción los hechos</h4>
	                	<br />
	                	{!! Form::textarea ('descripcion',null,['class'=>'contenido-ciudadano', 'placeholder'=>'Contenido...','required','rows' => 5, 'cols' => 100]) !!}
		                	
	                	
	                </div>
	               <!-- Modal footer -->
	                <div class="modal-footer">
	                    {!! Form::submit('Enviar',['class'=>'enviar-ciudadano']) !!}
	                </div>
            	</form>
            </div>
        </div>
    </div>




<!-- The Modal -->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Contactanos</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form>
	               <!-- Modal body -->
	                <div class="modal-body">
	                	<h4>Datos Requeridos</h4>
	                	<br />
	                	<h6>Nombre(s)</h6>
	                	{!! Form::text ('nombre',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Apellido Paterno</h6>
	                	{!! Form::text ('ap_pateno',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Apellido Materno</h6>
	                	{!! Form::text ('ap_materno',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Email</h6>
	                	{!! Form::email ('email',null,['class'=>'cajas-ciudadano']) !!}
	                	<h6>Teléfono</h6>
	                	{!! Form::text ('telefono',null,['class'=>'cajas-ciudadano']) !!}
						<br /><br /><br />
	                	<h4>Mensaje</h4>
	                	{!! Form::textarea ('mensaje',null,['class'=>'contenido-ciudadano', 'placeholder'=>'Contenido...','required','rows' => 5, 'cols' => 100]) !!}
		                	
	                	
	                </div>
	               <!-- Modal footer -->
	                <div class="modal-footer">
	                    {!! Form::submit('Enviar',['class'=>'enviar-ciudadano']) !!}
	                </div>
            	</form>
            </div>
        </div>
    </div>




@endsection()