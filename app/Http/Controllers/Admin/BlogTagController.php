<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogtags\CreateRequest;
use App\Http\Requests\Blogtags\UpdateRequest;
use App\Models\Blogtag;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BlogTagController extends Controller
{

    public function index()
    {
        $tags=Blogtag::paginate(10);
        return view('admin.blogtags.index',compact('tags'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view("admin.blogtags.create", compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Blogtag::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.blogtags.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Blogtag $blogtag)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogtags.update',compact('blogtag','locales'));
    }

    public function update(UpdateRequest $request, Blogtag $blogtag)
    {
        $data=$request->validated();
        $blogtag->update($data);
        if ($blogtag) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.blogtags.index');
    }

    public function destroy($id)
    {
        $tag=Blogtag::where('id',$id)->firstOrFail();
        $tag->delete();
        return redirect()->back();
    }
}
