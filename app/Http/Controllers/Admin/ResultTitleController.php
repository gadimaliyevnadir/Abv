<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResultTitle\CreateRequest;
use App\Http\Requests\ResultTitle\UpdateRequest;
use App\Models\ResultTitle;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ResultTitleController extends Controller
{

    public function index()
    {
        $resulttitle=ResultTitle::firstOrFail();
        return view('admin.resulttitle.index',compact('resulttitle'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.resulttitle.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
       $data=$request->validated();
        ResultTitle::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
       return redirect()->route('admin.resulttitle.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(ResultTitle $resulttitle)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.resulttitle.update',compact('resulttitle','locales'));
    }

    public function update(UpdateRequest $request, ResultTitle $resulttitle)
    {
        $data=$request->validated();
        $resulttitle->update($data);
        if ($resulttitle) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.resulttitle.index');
    }

    public function destroy(ResultTitle $resulttitle)
    {
        $resulttitle->delete();
        return redirect()->back();
    }
}
