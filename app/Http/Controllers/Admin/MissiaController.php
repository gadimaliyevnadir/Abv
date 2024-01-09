<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Missia\CreateRequest;
use App\Http\Requests\Missia\UpdateRequest;
use App\Models\Missia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MissiaController extends Controller
{
    public function index()
    {
        $missias=Missia::all();
        return view('admin.missia.index',compact('missias'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.missia.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
       $data=$request->validated();
         Missia::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
       return redirect()->route('admin.missia.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Missia $missium)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.missia.update',compact('missium','locales'));
    }

    public function update(UpdateRequest $request, Missia $missium)
    {
        $data=$request->validated();
        $missium->update($data);
        if ($missium) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.missia.index');
    }

    public function destroy(Missia $missium)
    {
        $missium->delete();
        return redirect()->back();
    }
}
