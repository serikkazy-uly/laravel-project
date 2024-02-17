<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    private $images;
    public function __construct(ImageService $imageService)
    {
        $this->images = $imageService;
    }

    function index()
    {
        $images = $this->images->all();
        return view('welcome', ['imagesInView' => $images]);
    }

    function create()
    {
        return view('create');
    }

    function store(Request $request)
    {
        $image = $request->file('image');
        $filename = $request->image->store('uploads');
        DB::table('images')->insert(
            ['image' => $filename]
        );
        return redirect('/');
    }

    function show($id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();
        return view('show', ['imageInView' => $image->image]);
    }

    function edit($id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();
        return view('edit', ['imageInView' => $image]);
    }

    function update(Request $request, $id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();

        Storage::delete($image->image);

        $filename = $request->image->store('uploads');

        DB::table('images')
            ->where('id', $id)
            ->update(['image' => $filename]);
        return redirect('/');
    }

    function delete($id)
    {
        $image = DB::table('images')->select('*')
            ->where('id', $id)
            ->first();
        Storage::delete($image->image);

        DB::table('images')
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }
}
