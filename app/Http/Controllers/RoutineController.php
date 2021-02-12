<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exercise;
use App\Category;
use App\Routine;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routines = Routine::all()->sortByDesc('updated_at');
        return view('routines.index', compact('routines'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exercises = Exercise::all();
        return view('routines.create', compact('exercises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['routineName' => 'required|unique:routines']);

        $routine = new Routine([
            'routineName' => $request->get('routineName'),
            'routineDescription' => $request->get('routine-description')
        ]);

        $routine->save();

        $routine->exercises()->sync($request->get('routineExercises'));

        return redirect('routines')->with('success', 'Routine saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routine = Routine::find($id);

        return view('routines.update', compact('routine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'routineName' => 'required'
        ]);

        $routine = Routine::find($id);
        $routine->routineName = $request->get('routineName');
        $routine->routineDescription = $request->get('routineDescription');
        $routine->save();

        return redirect('routines')->with('success', 'Routine updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
