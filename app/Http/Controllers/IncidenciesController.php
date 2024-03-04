<?php

namespace App\Http\Controllers;

use App\Models\Incidencies;
use App\Models\Proveïdors;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DateTime;

class IncidenciesController extends Controller
{
    public function crear()
    {
        $incidencies = Incidencies::all();
        $tipusIncidencia = Proveïdors::pluck('tipus_incidencia', 'id');

        return view('admin.incidencies.crear', compact('incidencies', 'tipusIncidencia'));
    }
    public function store(ItemCreateRequest $request)
    {
        $incidencies = new Incidencies;

        $incidencies->tipus = $request->tipus;

        $incidencies->lloc = $request->lloc;
        $incidencies->descripcio = $request->descripcio;

        $incidencies->media = $request->file('media')->store('/');

        $incidencies->estat = 'per enviar';
        $incidencies->enviat = 0;
        $incidencies->created_at = (new DateTime)->getTimestamp();

        $incidencies->save();
        return redirect('admin/incidencies')->with('message', 'Guardado Satisfactoriamente !');
    }
    public function index()
    {
        $incidencies = Incidencies::all();

        return view('admin.incidencies.index', compact('incidencies'));
    }


    public function edit($id)
    {
        $incidencies = Incidencies::find($id);
        return view('admin.incidencies.editar', compact('incidencies'));
    }
    public function update($id, ItemUpdateRequest $request)
    {
        $incidencies = Incidencies::findOrFail($id);
        $incidencies->tipus = $request->tipus;
        $incidencies->lloc = $request->lloc;
        $incidencies->descripcio = $request->descripcio;
        if ($request->hasFile('media')) {
            $media = explode(",", $incidencies->media);
            Storage::delete($media);
            $incidencies->media = $request->file('media')->store('/');
        }
        $incidencies->save();
        return Redirect::to('admin/incidencies');
    }

    public function UpdateSelect(ItemUpdateRequest $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'estat' => 'required|in:per enviar,pendent,resolta',
            'enviat' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            $incidencia = Incidencies::findOrFail($id);

            $incidencia->update([
                'estat' => $request->estat,
                'enviat' => $request->enviat,
            ]);

            return Redirect::to('admin/incidencies');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $incidencies = Incidencies::find($id);
        return view('admin.incidencies.detalles', compact('incidencies'));
    }

    public function destroy($id)
    {
        $incidencies = Incidencies::find($id);
        $media = explode(",", $incidencies->media);
        Storage::delete($media);

        Incidencies::destroy($id);
        $incidencies->deleted_at = (new DateTime)->getTimestamp();

        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/incidencies');
    }
    public function sendWhatsApp($id)
    {
        $incidencia = Incidencies::find($id);

        $proveidor = Proveïdors::where('tipus_incidencia', $incidencia->tipus)->first();

        $numero = $proveidor->numero;
        // Enviar mensaje de whatsapp
        return redirect()->away("https://wa.me/$numero?text=Hola,%20tienes%20una%20incidencia%20nueva%20de%20tipo%20$incidencia->tipus%20en%20la%20dirección%20$incidencia->lloc%20con%20la%20descripción%20$incidencia->descripcio");
    }
}
