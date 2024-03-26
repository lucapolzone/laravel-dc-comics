<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	//
	public function index()
	{
		return view('pages.home');
	}

	//form per creare una nuova risorsa
	public function create()
	{
		return view('pages.create');
	}

	//Salva una risorsa appena creata
	//Parametro Request $request che rappresenta l'istanza della classe Illuminate\Http\Request
	//Questa classe contiene le informazioni sulla richiesta HTTP in arrivo, come i dati del modulo inviati dal client
	public function store(Request $request)
	{
		dd($request->all());
	}
}
