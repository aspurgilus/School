<?php

namespace App\Http\Controllers;

use App\Action;
use Illuminate\Http\Request;
use App\School;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$actions = Action::all();
        return view('/schools.actions.index',compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/schools.actions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Action $action)
    {
        $action->addRecord();
        return redirect('/actions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        return view('/schools.actions.edit',compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action) {
		if($request->has('name')) {
			$action->update($request->validate([
				'name' => ['required', 'min:4'],
				'DateTime' => 'required',
				'place' => ['required', 'min:6'],
				'cost' => 'required']));
			return redirect('/actions');
		}
		else {
			$action->complete($request->has('completed'));
			return back();
		}
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        $action->delete();
        return redirect('/actions');
    }
}
