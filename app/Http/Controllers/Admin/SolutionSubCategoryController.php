<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Solutionsubcategory\CreateRequest;
use App\Http\Requests\Solutionsubcategory\UpdateRequest;
use App\Models\SolutionCategory;
use App\Models\Solutionsubcategory;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SolutionSubCategoryController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $solsubcategories=Solutionsubcategory::all();
        return view('admin.solsubcategory.index',compact('solsubcategories'));
    }

    public function create()
    {
        $categories=SolutionCategory::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.solsubcategory.create', compact('locales', 'categories'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image'] = $this->crud->common_image('SolutionSubCategories', $request, 'image');
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        Solutionsubcategory::create($data);
        return redirect()->route('admin.solsubcategory.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Solutionsubcategory $solsubcategory)
    {
        $selectedCategoryId= $solsubcategory->category_id;
        $categories = SolutionCategory::with('solutionsubcategory')->get();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.solsubcategory.update', compact('locales','solsubcategory', 'categories', 'selectedCategoryId'));
    }

    public function update(UpdateRequest $request, Solutionsubcategory $solsubcategory)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            File::delete($solsubcategory->image);
            $data['image'] = $this->crud->common_image('Solutioncategories', $request, 'image');
        }
        $solsubcategory->update($data);
        if ($solsubcategory) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.solsubcategory.index');
    }

    public function destroy(Solutionsubcategory $solsubcategory)
    {
        $solsubcategory->delete();
        return redirect()->back();
    }
}
