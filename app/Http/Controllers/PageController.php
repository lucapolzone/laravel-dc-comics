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
}
