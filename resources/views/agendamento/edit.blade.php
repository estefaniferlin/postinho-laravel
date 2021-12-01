@extends('layouts.main')

@section('title', 'Editando: ' . $agendamento->type_agen)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$agendamento->type_agen}}</h1>
    <form action="/agendamento/update/{{$agendamento->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type_agen">O que você deseja fazer?</label>
            <select name="type_agen" id="type_agen" class="form-control">
                <option value="" disabled selected>--- Escolha ---</option>
                <option value="Consulta Rotina" {{$agendamento->type_agen == "Consulta Rotina" ? "selected='selected'" : ""}} >Consulta Rotina</option>
                <option value="Vacinação" {{$agendamento->type_agen == "Vacinação" ? "selected='selected'" : ""}}>Vacinação</option>
                <option value="Atendimento Psicológico" {{$agendamento->type_agen == "Atendimento Psicológico" ? "selected='selected'" : ""}}>Atendimento Psicológico</option>
                <option value="Tratamento Odontológico" {{$agendamento->type_agen == "Tratamento Odontológico" ? "selected='selected'" : ""}}>Tratamento Odontológico</option>
                <option value="Sintomas de Resfriado" {{$agendamento->type_agen == "Sintomas de Resfriado" ? "selected='selected'" : ""}}>Sintomas de Resfriado</option>
            </select>  
        </div>
        <div class="form-group">
            <label for="addres">Escolha o seu postinho:</label>
            <select name="addres" id="addres" class="form-control">
                <option value="" disabled selected>--- Escolha ---</option>
                <option value="Postinho Central" {{$agendamento->addres == "Postinho Central" ? "selected='selected'" : ""}}>Postinho Central</option>
                <option value="Postinho Rural" {{$agendamento->addres == "Postinho Rural" ? "selected='selected'" : ""}}>Postinho Rural</option>
                <option value="Postinho Norte" {{$agendamento->addres == "Postinho Norte" ? "selected='selected'" : ""}}>Postinho Norte</option>
                <option value="Postinho Sul" {{$agendamento->addres == "Postinho Sul" ? "selected='selected'" : ""}}>Postinho Sul</option>
            </select>  
        </div>
        <label for="">Escolha o horário preferido:</label>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-primary">
                <input type="radio"  name="hour" id="07:00" value="07:00" autocomplete="off" {{$agendamento->hour == "07:00" ? "checked='true'" : ""}}> 07:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="07:30" value="07:30" autocomplete="off" {{$agendamento->hour == "07:30" ? "checked='true'" : ""}}> 07:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="08:00" value="08:00" autocomplete="off" {{$agendamento->hour == "08:00" ? "checked='true'" : ""}}> 08:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="08:30" value="08:30" autocomplete="off" {{$agendamento->hour == "08:30" ? "checked='true'" : ""}}> 08:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="09:00" value="09:00" autocomplete="off" {{$agendamento->hour == "09:00" ? "checked='true'" : ""}}> 09:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="09:30" value="09:30" autocomplete="off" {{$agendamento->hour == "09:30" ? "checked='true'" : ""}}> 09:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="10:00" value="10:00" autocomplete="off" {{$agendamento->hour == "10:00" ? "checked='true'" : ""}}> 10:00
            </label>
        </div>
        <div class="form-group">
            <label for="date">Escolha a data preferida:</label>
            <input type="date" class="form-control" name="date" id="date" value="{{ $agendamento->date->format('Y-m-d') }}">  
        </div>
        <div class="form-group">
            <label for="items">Quais os seus sintomas?</label>
            <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="Dor de Cabeça" id=""> Dor de Cabeça
            </div>
            <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="Dor no Estômago" id=""> Dor no Estômago
            </div>
            <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="Sangramento" id=""> Sangramento
            </div>
            <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="Vômito" id=""> Vômito
            </div>
            <div class="form-group">
                <input type="checkbox" name="sintomas[]" value="Febre" id=""> Febre
            </div>
        </div>
        <input type="submit" value="Editar Evento" class="btn btn-primary">
    </form>
</div>

@endsection