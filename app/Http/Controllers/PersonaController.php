<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Persona;

class PersonaController extends Controller
{
    public function index()
    {
       $person = Persona::	all();
	   return view("Personas.index")->with('personas', $person);
    }

    public function delete($id)
    {
       try
		{
			$persona = Persona::where('id', '=',$id);
	        $persona->delete();
	    }
	    catch(\Illuminate\Database\QueryException $e)
        {   
           dd('catch');
            return redirect('/personas/')->withErrors('Este registro contiene datos vinculados que restringen su eliminación!!');
        }
      
		return redirect('/personas')->with('alert_type','alert-success')
                                     ->with('message', 'La persona ha sido eliminada');
    }
                                    

    
}
