<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Photo;

class PhotoController extends BaseController
{
    function index() {
        $photos = Photo::all();
        return view('photo', compact('photos'));
    }
    function create() {

        $request->validate(
            [
                'author' => 'Молчанов Сергій Володимирович',
                'name' => 'Photo 1',
                'description' => 'it is my photo 1',
                'url' => '',
                'hashtags' => ['#h1', '#h2', '#h3'],
            ],
        );

        $photo = Photo::findOrFail($id);
        $photo->update($request->all());
        return response()->json($photo);
    }
    function edit() {
        return view('photo.edit');
    }
}
