<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntrysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrys = Entry::all(); 

        return view('entry.show', compact('entrys')); // Passes the data to the 'users.index' view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('entry/create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastInsertedRecord = Entry::latest()->first();
        $lastInsertedId = $lastInsertedRecord->id;
        $last_rec_Balance = Entry::where('id', $lastInsertedId)->value('balance');

        if($request->status == "entry"){
            $post = new Entry();
            $post->date = $request->date;
            $post->name = $request->name;
            $post->rate = $request->rate;
            $post->boal = $request->boal;
            $post->coal = $request->coal;
            $post->amount = $request->amount;
            $post->status = $request->status;
            $post->rec_amount = 0;               
            $post->balance = $request->amount + $last_rec_Balance;
            $post->save(); 
            return redirect('/entrys/create')->with('success', 'entrys created successfully!');
        }
        else{
            $post = new Entry();
            $post->date = $request->date;
            $post->name = $request->name;
            $post->rate = 0;
            $post->boal = 0;
            $post->coal = 0;
            $post->amount = 0;
            $post->status = $request->status;
            $post->rec_amount = $request->rec_amount;               
            $post->balance = $last_rec_Balance - $request->rec_amount;
            $post->save(); 
            $entry = Entry::all();
            // return view('entry.index', compact('entry'));
            // return redirect('/entrys/create')->with('success', 'entrys created successfully!');

        }
                        
        // $post->save(); 
        
        // return redirect('/entrys/create')->with('success', 'entrys created successfully!');

        // return redirect()->route('entrys.index')->with('success', 'entrys created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {

        return view('entry.index', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //
        dd("hi");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        $entry->delete();
        return view('/home');

    }

    public function received(Entry $entry)
    {
        return view('entry.receive');
        // return view('entry.index', compact('entry'));

        //return view('/home');
        
    }
    
}

