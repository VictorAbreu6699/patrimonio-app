<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\FundoFormRequest;
use Illuminate\Http\Request;
use App\Models\Fundos;
use Illuminate\Support\Facades\DB;

class FundoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.fundo.index', [
            'fundos' => Fundos::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FundoFormRequest $request)
    {
        Fundos::create($request->all());
        
        return redirect()->route('site.fundo')->with(
            ['sucess' => true, 'message' => 'Fundo registrado com sucesso!']
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fundo = Fundos::find($id);
        return view('site.fundo.edit', ['fundo' => $fundo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FundoFormRequest $request)
    {
        DB::update('update fundos set name = ? where id = ?', [$request->name, $request->id]);
        return redirect()->route('site.fundo')->with(
            ['sucess' => true, 'message' => 'Fundo atualizado com sucesso!']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('site.fundo');
    }

    public function delete($id){
        return view('site.fundo.delete', ['id' => $id]);
    }
}
