<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Http\Controllers\Controller;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Carousel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
