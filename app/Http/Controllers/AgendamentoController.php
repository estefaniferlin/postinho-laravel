<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\User;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index() {
        $search = request('search');
        
        if(auth()->user()){
            if($search){
                $saude = Agendamento::where([
                    ['type_agen', 'like', '%'.$search.'%']
                    ])->get();
                } else {
                    $userGet = auth()->user();
                    $user = $userGet->id;
                    $saude = Agendamento::where('user_id', $user)->get();
                }
                
            
            return view('welcome',['saude' => $saude, 'search' => $search]);
            
        } else {
            if($search){
                $saude = Agendamento::where([
                    ['type_agen', 'like', '%'.$search.'%']
                    ])->get();
                } else {
                    $saude = Agendamento::all();
                }

                return view('welcome',['saude' => $saude, 'search' => $search]);
        }

        
    }

    public function create() {
        return view('agendamento.create');
    }

    public function store(Request $request){
        $saude = new Agendamento;

        $saude->type_agen = $request->type_agen;
        $saude->addres = $request->addres;
        $saude->hour = $request->hour;
        $saude->date = $request->date;
        $saude->sintomas = $request->sintomas;

        $user = auth()->user();
        $saude->user_id = $user->id;

        $saude->save();

        return redirect('/')->with('msg', 'Agendamento criado com sucesso!');
    }

    public function show($id) {
        $agendamento = Agendamento::findOrFail($id);
        
        
        return view('agendamento.show', ['agendamento' => $agendamento]);
    }

    public function destroy($id){
        Agendamento::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Agendamento excluído com sucesso!');
    }

    public function edit($id){
        $agendamento = Agendamento::findOrFail($id);

        return view('agendamento.edit', ['agendamento' => $agendamento]);
    }

    public function update(Request $request){

        $data = $request->all();

        Agendamento::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Agendamento editado com sucesso!');
    }

    public function dashboard() {

        $user = auth()->user();

        $agendamento = $user->agendamento;

        return view('agendamento.dashboard', ['agendamento' => $agendamento]);

    }
}
