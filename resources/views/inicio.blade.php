@extends('template.master')

@section('contenido_principal')







<div class="contenedor-principal">
	<section class="contenedor-header">
		
<div class="contenedor-s">
        <div class="contenedor-slider">
            <div>
                <div>
                    <div class="slider">
                        <div class="img-slider" id="ultimo">
                            <img src="{!! asset('imgs/4.jpeg') !!}">             
                        </div>
                        <div class="img-slider">
                            <img src="{!! asset('imgs/1.jpeg') !!}">               
                        </div>
                        <div class="img-slider">
                            <img src="{!! asset('imgs/2.jpeg') !!}">             
                        </div>
                        <div class="img-slider">
                            <img src="{!! asset('imgs/4.jpeg') !!}">             
                        </div>
                        <div class="img-slider">
                            <img src="{!! asset('imgs/img.png') !!}">             
                        </div>
                        <div class="img-slider">
                            <img src="{!! asset('imgs/4.jpeg') !!}">             
                        </div>
                        <div class="img-slider" id="primero">
                            <img src="{!! asset('imgs/1.jpeg') !!}">             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


        <div class="contenedor-op">
            <button class="btn-s" id="previo"><i class="fas fa-angle-left"></i></button>
            <button class="btn-s" id="siguiente"><i class="fas fa-angle-right"></i></button>
            <div class="slider-ul">
                <li class="option" option-index="0"></li>
                <li class="option" option-index="1"></li>
                <li class="option" option-index="2"></li>
                <li class="option" option-index="3"></li>
                <li class="option" option-index="4"></li>
            </div>
        </div>
    </div>
		
	</section>
</div>

<div class="contenedor-general">
    <section class="contenedor-redes">
        
    

    <div class="redes-sociales">
        <h3>Siguenos en Facebook</h3>
        <div class="fb-page red" data-href="https://www.facebook.com/CPCSMAMetepec" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/CPCSMAMetepec" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CPCSMAMetepec">CPCSMAMetepec</a></blockquote></div>
    </div>

    <div class="redes-sociales">
        <h3>Siguenos en Twiter</h3>
        <a class="twitter-timeline" data-width="400px" data-height="500px" href="https://twitter.com/SESAEMM_?ref_src=twsrc%5Etfw">Tweets by SESAEMM_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>    
    </section>
</div>

@endsection()