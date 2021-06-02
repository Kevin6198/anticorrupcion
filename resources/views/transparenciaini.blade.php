


@extends('template.master')

@section('contenido_transparencia')


        <div class="contenedor-general">
            <div class="titulo-nosotros">
                <h1 class="after-horizontal">INFORMES ANUALES</h1>
            </div>
            <div class="descripcion-nosotros">
                <p>
                    En este apartado encontraras los informes anuales blablablablablabla
                </p>
            </div>
        </div>

<div class="alineado-display-flex">
    <div class="container">
      <ul>
        <li>
          <div class="book">
            <ul class="front">
              <li>
                <div class="frontcover">
                  <img src="{!! asset('imgs/pat.png') !!}">
                </div>
              </li>
              <li></li>
            </ul>
            <ul class="page">
              <li></li>
              <li>
                <img src="{!! asset('imgs/indice.png') !!}">
              </li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <ul class="back">
              <li></li>
              <li></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="container">
      <ul>
        <li>
          <div class="book">
            <ul class="front">
              <li>
                <div class="frontcover">
                  <img src="{!! asset('imgs/pat.png') !!}">
                </div>
              </li>
              <li></li>
            </ul>
            <ul class="page">
              <li></li>
              <li>
                <img src="{!! asset('imgs/indice.png') !!}">
              </li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <ul class="back">
              <li></li>
              <li></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="container">
      <ul>
        <li>
          <div class="book">
            <ul class="front">
              <li>
                <div class="frontcover">
                  <img src="{!! asset('imgs/pat.png') !!}">
                </div>
              </li>
              <li></li>
            </ul>
            <ul class="page">
              <li></li>
              <li>
                <img src="{!! asset('imgs/indice.png') !!}">
              </li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <ul class="back">
              <li></li>
              <li></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>


@endsection()