<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store(Request $request)
    {
        Workout::create($request->all());
        return redirect()->route('workouts.index');
    }

    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        return view('workouts.show', compact('workout'));
    }

    public function edit($id)
    {
        $workout = Workout::findOrFail($id);
        return view('workouts.edit', compact('workout'));
    }

    public function update(Request $request, $id)
    {
        $workout = Workout::findOrFail($id);
        $workout->update($request->all());
        return redirect()->route('workouts.index');
    }

    public function destroy($id)
    {
        Workout::destroy($id);
        return redirect()->route('workouts.index');
    }
}
