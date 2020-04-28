<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEntry;

class EntryController extends Controller
{
    public function index() 
    {
        return response()->json(Entry::get());
    }

    public function edit(Request $request, $id) 
    {
        $entry = Entry::find($id);
        
        return response()->json($entry);
    }

    public function create(StoreEntry $request)
    {
        $validated = $request->validated();

        return Entry::create($validated);
    }

    public function put(Request $request, $id)
    {
        $entry = Entry::find($id);
        $entry->number_of_likes = $request->number_of_likes;

        $entry->save();

        return response()->json($entry);
    }
}
