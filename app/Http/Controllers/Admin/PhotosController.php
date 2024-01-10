<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Photos\CreateRequest;
use App\Http\Requests\Photos\UpdateRequest;
use App\Models\Photo;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;

class PhotosController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }



    public function index()
    {
        $photos=Photo::all();
        return view('admin.photos.index',compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(CreateRequest $request)
    {
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $img= '/uploads/Photo/' .$imageName;
                $photo = new Photo([
                    'image' => $img,
                ]);
                $file->move(public_path('/uploads/Photo'), $imageName);
                $photo->save();
            }
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.photos.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Photo $photo)
    {
        return view('admin.photos.update',compact('photo'));
    }

    public function update(UpdateRequest $request, Photo $photo)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($photo->image);
            $data['image'] = $this->crud->common_image('Photo', $request, 'image');
        }
        $photo->update($data);
        if ($photo) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.photos.index');
    }

    public function destroy(Photo $photo)
    {
       $photo->delete();
       return redirect()->back();
    }
}
