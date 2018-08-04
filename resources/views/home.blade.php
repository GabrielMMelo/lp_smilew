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
                        <div class="col-10 col-md-6 _btn">
                            <button onclick="animateScrollTo(500);" class="btn btn-block btn-xl btn-primary waves-effect waves-light"><strong>Nos conheça!</strong></button>
                        </div>
                    </div>
                </form>
            </div>
        <!--</div>-->
    </div>
</header>


<!-- Call to Action 1-->
@include('partials.cta-top')

<!-- Image Showcases -->
@include('partials.show-case')

<!-- Testimonials -->


<!-- Call to Action 2-->
@include('partials.cta-bottom')

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
<script src="{{ asset('js/scroll.js') }}"></script>
<script src="{{ asset('js/tab.js') }}"></script>
<script src="{{ asset('js/modals.js') }}"></script>



@endsection