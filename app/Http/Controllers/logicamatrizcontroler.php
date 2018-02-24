<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logicamatrizcontroler extends Controller
{
	public function CrearMatriz(Request $Request)
	{
		$nombre=$Request->input('nombre');
		$apellido=$Request->input('apellido');
		$edad=$Request->input('edad');
		$sexo=$Request->input('sexo');
		$telefono=$Request->input('telefono');	
		$curso=$Request->input('curso');

		echo $nombre."<br>".$apellido."<br>".$edad."<br>".$sexo."<br>".$telefono."<br>".$curso;
		    $informacion=[
    
    	['nombre'=>'antony',
    	'apellido'=>'calderon',
    	'edad'=>'28',
    	'sexo'=>'masculino',
    	'telefono'=>'3219161112',
    	'curso'=>'302'],

    	['nombre'=>'alexander',
    	'apellido'=>'torres',
    	'edad'=>'27',
    	'sexo'=>'masculino',
    	'telefono'=>'3219161112',
    	'curso'=>'302'],

    	['nombre'=>'jhony',
    	'apellido'=>'sanchez',
    	'edad'=>'26',
    	'sexo'=>'masculino',
    	'telefono'=>'3219160000',
    	'curso'=>'301'],
    ];
  
    foreach ($informacion as $value)
     {

    	# code...
     }
	}	
}
