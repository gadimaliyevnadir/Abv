<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\CreateRequest;
use App\Http\Requests\Setting\UpdateRequest;
use App\Models\Setting;
use App\Helpers\Crud;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SettingController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $setting=Setting::firstOrFail();
        return view('admin.settings.index',compact('setting'));
    }
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.settings.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->crud->common_image('settings', $request, 'image');
        Setting::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.settings.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Setting $setting)
    {
        $locales = LaravelLocalization::getSupportedLocales();
       return view('admin.settings.update',compact('setting','locales'));
    }

    public function update(UpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            File::delete($setting->image);
            $data['image'] = $this->crud->common_image('settings', $request, 'image');
        }
        $setting->update($data);
        if($setting){
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.settings.index');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->back();
    }
}
