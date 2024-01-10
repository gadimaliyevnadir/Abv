<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\CreateRequest;
use App\Http\Requests\Store\UpdateRequest;
use App\Models\Store;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class StoreController extends Controller
{
    public function index()
    {
        $stores=Store::all();
        return view('admin.store.index',compact('stores'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.store.create', compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Store::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.store.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Store $store)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.store.update', compact('locales','store'));
    }

    public function update(UpdateRequest $request, Store $store)
    {
       $data=$request->validated();
       $store->update($data);
        if ($store) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
       return redirect()->route('admin.store.index');
    }

    public function destroy(Store $store)
    {
        $store->delete();
        return redirect()->back();
    }
}
