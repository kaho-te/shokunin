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
        $types = Type::orderBy('id')
            ->get();

        $recomends = Package::where('recommend_flag', '=', '1')
            ->orderBy('id')
            ->get();

        $recomendIds = array();
        for ($i = 0; $i < count($recomends); $i++) {
            $recomendIds[] = $recomends[$i]->id;
        }

        $recomendTypes = DB::table('packages')
            ->whereIn('packages.id', $recomendIds)
            ->join('artisan_package', 'packages.id', '=', 'artisan_package.package_id')
            ->join('artisan_type', 'artisan_package.artisan_id', '=', 'artisan_type.artisan_id')
            ->join('types', 'artisan_type.type_id', '=', 'types.id')
            ->distinct()
            ->select(
                'packages.id',
                'types.id as type_id',
                'types.name as type_name',
                'types.icon as type_icon',
                'types.image as type_image'
            )
            ->orderByRaw('packages.id , types.id asc')
            ->get();

        $packages = Package::orderBy('id')
            ->get();

        $packageIds = array();
        for ($i = 0; $i < count($packages); $i++) {
            $packageIds[] = $packages[$i]->id;
        }
        $packageTypes = DB::table('packages')
            ->whereIn('packages.id', $packageIds)
            ->join('artisan_package', 'packages.id', '=', 'artisan_package.package_id')
            ->join('artisan_type', 'artisan_package.artisan_id', '=', 'artisan_type.artisan_id')
            ->join('types', 'artisan_type.type_id', '=', 'types.id')
            ->distinct()
            ->select(
                'packages.id',
                'packages.recommend_flag',
                'types.id as type_id',
                'types.name as type_name',
                'types.icon as type_icon',
                'types.image as type_image'
            )
            ->orderByRaw('packages.id , types.id asc')
            ->get();

        return view('index', compact('types', 'recomends', 'recomendTypes', 'packages', 'packageTypes'));
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
        $package = Package::find(1);
        $packageArtisans = Package::with('get_artisans')->find(1);
        $artisans = $packageArtisans->get_artisans;

        $artisanIds = array();
        for ($i = 0; $i < count($artisans); $i++) {
            $artisanIds[] = $artisans[$i]->id;
        }
        $artisanTypes = DB::table('artisans')
            ->whereIn('artisans.id', $artisanIds)
            ->join('artisan_type', 'artisan_type.artisan_id', '=', 'artisans.id')
            ->join('types', 'types.id', '=', 'artisan_type.type_id')
            ->distinct()
            ->select('types.name', 'types.icon', 'types.image')
            ->get();

        return view('show', compact('package', 'artisanTypes'));
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

    public function search(Request $request)
    {
        $scale = $request->adult_scale + $request->child_scale;
        // $packages = Package::where('start_date', '<=', $request->date)
        //     ->where('end_date', '>=', $request->date)
        //     ->where('min_guest_num', '<=', $scale)
        //     ->where('max_guest_num', '>=', $scale)
        //     ->get();

        $packages = Package::where('start_date', '<=', '2024-03-01')
            ->where('end_date', '>=', '2024-03-01')
            ->where('min_guest_num', '<=', 2)
            ->where('max_guest_num', '>=', 2)
            ->get();

        $resultCnt = $packages->count();

        $packageIds = array();
        for ($i = 0; $i < count($packages); $i++) {
            $packageIds[] = $packages[$i]->id;
        }

        $packageTypes = DB::table('packages')
            ->whereIn('packages.id', $packageIds)
            ->join('artisan_package', 'packages.id', '=', 'artisan_package.package_id')
            ->join('artisan_type', 'artisan_package.artisan_id', '=', 'artisan_type.artisan_id')
            ->join('types', 'artisan_type.type_id', '=', 'types.id')
            ->distinct()
            ->select(
                'packages.id',
                'types.id as type_id',
                'types.name as type_name',
                'types.icon as type_icon',
                'types.image as type_image'
            )
            ->orderByRaw('types.id asc')
            ->get();

        dd($packageTypes);

        return view('search', compact('packages', 'packageTypes', 'resultCnt'));
    }

    public function check(Package $package)
    {
        //
    }
}
