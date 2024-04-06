<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use CompileError;
use Illuminate\Http\Request;

class ComicController extends Controller
{
	//
	public function index()
	{
		// $comics = Comic::all();    //passo a compact $comics come Collection
		$comics = Comic::paginate(8); //passo a compact $comics come Collection
		return view('pages.home', compact('comics'));
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
		// dd($request->all());

		$data = $request->all();

		$comic = new Comic;

		// $comic->title = $data['title'];
		// $comic->description = $data['description'];
		// $comic->thumb = $data['thumb'];
		// $comic->price = $data['price'];
		// $comic->sale_date = $data['sale_date'];

		$comic->fill($data);

		$comic->save();

		return redirect()->route('pages.show', $comic);
	}

	public function show(Comic $comic) {
		return view('pages.show', compact('comic'));
	}

	
	public function edit(Comic $comic) {
		return view('pages.edit', compact('comic'));
	}
	
	public function update(Request $request, Comic $comic) {
		$data = $request->all();
		$comic->update($data);
		return redirect()->route('pages.show', $comic);
	}
}
