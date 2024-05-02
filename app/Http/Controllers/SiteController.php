<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\Http\Resources\SiteCollection;
use App\Http\Resources\SiteResource;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sites = Site::all();

        return new SiteCollection($sites);
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
    public function store(StoreSiteRequest $request)
    {
        //
        $site = Site::create($request->validated());

        return new SiteResource($site);
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
        return new SiteResource($site);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiteRequest $request, Site $site)
    {
        //
        $site->update($request->validated());

        return new SiteResource($site);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {

        $site->delete();

        return response()->json(['Message' => 'Resource Eliminated']);
    }
}
