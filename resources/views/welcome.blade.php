@extends('layouts.main')

@section('title', 'Postinho de Saúde')

@section('content')

<div id="search-container" class="col-md-12">
    @auth
    <h1>Busque uma consulta</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
    @endauth
    @guest
    <h1>Central de Agendamentos de Consultas</h1>
    @endguest
</div>
    <div id="events-container" class="col-md-12">
     @auth
     @if($search)
        <h2>Buscando por: {{$search}}</h2>
     @else
        <h2>Próximos Agendamentos</h2>
        <p class="subtitle">Veja os agendamentos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($saude as $saud)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($saud->date)) }}</p>
                <h5 class="card-title">{{ $saud->type_agen }}</h5>
                <p class="card-participants">{{ $saud->addres }}</p>
                <p class="card-participants">{{ $saud->hour }}</p>
                <a href="/agendamento/{{$saud->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($saude) == 0 && $search)
            <p>Sua busca não encontrou nada 🤔. <a href="/">Acesse aqui</a> e volte para a Dashboard!</p>
        @elseif(count($saude) == 0)
            <p>Não há agendamentos disponíveis.</p>
        @endif
    </div>
    </div>
    @endauth
    @guest

    <div class="col-md-12" id="description-container">
            <h4>Orientações Covid 😷</h4>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>O uso de máscara é obrigatório em todo o território nacional</p>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Utilize álcool em gel sempre que sentir necessidade</p>
            <p class="event-description"><ion-icon name="checkmark-outline"></ion-icon>Quando possível lavar as mãos com água e sabão</p>
            <p><strong> Cuide de você e de sua família para juntos combatermos o covid-19!</strong></p>
            <p>Não há agendamentos disponíveis 🤔. <a href="/login">Acesse aqui</a> e faça login!</p>
    </div>
    @endguest
</div>

@endsection