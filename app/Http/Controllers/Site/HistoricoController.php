<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HistoricoFormRequest;
use App\Models\Patrimonios;
use App\Models\Fundos;



class HistoricoController extends Controller
{
    
    public function index()
    {        

        $historico = DB::select('select name, date, value from patrimonios inner join fundos on patrimonios.fundo_id = fundos.id order by date asc limit 7');                
        $dataInicial = request('data-inicial') == null ? null : request('data-inicial');
        $dataFinal = request('data-final') == null ? null : request('data-final');        

        return view('site.historico.index', ['historico' => $historico, 'fundos' => Fundos::all(), 'patrimonio' => Patrimonios::all(), 'data-inicial' => $dataInicial, 'data-final' => $dataFinal]);
    }

    public function filter(HistoricoFormRequest $request)
    {
        $dataInicial = $request->all(); 
        return view('site.historico.index', ['patrimonios' => Patrimonios::all(), 'fundos' => Fundos::all()]);
    }
    
}
