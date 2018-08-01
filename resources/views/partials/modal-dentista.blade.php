<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 01/08/2018
 * Time: 13:53
 */
?>

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
