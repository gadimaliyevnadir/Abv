<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeOptions\CreateRequest;
use App\Http\Requests\AttributeOptions\UpdateRequest;
use App\Models\Attribute;
use App\Models\Attribute_option;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AttributeOptionsController extends Controller
{

    public function index($id)
    {
        $atribut = Attribute::where('id', $id)->firstOrFail();
        $options = Attribute_option::where('attribute_id', $id)->paginate(10);
        return view('admin.attributeoption.index', compact('options', 'atribut'));
    }

    public function create($id)
    {
        $attribute = Attribute::where('id', $id)->firstOrFail();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attributeoption.create', compact('locales', 'attribute'));
    }

    public function store(CreateRequest $request)
    {

        $data = $request->validated();
        Attribute_option::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $option = Attribute_option::with('attribute')->find($id);
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attributeoption.update', compact('option', 'locales'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $option= Attribute_option::find($id);
        $data = $request->validated();
        $option->update($data);
        if ($option) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.attributeoption.index', $request->attribute_id);
    }

    public function destroy($id)
    {
        $delete = Attribute_option::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
