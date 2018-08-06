<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 03/08/2018
 * Time: 02:24
 */
?>

<section id="cadastro">
    <div class="row">
        <div class="col-lg-12 bg-primary">

            <div class="text-center text-light mt-5">
                <h2><i class="fas fa-dollar-sign display-3 ml-5 d-lg-inline-block d-md-none d-sm-none d-none" style="position: absolute; left: 0; -webkit-transform: rotate(340deg);-moz-transform: rotate(340deg);-ms-transform: rotate(340deg);-o-transform: rotate(340deg);transform: rotate(340deg);"></i> <span class="display-4 ">Comece a usar agora mesmo! </span> <i class="fas fa-tooth display-3 mr-5 d-lg-inline-block d-md-none d-sm-none d-none" style="position: absolute; right: 0px; -webkit-transform: rotate(20deg);-moz-transform: rotate(20deg);-ms-transform: rotate(20deg);-o-transform: rotate(20deg);transform: rotate(20deg);"></i></h2>
            </div>

            <!-- Testimonial -->
            <div class="row">
                <div class="col-lg-6">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-7 my-5">
                                        <img class="img-fluid rounded-circle _shadow" src="{{asset('img/dentist-1.png')}}" alt="" style="border-radius: 10px;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-10 my-auto _testimonial">

                                        <p class="mb-0">"A <strong class="text-light">SMILEW</strong> diminuiu em <strong class="text-light">30%</strong> o atraso de meus pacientes!"</p>
                                        <footer class="blockquote-footer text-light">Dr. Natanael</footer>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-7 my-5">
                                        <img class="img-fluid rounded-circle _shadow" src="{{asset('img/pacient-2.png')}}" alt="" style="border-radius: 10px;">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-10 my-auto _testimonial">

                                        <p class="mb-0">"Indiquei meu dentista a um vizinho e ganhei <strong class="text-light">dinheiro</strong> por isso. Foi <strong class="text-light">incrível</strong>!"</p>
                                        <footer  class="blockquote-footer text-light">Maria Rita, paciente</footer>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!--<div class="row justify-content-center">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-7 my-5">
                            <img class="img-fluid rounded-circle _shadow" src="{{asset('img/client-1.jpg')}}" alt="" style="border-radius: 10px;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-10 my-auto _testimonial">

                            <p class="mb-0">"A <strong class="text-light">SMILEW</strong> diminiu em <strong class="text-light">30%</strong> o atraso de meus pacientes!"</p>
                            <footer class="blockquote-footer text-light">Dr. Natanael</footer>

                        </div>

                    </div>-->
                </div>

                <!-- Form -->
                <div class="col-lg-6">
                    <form action="{{ route('lead.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row justify-content-center">
                            <div class="col-10 my-auto" >

                                <div class="form-row justify-content-center mt-5" >
                                    <div class="col-12 col-md-12 mb-2">
                                        <input type="text" name="name" class="form-control form-control-lg mt-5 mb-2" placeholder="Seu nome...">
                                    </div>
                                    <div class="col-12 col-md-12 mb-2">
                                        <input type="email" name="email" class="form-control form-control-lg mb-2" placeholder="Seu e-mail...">
                                    </div>
                                    <div class="col-12 col-md-12 mb-2 text-left">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="dentista" onclick="hideNeededTop();" checked>
                                            <label class="form-check-label lead text-light" for="inlineRadio1">Sou um <strong>Dentista</strong></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="paciente" onclick="showNeededTop();">
                                            <label class="form-check-label lead text-light" for="inlineRadio2">Sou um <strong>Paciente</strong></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 mb-2 text-left">
                                        <div id="_neededTop" class="form-check form-check-inline" style="display: none;">
                                            <input class="form-check-input" type="checkbox" id="neededTop" name="needed" class="btn btn-block btn-lg btn-primary"/>
                                            <label class="form-check-label lead text-light" for="neededTop"><strong>Necessito de atendimento odontológico atuamente!</strong></label>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <button type="submit" class="btn btn-block btn-lg btn-light text-primary">Cadastrar!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            </div>
        </div>
    </div>
</section>
