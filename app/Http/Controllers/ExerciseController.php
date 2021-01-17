<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\Category;

class ExerciseController extends Controller
{
    
    protected $casts = [
        'exerciseCategory' => 'string',
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();
        
        return view('exercises.index', compact('exercises'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exerciseCategories = Category::all();
        
        return view ('exercises.create', ['exerciseCategories' => $exerciseCategories]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'exerciseName' => 'required|unique:exercises',
            'exerciseCategory' => 'required'
            ]);

            $exercise = new Exercise([
                'exerciseName' => $request->get('exerciseName'),
                // 'exerciseCategory' => $exerciseCategoryToString
            ]);
            $exercise->save();

            $exercise->categories()->sync($request->get('exerciseCategory'));

            return redirect('exercise/')->with('success', 'Exercise saved!');
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
        $exercise = Exercise::find($id);
        $exerciseCategories = Category::all();
        $selectedExercises = explode(",", $exercise->exerciseCategory);

        return view('exercises.update', compact('exercise', 'exerciseCategories', 'selectedExercises'));
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
            'exerciseName' => 'required',
            'exerciseCategory' => 'required'
        ]);

        $exercise = Exercise::find($id);
        $exercise->exerciseName = $request->get('exerciseName');
        // $exercise->exerciseCategory = implode(", ", $request->exerciseCategory);
        $exercise->save();

        return redirect('/exercise')->with('success', 'Exercise updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return redirect('/exercise')->with('success', 'Exercise deleted!');
    }
}
