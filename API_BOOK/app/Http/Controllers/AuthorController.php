<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $author=Author::all();
          return $author;
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

        $author=new Author();
        $author->name=$request->name;

        $author->save();

        return response()->json($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
       $author= Author::find($id);

       return response()->json($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $author = Author::findOrFail($request->id);

        $author->name = $request->name;

        $author->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author=Author::findOrFail($id);
        if($author)
        {
            $author->delete();
            return response()->json(null);

        }
    }
}
