<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\CreateRequest;
use App\Http\Requests\Faq\UpdateRequest;
use App\Models\Faq;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FaqController extends Controller
{
    public function index()
    {
        $faqs=Faq::all();
       return view('admin.faqs.index',compact('faqs'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.faqs.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Faq::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();

        return redirect()->route('admin.faqs.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Faq $faq)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.faqs.update', compact('locales','faq'));
    }

    public function update(UpdateRequest $request, Faq $faq)
    {
        $data=$request->validated();
        $faq->update($data);
        if ($faq) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.faqs.index');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->back();
    }
}
