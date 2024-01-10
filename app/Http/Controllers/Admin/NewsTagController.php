<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newstags\CreateRequest;
use App\Http\Requests\Newstags\UpdateRequest;
use App\Models\Newstag;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class NewsTagController extends Controller
{
    public function index()
    {
        $tags=Newstag::paginate(10);
        return view('admin.newstags.index',compact('tags'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view("admin.newstags.create", compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Newstag::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.newstags.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Newstag $newstag)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.newstags.update',compact('newstag','locales'));
    }

    public function update(UpdateRequest $request, Newstag $newstag)
    {
        $data=$request->validated();
        $newstag->update($data);
        if ($newstag) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.newstags.index');
    }

    public function destroy(Newstag $tag)
    {
        $tag->delete();
        return redirect()->back();
    }
}
