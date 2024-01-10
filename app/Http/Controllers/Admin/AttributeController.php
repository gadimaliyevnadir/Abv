<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Attribute\CreateRequest;
use App\Http\Requests\Attribute\UpdateRequest;
use App\Models\Attribute;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes=Attribute::all();
        return view('admin.attribute.index',compact('attributes'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.attribute.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Attribute::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.attribute.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Attribute $attribute)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.attribute.update',compact('attribute','locales'));
    }

    public function update(UpdateRequest $request, Attribute $attribute)
    {
        $data=$request->validated();
        $attribute->update($data);
        if ($attribute) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.attribute.index');
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->back();
    }
}
