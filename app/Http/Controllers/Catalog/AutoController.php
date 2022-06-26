<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Auto;
use App\Models\AutoBrand;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $auto = Auto::all();
        return view('catalog.auto.index', compact('autos'));
    }

    public function create()
    {
        $autoBrands = AutoBrand::all();
        return view('catalog.auto.create', compact('autoBrands'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
        ]);

        Auto::firstOrCreate($data);
        return redirect()->route('auto.index');
    }

    public function edit(Auto $auto)
    {
        return view('catalog.auto.edit', compact('auto'));
    }

    public function update(Auto $auto)
    {
        $data = request()->validate([
            'title' => 'required|string',
        ]);
        $auto->update($data);
        return redirect()->route('auto.index');
    }

    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('auto.index');
    }


}
