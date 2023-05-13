<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeSliderResource;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class HomeSliderController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::active()->latest()->get();
        $data = HomeSliderResource::collection($sliders);

        return response()->json([
            'data' => $data
        ]);
    }
}
