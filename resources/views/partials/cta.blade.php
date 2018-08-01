<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 01/08/2018
 * Time: 13:56
 */
?>

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
                                <label class="form-check-label lead" for="inlineRadio1">Sou um <strong>Dentista</strong></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="paciente" onclick="showNeeded();">
                                <label class="form-check-label lead" for="inlineRadio2">Sou um <strong>Paciente</strong></label>
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

