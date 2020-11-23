<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Store all the tasks in a variable named tasks
        $tasks = \App\Models\Tasks::all();
        $users = \App\Models\User::all();
        // Return the view with the variable named 'allTasks'
        return view('welcome', ['allTasks' => $tasks], ['allUsers' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // I got the validation working this way but not with  \Request\StoreTask.php
        $validatedData = $request->validate([
            'name' => 'required|unique:tasks|max:255',
            'user_id' => 'required',
        ]);
        // This does what the commented code below does but easier
        \App\Models\Tasks::create($request->all());
        
        /*\App\Models\Tasks::create([
            'name' => $request->get('name'),
            'user_id' => $request->get('user_id'),
            ]);*/
        return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Calls destroy method on the ID sent on the URL
        \App\Models\Tasks::destroy($id);
        // Redirects to index
        return redirect('/');
    }
}
