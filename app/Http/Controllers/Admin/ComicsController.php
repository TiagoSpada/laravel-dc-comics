<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
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
    public function store(StoreComicsRequest $request)
    {
        $data = $request->validated();
        $dc_comic = new Comics();

        // $dc_comics->title = $data['title'];
        // $dc_comics->description = $data['description'];
        // $dc_comics->thumb = $data['thumb'];
        // $dc_comics->price = $data['price'];
        // $dc_comics->series = $data['series'];
        // $dc_comics->sale_date = $data['sale_date'];
        // $dc_comics->type = $data['type'];
        // $dc_comics->artists = $data['artists'];
        // $dc_comics->writers = $data['writers'];
        $dc_comic->fill($data);
        $dc_comic->save();

        return redirect()->route('comics.show', $dc_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comic)
    {
        if ($comic === null) abort(500);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comics::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicsRequest $request, Comics $comic)
    {
        $data = $request->validated();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
