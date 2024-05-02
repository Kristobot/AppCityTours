<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTouristPackageRequest;
use App\Models\TouristPackage;
use Illuminate\Http\Request;

class TouristPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTouristPackageRequest $request)
    {
        //
        $touristPackage = TouristPackage::create($request->validated());

        return $touristPackage;
    }

    /**
     * Display the specified resource.
     */
    public function show(TouristPackage $touristPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TouristPackage $touristPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TouristPackage $touristPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TouristPackage $touristPackage)
    {
        //
        $touristPackage->deleteOrFail();

        return response()->json(['Message' => 'Recurso Eliminado Correctamente']);
    }
}
