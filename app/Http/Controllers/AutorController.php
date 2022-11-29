<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    
    public function index()
    {
        $autores = Autor::latest('id')->get();
        return view('autores.index',compact('autores'));
    }
    
    public function create()
    {
        return view('autores.create');
    }

    protected $messages = [
        'nombre.required' => 'Por favor ingrese el nombre',
        'edad.required' => 'Por favor ingrese la edad',
        'pais.required' => 'Por favor ingrese el país',
        'fnac.required' => 'Por favor ingrese la fecha de nacimiento',
    ];
    
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'pais' => 'required',
            'fnac' => 'required',
        ],$this->messages);

        Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    public function edit(Autor $autore)
    {
        return view('autores.edit',compact('autore'));
    }

    
    public function update(Request $request, Autor $autore)
    {
        $autore->update($request->all());
        return redirect()->route('autores.index');
    }

    
    public function destroy(Autor $autore)
    {
        $autor = Autor::find($autore->id);
        $autor->delete();
        return redirect()->route('autores.index');
    }
}
