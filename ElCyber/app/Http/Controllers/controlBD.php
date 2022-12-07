<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cyber;
use App\Http\Requests\CyberRequests;


class controlBD extends Controller
{
    protected $cyber;
    public function __construct(cyber $cyber){
        $this->cyber=$cyber;
    }
    public function index()
    {
        $cyber = $this->cyber->getCyber();
        return view('/cons', compact('cyber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CyberRequests $req)
    {
        $cyber= new cyber($req->all());
        $cyber->save();
        return redirect('/form')->with('confirmForm', 'Datos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cyber=$this->cyber->getCyberID($id);
        return view('upF', compact('cyber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CyberRequests $req, $id)
    {
        $cyber=cyber::find($id);
        $cyber->fill($req->all());
        $cyber->save();
        return redirect('cons')->with('confirmForm', 'Datos Actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cyber=cyber::find($id);
        $cyber->delete();
        return redirect('cons')->with('confirmForm', 'Entrada Eliminada');       
    }
}
