<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\CreateRequest;
use App\Http\Requests\Vendor\UpdateRequest;
use App\Models\Vendor;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;

class VendorController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $vendors = Vendor::all();
        return view('admin.vendorss.index', compact('vendors'));
    }

    public function create()
    {
        return view('admin.vendorss.create');
    }

    public function store(CreateRequest $request)
    {
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $img = '/uploads/Photo/' . $imageName;
                $vendor = new Vendor([
                    'image' => $img,
                ]);
                $file->move(public_path('/uploads/Vendor'), $imageName);
                $vendor->save();
            }
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.vendorss.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Vendor $vendorss)
    {
        return view('admin.vendorss.update', compact('vendorss'));
    }

    public function update(UpdateRequest $request, Vendor $vendor)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($vendor->image);
            $data['image'] = $this->crud->common_image('Vendors', $request, 'image');
        }
        $vendor->update($data);
        if ($vendor) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.vendorss.index');
    }

    public function destroy(Vendor $vendorss)
    {
        $vendorss->delete();
        return redirect()->back();
    }
}

