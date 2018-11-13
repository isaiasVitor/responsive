@extends('layout')

@section('content')
<div id="principal" class="col-md-12">
        <div class="espaco col-md-4">
            <button class="btn btn-primary btn-lg" id="inicio" onfocus="responsiveVoice.speak('Temperatura e Chuva')" onclick="falaTemperatura()"> Temperatura e Chuva</button>
            <!--<img src="img\lulaPreso.gif" id="imageLula" /> -->
        </div>
        <div class="espaco col-md-4">
            <button class="btn btn-primary btn-lg" id="dataAtual" onfocus="responsiveVoice.speak('Hora e Data')" onclick="falarData()">Hora e Data</button>
            <!--<img src="img\bolsonaro.gif" id="imageBolsonaro" /> -->
        </div>
        <div class="espaco col-md-4">
            <button class="btn btn-primary btn-lg" id="piada" onfocus="responsiveVoice.speak('Frase do dia')" onclick="falarPiada()"> Frase do dia </button>
            <!--<img src="img\motoqueiro.gif" id="imageMotoqueiro" /> -->
        </div>
    </div>
@endsection


