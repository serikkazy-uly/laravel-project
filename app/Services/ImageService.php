<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ImageService
{

    public function all()
    {
        $images = DB::table('images')->select('*')->get();
        $myImages = $images->all();
        return $myImages;
    }
}
