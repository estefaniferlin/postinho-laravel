@extends('layouts.main')

@section('title', 'Realizar Agendamento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Realizar Agendamento</h1>
    <form action="/agendamento" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="type_agen">O que você deseja fazer?</label>
            <select name="type_agen" id="type_agen" class="form-control">
                <option value="" disabled selected>--- Escolha ---</option>
                <option value="Consulta Rotina">Consulta Rotina</option>
                <option value="Vacinação">Vacinação</option>
                <option value="Atendimento Psicológico">Atendimento Psicológico</option>
                <option value="Tratamento Odontológico">Tratamento Odontológico</option>
                <option value="Sintomas de Resfriado">Sintomas de Resfriado</option>
            </select>  
        </div>
        <div class="form-group">
            <label for="addres">Escolha o seu postinho:</label>
            <select name="addres" id="addres" class="form-control">
                <option value="" disabled selected>--- Escolha ---</option>
                <option value="Postinho Central">Postinho Central</option>
                <option value="Postinho Rural">Postinho Rural</option>
                <option value="Postinho Norte">Postinho Norte</option>
                <option value="Postinho Sul">Postinho Sul</option>
            </select>  
        </div>
        <label for="date">Escolha o horário preferido:</label>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="07:00" value="07:00" > 07:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="07:30" value="07:30" > 07:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="08:00" value="08:00" > 08:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="08:30" value="08:30" > 08:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="09:00" value="09:00" > 09:00
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="09:30" value="09:30" > 09:30
            </label>
            <label class="btn btn-outline-primary">
                <input type="radio" name="hour" id="10:00" value="10:00" > 10:00
            </label>
        </div>
        <div class="form-group">
            <label for="date">Escolha a data preferida?</label>
            <input type="date" class="form-control" name="date" id="date">  
        </div>
        <div class="form-group">
            <label for="items">Se você possui algum sintoma, selecione-o abaixo:</label>
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
        <input type="submit" value="Agendar" class="btn btn-primary">
    </form>
</div>

@endsection