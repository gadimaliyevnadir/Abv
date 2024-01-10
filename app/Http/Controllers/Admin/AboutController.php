<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\CreateRequest;
use App\Http\Requests\About\UpdateRequest;
use App\Models\About;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AboutController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $about=About::firstOrFail();
        return view('admin.about.index',compact('about'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.about.create', compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image1']=$this->crud->common_image('About', $request, 'image1');
        $data['image2'] = $this->crud->common_image('About', $request, 'image2');
        $data['image3'] = $this->crud->common_image('About', $request, 'image3');
        About::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.about.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(About $about)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.about.update', compact('locales', 'about'));
    }

    public function update(UpdateRequest $request, About $about)
    {
        $data = $request->validated();
        if ($request->hasFile('image1')) {
            File::delete($about->image1);
            $data['image1'] = $this->crud->common_image('About', $request, 'image1');
        }
        if ($request->hasFile('image2')) {
            File::delete($about->image2);
            $data['image2'] = $this->crud->common_image('About', $request, 'image2');
        }
        if ($request->hasFile('image3')) {
            File::delete($about->image3);
            $data['image3'] = $this->crud->common_image('About', $request, 'image3');
        }
        $about->update($data);
        if ($about) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.about.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
