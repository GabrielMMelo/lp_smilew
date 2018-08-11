<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 05/08/2018
 * Time: 23:08
 */
?>

@extends('layouts.master')
@section('more-links')
    <link href="{{ asset('css/response.css') }}" rel="stylesheet">
@endsection
@section('content')

    <div class="full-size" >
        <div class="row my-auto justify-content-center">
            <div class="col-11 text-center text-dark my-5">

                <h1 class="display-1">Obrigado, <span class="display-3 text-primary">{{$name}}</span>!</h1>
            </div>

            <div class="col-2 text-primary text-center" style="transform: rotate(340deg);">
                <i class="fas fa-tooth display-2" style="opacity: 0.3;"></i>
            </div>
            <div class="col-8 text-center">
                <h2 class="display-5">A <img style="height: 5.5rem;" src="{{asset('public/img/smilew-logo-darkblue.png')}}"/> vem trabalhando para melhorar a rotina de <span class="text-primary" style="opacity: 0.8;">{{$type}}</span>  como você! </h2>


            </div>

            <div class="col-2 text-primary text-center" style="opacity: 0.3;">
                <i class="fas fa-tooth display-2" style="transform: rotate(20deg);"></i>
            </div>

            <div class="col-8 text-center rounded bg-white text-primary my-5 shadow">

                <div class="my-3 ">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-8">
                            <h1> Você está em nossa lista de espera!</h1>
                        </div>
                        <div class="col-2 text-left">
                            <i class="far fa-envelope display-4 text-dark"></i>
                        </div>
                    </div>

                    <h2 class="lead" style="font-size: 2.5vw;">Te enviaremos um e-mail assim que estivermos prontos para oferecer o melhor pra você.</h2>
                </div>

                <a class="btn btn-lg bg-primary text-white mb-3" style="opacity: 0.8;" href="{{url('/')}}">Voltar</a>

            </div>

        </div>

    </div>


@endsection
