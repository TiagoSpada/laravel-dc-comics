<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index()
    {
        $data = [
            'comics' => Comics::all()
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dc_comics = new Comics();

        // $dc_comics->title = $data['title'];
        // $dc_comics->description = $data['description'];
        // $dc_comics->thumb = $data['thumb'];
        // $dc_comics->price = $data['price'];
        // $dc_comics->series = $data['series'];
        // $dc_comics->sale_date = $data['sale_date'];
        // $dc_comics->type = $data['type'];
        // $dc_comics->artists = $data['artists'];
        // $dc_comics->writers = $data['writers'];
        $dc_comics->fill($data);
        $dc_comics->save();

        return redirect()->route('comics.show', $dc_comics->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comics::find($id);
        if ($comics === null) abort(500);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comics = Comics::findOrFail($id);

        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comics = Comics::findOrFail($id);
        $data = $request->all();
        $comics->update($data);

        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
