<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 29/07/2018
 * Time: 23:43
 */
?>

@extends('layouts.master')
@section('content')
    {{ Counter::count('home') }}
<!-- Masthead -->
<header class="masthead text-white text-center" style="height: 46rem;">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-10">
            <a class="_smilew navbar-brand mb-4" href="#"> <img class="img-fluid d-block" src="{{  asset('img/smilew-logo-darkblue.png')  }}"></a>
        </div>
    </div>


    <!-- Navigation -->

    <div class="overlay"></div>
    <!--<div class="container">-->
        <div class="row">
            <div class="_strip col-12 col-xl-12 mx-auto rounded" style="background-color: rgba(255, 255, 255, .8);">
                <div class="row justify-content-center my-1">
                    <div class="col-10">
                        <h1 class="lead text-dark"><span class="_sorrisos">Sorrisos</span> <span class="_para">para</span> <strong><span class="_d">D</span><span class="_hid">ENT</span><span class="_i">I</span><span class="_hid">STAS</span></strong> <span class="_hid">e</span> <strong><span class="_hid">PAC</span><span class="_i2">I</span><span class="_hid">ENTES</span></strong><span class="_hid">!</span></h1>
                    </div>
                </div>
            </div>
            <div class="col-12 text-primary">
                <div class="__i d-inline" >I</div>
                <div class="__i2 d-inline"> I</div>
                <div class="__d ">D</div>
                <span class="_sorria display-3">SORRIA!</span>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    <div class="form-row justify-content-center">
                       <!-- <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                        </div>
                       -->
                        <div class="col-10 col-md-4 _btn">
                            <a href="#teste" class="btn btn-block btn-lg btn-light"><strong>Nos conheça!</strong></a>
                        </div>
                    </div>
                </form>
            </div>
        <!--</div>-->
    </div>
</header>


<!-- Icons Grid -->
<!--
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Fully Responsive</h3>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Bootstrap 4 Ready</h3>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Easy to Use</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<!-- Image Showcases -->
@include('partials.show-case')

<!-- Testimonials -->
@include('partials.testimonials')

<!-- Call to Action -->
@include('partials.cta')

<!-- Footer -->
@include('partials.footer')

<!-- ############## MODALS ################# -->
<!-- DENTISTAS -->
@include('partials.modal-dentista')

<!-- PACIENTES -->
@include('partials.modal-paciente')

<!-- JS FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/needed.js') }}"></script>

@endsection