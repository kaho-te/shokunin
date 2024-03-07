<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Package;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        $packageArtisans = Package::with('get_artisans')->find($package->id);
        $artisans = $packageArtisans->get_artisans;
        
        $artisanIds = array();
        for($i=0; $i<count($artisans); $i++) {
            $artisanIds[] = $artisans[$i]->id;
        }
        $artisanTypes = DB::table('artisans')
            ->whereIn( 'artisans.id', $artisanIds)
            ->join('artisan_type', 'artisan_type.artisan_id', '=', 'artisans.id')
            ->join('types', 'types.id', '=', 'artisan_type.type_id')
            ->distinct()
            ->select('types.name','types.image')
            ->get();

        return view('show', compact('package','artisanTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }

    public function search(Package $package)
    {
        //
    }

    public function check(Package $package)
    {
        //
    }
}
