<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaRequest;

class EmpresasController extends Controller
{
    private $empresas;

    public function __construct(Empresas $empresas)
    {
        $this->empresas = $empresas;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $empresas = $this->empresas->get();
            return response()->json($empresas, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $data = $request->all();

        try {
            $empresa = $this->empresas->create($data);
            return response()->json($empresa, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $empresa = $this->empresas->findOrFail($id);
            return response()->json(['data' => $empresa], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }

    public function update(EmpresaRequest $request, $id)
    {
        $data = $request->all();

        try {
            $empresa = $this->empresas->findOrFail($id);
            $empresa->update($data);
            return response()->json($empresa, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $empresa = $this->empresas->findOrFail($id);
            $empresa->delete();
            return response()->json($empresa, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }
}
