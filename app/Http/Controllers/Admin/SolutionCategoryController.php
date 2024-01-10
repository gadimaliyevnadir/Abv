<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Solution\CreateRequest;
use App\Http\Requests\Solution\UpdateRequest;
use App\Models\SolutionCategory;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SolutionCategoryController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $solutioncategories=SolutionCategory::all();
        return view('admin.solutioncategory.index',compact('solutioncategories'));
    }

    public function create()
    {
        $locales=LaravelLocalization::getSupportedLocales();
        return view('admin.solutioncategory.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image'] = $this->crud->common_image('SolutionCategories', $request, 'image');
        SolutionCategory::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.solutioncategory.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(SolutionCategory $solutioncategory)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.solutioncategory.update',compact('solutioncategory', 'locales'));
    }

    public function update(UpdateRequest $request, SolutionCategory $solutioncategory)
    {
       $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($solutioncategory->image);
            $data['image'] = $this->crud->common_image('Solutioncategories', $request, 'image');
        }
        if ($solutioncategory) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        $solutioncategory->update($data);
       return redirect()->route('admin.solutioncategory.index');
    }

    public function destroy(SolutionCategory $solutioncategory)
    {
        $solutioncategory->delete();
        return redirect()->back();
    }
}
