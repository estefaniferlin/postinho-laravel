@extends('layouts.main')

@section('title', $agendamento->type_agen)

@section('content')

<div id="show" class="container">
    <div class="row justify-content-md-center">
    <div id="image-container" class="col-md-6">
            <img src="/img/covid.jpg" class="img-fluid" alt="Orientação Covid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $agendamento->type_agen }}</h1>
            <p class="event-city">
                <ion-icon name="location-outline"></ion-icon> {{ $agendamento->addres }}
            </p>
            <p class="events-participants">
            <ion-icon name="calendar-outline"></ion-icon> {{ date('d/m/Y', strtotime($agendamento->date)) }}
            </p>
            <p class="events-participants">
            <ion-icon name="alarm-outline"></ion-icon> {{$agendamento->hour}}
            </p>
            <h3>Seus sintomas:</h3>
            <ul id="items-list">
                @foreach($agendamento->sintomas as $sintoma)
                    <li><ion-icon name="information-circle-outline"></ion-icon>{{$sintoma}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Informações Importantes:</h3>
            <h4>Documentos Obrigatórios</h4>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Documento com foto</p>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Cartão do SUS</p>
            @if($agendamento->type_agen == "Vacinação")
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Carteira de Vacinação</p>
            @endif
            <h4>Orientações Covid</h4>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Uso obrigatório de máscara</p>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Álcool em gel</p>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Lavar as mãos com água e sabão</p>
            <p><strong> Cuide de você e de sua família para juntos combatermos o covid-19!</strong></p>
        </div>
    </div>
</div>

@endsection