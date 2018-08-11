<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 08/08/2018
 * Time: 00:08
 */
?>

@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row justify-content-center my-5">

            <div class="col-3 text-center">

                <h1> Número de Leads <span class="text-primary">Dentistas</span> </h1>
                <h2 class="lead"> {{  $leads_dentist  }} </h2>

            </div>

            <div class="col-3 text-center">

                <h1> Número de Leads <span class="text-primary">Pacientes</span> </h1>
                <h2 class="lead"> {{  $leads_pacient  }} / <span style="font-size: 1rem">{{  $leads_pacient_needed  }}</span> </h2>

            </div>

        </div>

    </div>

@endsection
