<?php

namespace App\Http\Controllers;

use App\Models\Elector;
use Illuminate\Http\Request;

class ElectorController extends Controller
{
    
    public function index()
    {
     
        $datos['electores']=Elector::paginate();
        return view('elector.index',$datos); 
     
       
    }




    public function create()
    {
        
        return view('elector.crear');

    }

   




    public function store(Request $request)
    {
        $datosElector=request()->all();        
        $datosElector=request()->except('_token');        
        Elector::insert($datosElector);
        return redirect('electores');


    }

   




    public function show(Elector $elector)
    {




    }

    




    public function edit($id)
    {
    
        $elector =Elector::findOrFail($id);
       
        return view ('elector.editar', compact('elector'));

    }

    



    public function update($id)
    {
       
        $datosElector=request()->all();        
        $datosElector=request()->except('_token','_method');        
        Elector::Where('id','=',$id)->update($datosElector);
        return redirect('electores');


    }

    


    public function destroy($id)
    {
        Elector::destroy($id);
        return redirect('electores');


    }
}
