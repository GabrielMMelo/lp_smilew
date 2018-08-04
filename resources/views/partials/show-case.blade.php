<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 01/08/2018
 * Time: 13:59
 */
?>

<section class="showcase" id="comoFunciona">
    <div class="container-flui p-0">

        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('img/bg-showcase-22.jpg')}}');">
                <div class="mt-md-4 text-right text-dark" style="padding-left: 3rem; position: absolute; top: 0; right: 5px;">
                    <h3>Solução para <span class="text-primary">dentistas</span></h3>
                    <p class="lead mb-0">Menos atraso. Mais pacientes.</p>
                </div>

            </div>
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('img/bg-showcase-11.jpg')}}');"></div>

            <div class="col-lg-6 " style="border-right: .5pt solid #cccccc;">
                <div class="mt-md-4" style="padding-left: 3rem;">
                    <h2>Solução para <span class="text-primary">dentistas</span></h2>
                    <p class="lead mb-0">Menos atraso. Mais pacientes.</p>
                </div>
                <div class="row justify-content-center mb-md-5 mb-lg-0">
                    <div class="col-6">
                        <a href="#" class="mt-4 mb-2 btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#modalDentistas">Como funciona?</a>
                    </div>
                </div>

                <div class="row d-lg-inline-block d-sm-none d-none ">
                    <div class="col-6" style="left: 0;">
                        <img class="img-fluid" src="{{  asset('img/arrow-1.png')  }}" alt="">
                    </div>
                </div>

            </div>

            <!-- PACIENTES -->
            <div class="col-lg-6 order-lg-1 my-auto showcase-text" style="border-left: .5pt solid #cccccc;">

                <!--<div class="mt-md-4" style="padding-left: 3rem; padding-right: 3rem;">
                    <h2>Excelente para <span class="text-primary">pacientes</span></h2>
                    <p class="lead">Chegue no horário e receba por isso.</p>
                    <p class="lead"> Indique um amigo e <strong>também</strong> ganhe por isso.</p>
                </div>-->

            @include('partials.tab')
            </div>
        </div>



        </div>

    <!--
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('img/bg-showcase-3.jpg')}}');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy to Use &amp; Customize</h2>
                <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
            </div>
        </div>
        -->
    </div>
</section>

