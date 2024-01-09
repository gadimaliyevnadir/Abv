<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\Blogtag;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $blogs=Blog::all();

        return view("admin.blogs.index",compact('blogs'));
    }

    public function create()
    {
        $tags=Blogtag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.create',compact('locales','tags'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        if (empty($data['slug'])){
            $data['slug'] = Str::slug($request->title);
        }
        $data['image'] = $this->crud->common_image('Blogs', $request, 'image');
        unset($data['tag_id']);
        $create = Blog::create($data);
        if($create){
            $create->tags()->sync($request->tag_id);
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.blogs.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Blog $blog)
    {
        $tags=Blogtag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.update',compact('blog','locales','tags'));
    }

    public function update(UpdateRequest $request, Blog $blog)
    {
        $data = $request->validated();
        if(empty($data['slug'])){
        $data['slug']= Str::slug($data['title']);
        }
        if ($request->hasFile('image')) {
            File::delete($blog->image);
            $data['image'] = $this->crud->common_image('Blogs', $request, 'image');
        }
        unset($data['tag_id']);
        $updata = $blog->update($data);
        if ($updata) {
            $blog->tags()->sync($request->tag_id);
        }
        if ($blog) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
