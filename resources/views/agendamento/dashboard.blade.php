@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Agendamentos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($agendamento) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamento as $saud)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/agendamento/{{ $saud->id }}">{{ $saud->type_agen }}</a></td>
                    <td><a href="/agendamento/edit/{{$saud->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                    <form action="/agendamento/{{$saud->id}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon> Deletar
                        </button>
                    </form>
                </tr>
            @endforeach    
        </tbody>
    </table>
    @else
    <p>Você ainda não tem agendamentos, <a href="/agendamento/create">clique aqui</a> para criar agendamento</p>
    @endif
</div>

@endsection
