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
            <div class="col-12 text-primary mb-3">
                <div class="__i d-inline">I</div>
                <div class="__i2 d-inline"> I</div>
                <div class="__d ">D</div>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mt-5 mx-auto">
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
<section class="showcase" id="teste">
    <div class="container-flui p-0">

        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('img/bg-showcase-22.jpg')}}');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Solução para dentistas</h2>
                <p class="lead mb-0">Menos atraso. Mais pacientes.</p>
                <a href="#" class="mt-4 mb-0 btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#modalDentistas">Como funciona?</a>
            </div>
        </div>
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('img/bg-showcase-11.jpg')}}');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Excelente para pacientes</h2>
                <p class="lead">Chegue no horário e receba por isso. Indique um amigo e <strong>também</strong> ganhe por isso.</p>
                <a href="#" class="mt-4 mb-0 btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#modalPacientes">Como funciona?</a>
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

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">O que dizem sobre nós...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{asset('img/testimonials-1.jpg')}}" alt="">
                    <h5>Margaret E.</h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{asset('img/testimonials-2.jpg')}}" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{asset('img/testimonials-3.jpg')}}" alt="">
                    <h5>Sarah	W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Quer experimentar? Se cadastre agora!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form action="{{ route('lead.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row justify-content-center">
                        <div class="col-12 col-md-12 mb-2">
                            <input type="text" name="name" class="form-control form-control-lg mt-5 mb-2" placeholder="Seu nome...">
                        </div>
                        <div class="col-12 col-md-12 mb-2">
                            <input type="email" name="email" class="form-control form-control-lg mb-2" placeholder="Seu e-mail...">
                        </div>
                        <div class="col-12 col-md-12 mb-2 text-left">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="dentista" onclick="hideNeeded();" checked>
                                <label class="form-check-label lead" for="inlineRadio1">Dentista</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="paciente" onclick="showNeeded();">
                                <label class="form-check-label lead" for="inlineRadio2">Paciente</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-2 text-left">
                            <div id="_needed" class="form-check form-check-inline" style="display: none;">
                                <input class="form-check-input" type="checkbox" id="needed" name="needed" class="btn btn-block btn-lg btn-primary"/>
                                <label class="form-check-label lead" for="needed"><strong>Necessito de atendimento odontológico atuamente!</strong></label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Cadastrar!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-3 mb-lg-0">&copy; Smilew 2018. Todos os direitos reservados.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <!--<i class="fa fa-facebook fa-2x fa-fw"></i>-->
                            <img style="height: 3rem; width: auto;" src="{{  asset('img/smilew-logo-darkblue.png')  }}" alt="Logo da Smilew">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- ############## MODALS ################# -->

<!-- DENTISTAS -->
<div class="modal fade" id="modalDentistas" tabindex="-1" role="dialog" aria-labelledby="modalDentistasLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="modalDentistasLabel"> Smilew: <span class="lead">uma experiência nova para pacientes!</span> </h5>

                <button class="close" type="button" data-dismiss="modal">

                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ Counter::count('dentista') }}
                <div class="row">
                    <div class="col-7">
                        <h5><span class="display-3 text-primary">1</span> Você consulta e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                        <p> Chegando sem atrasos às suas consultas, receba <span class="text-success">cashback</span>!</p>
                        <div class="text-center">
                            <img class="img-fluid mt-3" style="width: 90%!important;" src="{{  asset('img/flow-paciente-2.png')  }}" alt="Fluxo de indicação e cashback para pacientes">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card bg-primary" style="width: 18rem;">
                            <div class="card-body shadow-lg">
                                <form class="text-center" action="{{ route('lead.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <span style="font-size: 1.5rem;"><strong class="text-light">Experimente agora!</strong></span>
                                    <input type="hidden" name="type" value="dentista">
                                    <input type="text" name="name" class="form-control form-control-lg mt-2 mb-2" placeholder="Seu nome...">
                                    <input type="email" name="email" class="form-control form-control-lg mb-2" placeholder="Seu e-mail...">
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="checkbox" id="needed" name="needed" class="btn btn-block btn-lg btn-primary"/>
                                        <label class="form-check-label lead" for="needed"><strong class="text-light">Preciso de um dentista!</strong></label>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg btn-light">Cadastrar!</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                        <h5><span class="display-3 text-primary">2</span>  Você indica um paciente e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                        <div class="mb-3">
                            <ol>
                                <li>Indique seu dentista a um(a) amigo(a) que precise de tratamento;</li>
                                <li>Ele(a) vai ao consultório e realiza seu tratamento; </li>
                                <li>Você e o(a) amigo(a) recebem <span class="text-success">cashback</span> da <span class="text-primary">SMILEW</span>!</li>
                            </ol>
                        </div>
                        <div class="text-center">
                            <img class="img-fluid" style="width: 90%!important;" src="{{  asset('img/flow-paciente-1.png')  }}" alt="Fluxo de indicação e cashback para pacientes">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!-- PACIENTES -->
<div class="modal fade" id="modalPacientes" tabindex="-1" role="dialog" aria-labelledby="modalPacientesLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="modalPacientesLabel"> <span class="text-primary">SMILEW:</span> <span class="lead">uma experiência nova para pacientes!</span> </h5>

                <button class="close" type="button" data-dismiss="modal">

                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ Counter::count('paciente') }}
                <div class="row">
                    <div class="col-7">
                        <h5><span class="display-3 text-primary">1</span> Você consulta e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                        <p> Chegando sem atrasos às suas consultas, receba <span class="text-success">cashback</span>!</p>
                        <div class="text-center">
                            <img class="img-fluid mt-3" style="width: 90%!important;" src="{{  asset('img/flow-paciente-2.png')  }}" alt="Fluxo de indicação e cashback para pacientes">
                        </div>

                    </div>
                    <div class="col-5">
                        <div class="card bg-primary" style="width: 18rem;">
                            <div class="card-body shadow-lg">
                                <form class="text-center" action="{{ route('lead.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <span style="font-size: 1.5rem;"><strong class="text-light">Experimente agora!</strong></span>
                                    <input type="hidden" name="type" value="paciente">
                                    <input type="text" name="name" class="form-control form-control-lg mt-2 mb-2" placeholder="Seu nome...">
                                    <input type="email" name="email" class="form-control form-control-lg mb-2" placeholder="Seu e-mail...">
                                    <div class="form-check form-check-inline mb-2">
                                        <input class="form-check-input" type="checkbox" id="needed" name="needed" class="btn btn-block btn-lg btn-primary"/>
                                        <label class="form-check-label lead" for="needed"><strong class="text-light">Preciso de um dentista!</strong></label>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg btn-light">Cadastrar!</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr>
                        <h5><span class="display-3 text-primary">2</span>  Você indica um paciente e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                        <div class="mb-3">
                            <ol>
                                <li>Indique seu dentista a um(a) amigo(a) que precise de tratamento;</li>
                                <li>Ele(a) vai ao consultório e realiza seu tratamento; </li>
                                <li>Você e o(a) amigo(a) recebem <span class="text-success">cashback</span> da <span class="text-primary">SMILEW</span>!</li>
                            </ol>
                        </div>
                        <div class="text-center">
                            <img class="img-fluid" style="width: 90%!important;" src="{{  asset('img/flow-paciente-1.png')  }}" alt="Fluxo de indicação e cashback para pacientes">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/needed.js') }}"></script>
@endsection