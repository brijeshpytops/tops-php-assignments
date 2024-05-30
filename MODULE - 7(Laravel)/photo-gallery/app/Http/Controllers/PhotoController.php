<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function create() {
        return view('photos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'photo' => 'required|image'
        ]);

        $path = $request->file('photo')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'path' => $path
        ]);

        return redirect()->route('photos.index');
    }

    public function gallery() {
        $photos = Photo::all();
        return view('photos.gallery', compact('photos'));
    }
}
