<?php

namespace App\Http\Controllers;

use App\Models\todoModel;
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todoModel  $todoModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
        return  view('todo.show', [
            'todo' =>todoModel::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todoModel  $todoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(todoModel $todoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todoModel  $todoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todoModel $todoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todoModel  $todoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(todoModel $todoModel)
    {
        //
    }
}
