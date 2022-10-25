<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Book::all();

        return response()->json([
            'message' => 'Load Data Book Success!',
            'data' => $table
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Book::create([
            "book" => $request->book,
            "author" => $request->author,
            "year" => $request->year
        ]);

        return response()->json([
            "message"=>"Store Data Book Success!",
            "book"=>$table
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Book::find($id);
        if($table){
            return $table;
        }else{
            return ["message" => "Data Book Not Found!"];
        }
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
        $table = Book::find($id);
        if($table){
            $table->book = $request->book ? $request->book : $table->book;
            $table->author = $request->author ? $request->author : $table->author;
            $table->year = $request->year ? $request->year : $table->year;
            $table->save();

            return $table;
        }else{
            return ["message"=>"Data Book Not Found!"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Book::find($id);
        if($table){
            $table->delete();

            return ["message"=>"Delete Book Success!"]; 
        }else{
            return ["message"=>"Data Book Not Found!"];
        }
    }
}
