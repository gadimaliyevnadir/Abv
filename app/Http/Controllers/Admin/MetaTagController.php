<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MetaTags\CreateRequest;
use App\Http\Requests\MetaTags\UpdateRequest;
use App\Models\Meta_tag;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MetaTagController extends Controller
{
    public function index()
    {
        $metatag = Meta_tag::query()->firstOrFail();
        return view('admin.metatags.index', compact('metatag'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.metatags.create', compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        Meta_tag::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.metatags.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Meta_tag $metatag)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.metatags.update', compact('metatag', 'locales'));
    }

    public function update(UpdateRequest $request, Meta_tag $metatag)
    {
        $data = $request->validated();
        $metatag->update($data);
        if ($metatag) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.metatags.index');
    }

    public function destroy(Meta_tag $meta_tag)
    {
        $meta_tag->delete();
        return redirect()->back();
    }
}
