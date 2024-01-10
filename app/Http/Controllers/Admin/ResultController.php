<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Result\CreateRequest;
use App\Http\Requests\Result\UpdateRequest;
use App\Models\Result;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ResultController extends Controller
{
    public function index()
    {
        $results=Result::paginate(12);
        return view('admin.result.index',compact('results'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.result.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Result::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.result.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Result $result)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.result.update',compact('locales','result'));
    }

    public function update(UpdateRequest $request, Result $result)
    {
       $data=$request->validated();
       $result->update($data);
        if ($result) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
       return redirect()->route('admin.result.index');
    }

    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->back();
    }
}
