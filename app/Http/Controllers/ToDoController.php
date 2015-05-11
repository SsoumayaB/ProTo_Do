<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use App\ToDo;
use Request;

class ToDoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $todo=ToDo::all();
		return view('To_Do.index',compact('todo'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('To_Do.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$todo= new ToDo;
        $todo->A_faire= Request::get('texte');
        $todo->Date= Request::get('date');
        $todo->Heure= Request::get('heure');
        $todo->save();
        
        return redirect('/To_Do');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $todo=ToDo::findOrFail($id);
		return view('To_Do.show',compact('todo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $todo= ToDo::find($id);
        return view('To_Do.edit',compact('todo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$todo= ToDo::find($id);
        $todo->A_faire= Request::get('texte');
        $todo->Date= Request::get('date');
        $todo->Heure= Request::get('heure');
        $todo->save();
        
        return redirect('/To_Do/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$todo= ToDo::find($id);
        $todo->delete();
        
        return redirect('/To_Do');
	}

}
