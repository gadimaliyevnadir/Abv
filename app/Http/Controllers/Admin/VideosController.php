<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Videos\CreateRequest;
use App\Http\Requests\Videos\UpdateRequest;
use App\Models\Video;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;

class VideosController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $videos=Video::all();
        return view('admin.videos.index',compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['backimage']=$this->crud->common_image('Videos',$request,'backimage');
        Video::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.videos.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Video $video)
    {
        return view('admin.videos.update',compact('video'));
    }

    public function update(UpdateRequest $request, Video $video)
    {
        $data=$request->validated();
        if ($request->hasFile('backimage')) {
            File::delete($video->backimage);
            $data['backimage'] = $this->crud->common_image('Videos', $request, 'backimage');
        }
        $video->update($data);
        if ($video) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.videos.index');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->back();
    }
}
