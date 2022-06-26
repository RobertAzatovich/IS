<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\AutoBrand;
use Illuminate\Http\Request;

class AutoBrandController extends Controller
{
    public function index()
    {
        $autoBrands = AutoBrand::all();
        return view('catalog.auto_brand.index', compact('autoBrands'));
//        $brand = AutoBrand::find(1);
//        $autos = $brand->autos()->get();
//        dd($autos);AutoBrandController.php
    }

    public function create()
    {
        return view('catalog.auto_brand.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
        ]);

        AutoBrand::firstOrCreate($data);
        return redirect()->route('auto_brand.index');
    }

    public function edit(AutoBrand $autoBrand)
    {
        return view('catalog.auto_brand.edit', compact('autoBrand'));
    }

    public function update(AutoBrand $autoBrand)
    {
        $data = request()->validate([
            'title' => 'required|string',
        ]);
        $autoBrand->update($data);
        return redirect()->route('auto_brand.index');
    }

    public function destroy(AutoBrand $autoBrand)
    {
        $autoBrand->delete();
        return redirect()->route('auto_brand.index');
    }


}
