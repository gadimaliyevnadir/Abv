<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialIcon\CreateRequest;
use App\Http\Requests\SocialIcon\UpdateRequest;
use App\Models\Socialicon;

class SocialIconController extends Controller
{

    public function index()
    {
        $socialicons=Socialicon::all();
        return view('admin.socialicons.index',compact('socialicons'));
    }

    public function create()
    {
        return view('admin.socialicons.create');
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Socialicon::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.socialicons.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Socialicon $socialicon)
    {
        return view('admin.socialicons.update',compact('socialicon'));
    }

    public function update(UpdateRequest $request, Socialicon $socialicon)
    {
        $data=$request->validated();
        $socialicon->update($data);
        if ($socialicon) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.socialicons.index');
    }

    public function destroy(Socialicon $socialicon)
    {
        $socialicon->delete();
        return redirect()->back();
    }
}
