<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Team\CreateRequest;
use App\Http\Requests\Team\UpdateRequest;
use App\Models\Team;
use App\Helpers\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TeamController extends Controller
{
    protected $crud;
    public function __construct(Crud $crud){
        $this->crud = $crud;
    }

    public function index()
    {
        $teams=Team::all();
        return view('admin.team.index',compact('teams'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.team.create', compact('locales'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image'] = $this->crud->common_image('Teams', $request, 'image');
        Team::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.team.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Team $team)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.team.update', compact('locales','team'));
    }

    public function update(UpdateRequest $request, Team $team)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($team->image);
            $data['image'] = $this->crud->common_image('Teams', $request, 'image');
            $team->save();
        }
        $team->update($data);
        if ($team) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.team.index');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back();
    }
}
