<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;
use App\Models\Newstag;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $news=News::all();

        return view("admin.news.index",compact('news'));
    }

    public function create()
    {
        $tags=Newstag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.news.create',compact('locales','tags'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        if (empty($data['slug'])){
            $data['slug'] = Str::slug($request->title);
        }
        $data['image'] = $this->crud->common_image('News', $request, 'image');
        unset($data['tag_id']);
        $create = News::create($data);
        if($create){
            $create->tags()->sync($request->tag_id);
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.news.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(News $news)
    {
        $tags=Newstag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.news.update',compact('news','locales','tags'));
    }

    public function update(UpdateRequest $request, News $news)
    {
        $data = $request->validated();
        if(empty($data['slug'])){
        $data['slug']= Str::slug($data['title']);
        }
        if ($request->hasFile('image')) {
            File::delete($news->image);
            $data['image'] = $this->crud->common_image('News', $request, 'image');
        }
        unset($data['tag_id']);
        $updata = $news->update($data);
        if ($updata) {
            $news->tags()->sync($request->tag_id);
        }
        if ($news) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back();
    }
}
