<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item text-center">
        <a class="nav-link active " data-toggle="tab" href="#panel1" role="tab"> <span class="d-inline-block d-sm-inline-block">Pontualidade <i class="far fa-clock d"></i></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab"><span class="d-inline-block d-sm-inline-block"><i class="fas fa-users"></i>Indicação</span></a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel" style="padding-top: 10px!important;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-10 mt-2 text-center my-auto">
                <h5>Você consulta e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                <p> Chegando sem atrasos às suas consultas, receba <span class="text-success">cashback</span>!</p>
            </div>
            <div class="text-center col-lg-6 col-md-6 col-10">
                <img class="img-fluid my-3" style=" padding-top:10px; padding-bottom: 10px; width: 85%!important;" src="{{  asset('img/flow-paciente-2.png')  }}" alt="Fluxo de indicação e cashback para pacientes">
            </div>
        </div>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel" style="padding-top: 10px!important;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-10 mt-2 text-center my-auto">
                <h5>Você indica um paciente e <strong class="text-primary">GANHA</strong> dinheiro! </h5>
                <div class="mb-3">
                    <ol>
                        <li>Indique um amigo;</li>
                        <li>Ele(a) realiza o tratamento; </li>
                        <li>Ambos recebem <span class="text-success">cashback</span>!</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="text-center">
                    <img class="img-fluid" style="" src="{{  asset('img/flow-paciente-1.gif')  }}" alt="Fluxo de indicação e cashback para pacientes">
                </div>
            </div>
        </div>
    </div>
    <!--/.Panel 2-->
</div>