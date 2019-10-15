<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HelperController extends Controller
{


    public static function getImageUrl($image)
    {
        return '/images/'. $image;
    }
}