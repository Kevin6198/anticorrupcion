@extends('template.master')

@section('contenido_nosotros')

<div class="contenedor-general">

<!-- Nav tabs -->
<br/>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">¿Quiénes somos?</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Integrantes</a>
    </li>  
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Presidentes</a>
    </li>    
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container active" id="home">
    	<div class="contenedor-general">
            <div class="titulo-nosotros">
                <h1 class="after-horizontal">Objetivos</h1>
            </div>
            <div class="descripcion-nosotros">
                <p>
                    Coadyuvar en términos de la Ley del Sistema Anticorrupción del Estado de México y Municipios al cumplimiento de los objetivos del Comité Coordinador Municipal, así como ser la instancia de vinculación con las Organizaciones Sociales y Académicas relacionadas con las materias del Sistema Municipal Anticorrupción.
                </p>
            </div>
        </div>
        <div class="contenedor-general alineado-flex-wrap">
            <div class="titulo-nosotros2">
                <h1 class="after-vertical alineado-flex-wrap">Misión</h1>
            </div>
            <div class="descripcion-nosotros2">
                <p>
                    Ser portavoces de la ciudadanía creando vínculos con organizaciones civiles, académicas y grupos ciudadanos con el fin de impulsar la consecución de objetivos del Sistema Municipal Anticorrupción de Metepec, Estado de México, orientados a mejorar la prevención, investigación y sanción de actos de corrupción para que los resultados sean socialmente perceptibles
                </p>
            </div>
        </div>
        <div class="contenedor-general alineado-flex-wrap">
            <div class="descripcion-nosotros2">
                <p>
                    Contribuir a que el municipio de Metepec sea un referente de sociedad íntegra y honesta, en donde la relación entre el gobierno y la ciudadanía sea transparente y libre de corrupción, teniendo como base la confianza y procurando siempre el bien común.
                </p>
            </div>
            <div class="titulo-nosotros2">
                <h1 class="before-vertical alineado-flex-wrap">Visión</h1>
            </div>
        </div>
        <div class="contenedor-general">
            <div class="titulo-nosotros">
                <h1 class="after-horizontal">Principios</h1>
            </div>
            <div class="descripcion-nosotros">
                <p>
                    La ley del Sistema Anticorrupción del Estado de México y Municipios, señala en su artículo 5, los principios rectores del servicio público: la legalidad, objetividad, profesionalismo, honradez, lealtad, imparcialidad, eficiencia, eficacia, equidad, transparencia, economía, integridad, competencia por mérito y rendición de cuentas, en los términos de las disposiciones legales aplicables. Los entes públicos están, obligados a crear y mantener condiciones estructurales y normativas que permitan el adecuado funcionamiento del Estado en su conjunto y la actuación ética y responsable de cada servidor público.
                    En tal contexto este comité ha adoptado desde su creación estos principios que permiten que exista un trabajo ético y eficiente.
                </p>
            </div>
        </div>
        <div class="contenedor-general alineado-flex-wrap">
            <div class="titulo-nosotros2">
                <h1 class="after-vertical alineado-flex-wrap">Contacto</h1>
            </div>
            <div class="descripcion-nosotros2">
                <p>
                    
                </p>
            </div>
        </div>
    </div>

    <div class="tab-pane container fade" id="menu1">
    	<div class="alineado">
            <div class="altura">
                <div class="card hover" style="width:350px">
                    <img class="card-img-top" src="{!! asset('imgs/pre.png') !!}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <br>
                        <h4 class="card-title">Dr. en D. Edwin Hernández Torres.</h4>
                        <p class="card-text">Presidente del Comité
Anticorrupción de Metepec, Estado de México.</p>

<br>
                        <a href="#" class="btn btn-primary">Siguenos</a>
                    </div>
                </div>
            </div>
        
            <div class="altura">
                <div class="card hover" style="width:350px">
                    <img class="card-img-top" src="{!! asset('imgs/mi1.png') !!}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <br>
                        <h4 class="card-title">Mtra. Karla Isabel Colín Maya.</h4>
                        <p class="card-text">Integrante del Comité del Participación
Ciudadana por el periodo 2019-2022.</p>
<br>
<br>

                        <a href="#" class="btn btn-primary">Siguenos</a>
                    </div>
                </div>
            </div>
            <div class="altura">
                <div class="card hover" style="width:350px">
                    <img class="card-img-top" src="{!! asset('imgs/mi2.png') !!}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Lic. Daniel Adrián Gutiérrez Serdán.</h4>
                        <p class="card-text">Integrante del Comité del Participación
Ciudadana por el periodo 2020-2023.</p>
<br>
<br>
                        <a href="#" class="btn btn-primary">Siguenos</a>
                    </div>
                </div>
            </div>
         
        </div>
    </div>


    <div class="tab-pane container fade" id="menu2">
    	
    </div>
</div>

</div>



@endsection()