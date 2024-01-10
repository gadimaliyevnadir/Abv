<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateRequest;
use App\Http\Requests\Slider\UpdateRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\type;

class SliderController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $sliders=Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $images=['svg','jpg','jpeg','avif','webp','png'];
        $videos=['mp4','mpeg','flv'];
        foreach($videos as $video){
            if ($video == $data['image']->extension()) {
                $data['type'] = 'video';
            }
        }
        foreach($images as $image){
            if($image == $data['image']->extension()){
                $data['type']='image';
            }
        }
        $data['image'] = $this->crud->common_image('Sliders', $request, 'image');
        Slider::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.slider.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Slider $slider)
    {
       return view('admin.slider.update',compact('slider'));
    }

    public function update(UpdateRequest $request, Slider $slider)
    {
        $data=$request->validated();
        $images = ['svg', 'jpg', 'jpeg', 'avif', 'webp', 'png'];
        $videos = ['mp4', 'mpeg', 'flv'];
        foreach ($videos as $video) {
            if ($video == $data['image']->extension()) {
                $data['type'] = 'video';
            }
        }
        foreach ($images as $image) {
            if ($image == $data['image']->extension()) {
                $data['type'] = 'image';
            }
        }
        if ($request->hasFile('image')) {
            File::delete($slider->image);
            $data['image'] = $this->crud->common_image('Sliders', $request, 'image');
        }
        $slider->update($data);
        return redirect()->route('admin.slider.index');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back();
    }
}
