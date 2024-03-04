<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveidorCreateRequest;
use App\Http\Requests\ProveidorUpdateRequest;
use App\Models\Proveïdors;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function crear()
    {
        $proveidors = Proveïdors::all();
        return view('admin.proveïdors.crear', compact('proveidors'));
    }

    public function store(ProveidorCreateRequest $request)
    {
        $proveidors = new Proveïdors;

        $proveidors->nom = $request->nom;
        $proveidors->cif = $request->cif;
        $proveidors->numero = $request->numero;
        $proveidors->email = $request->email;
        $proveidors->tipus_incidencia = $request->tipus_incidencia;

        $proveidors->save();
        return redirect('admin/proveïdors')->with('message', 'Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $proveidors = Proveïdors::all();
        return view('admin.proveïdors.index', compact('proveidors'));
    }

    public function edit($id)
    {
        $proveidors = Proveïdors::find($id);
        return view('admin.proveïdors.editar', compact('proveidors'));
    }
    public function update($id, ProveidorUpdateRequest $request)
    {
        $proveidors = Proveïdors::findOrFail($id);
        $proveidors->nom = $request->nom;
        $proveidors->cif = $request->cif;
        $proveidors->numero = $request->numero;
        $proveidors->email = $request->email;
        $proveidors->tipus_incidencia = $request->tipus_incidencia;

        $proveidors->save();
        return redirect('admin/proveïdors')->with('message', 'Guardado Satisfactoriamente !');
    }

    public function UpdateSelect(ProveidorUpdateRequest $request, $id)
    {
        $proveidors = Proveïdors::find($id);

        $proveidors->nom = $request->nom;
        $proveidors->cif = $request->cif;
        $proveidors->numero = $request->numero;
        $proveidors->email = $request->email;
        $proveidors->tipus_incidencia = $request->tipus_incidencia;

        $proveidors->save();
        return redirect('admin/proveïdors')->with('message', 'Guardado Satisfactoriamente !');
    }

    public function destroy($id)
    {
        $proveidors = Proveïdors::find($id);
        $proveidors->delete();
        return redirect('admin/proveïdors')->with('message', 'Eliminado Satisfactoriamente !');
    }
}
