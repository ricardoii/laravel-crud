<?php

class ContactoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contacto
	 *
	 * @return Response
	 */
	public function index()
	{
		// leer todos los contactos
		$contactos = Contacto::all();

		// cargar la vista y enviar la variable con los contactos
		return View::make('contactos.index')
			->with('contactos', $contactos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contacto/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/contactos/create.blade.php)
		return View::make('contactos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contacto
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'gaming_level' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('contactos/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$contactos = new Contacto;
			$contactos->name       = Input::get('name');
			$contactos->email      = Input::get('email');
			$contactos->gaming_level = Input::get('gaming_level');
			$contactos->save();

			// redirect
			Session::flash('message', 'Contacto creado!');
			return Redirect::to('contactos');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /contacto/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Tomar (get) contacto segun id
		$contacto = Contacto::find($id);

		// Mostrar la vista y mandar la variable con el un contacto segun ID
		return View::make('contactos.show')
			->with('contacto', $contacto);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /contacto/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Toma (get) un contacto
		$contacto = Contacto::find($id);

		// Mostrar la vista y mandar la variable con el un contacto segun ID para ser editado
		return View::make('contactos.edit')
			->with('contacto', $contacto);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contacto/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'gaming_level' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('contacto/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$contacto = Contacto::find($id);
			$contacto->name       = Input::get('name');
			$contacto->email      = Input::get('email');
			$contacto->gaming_level = Input::get('gaming_level');
			$contacto->save();

			// redirect
			Session::flash('message', 'Contacto Editado!');
			return Redirect::to('contactos');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contacto/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$contacto = Contacto::find($id);
		$contacto->delete();

		// redirect
		Session::flash('message', 'Contacto borrado!');
		return Redirect::to('contactos');
	}

}