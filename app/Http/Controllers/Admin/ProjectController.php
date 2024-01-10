<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Project\CreateRequest;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Attribute;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProjectController extends Controller
{

    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $projects=Project::all();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        $attributes = Attribute::with('attributeOption')->get();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.project.create', compact('locales', 'attributes'));
    }

    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image'] = $this->crud->common_image('Projects', $request, 'image');
        $project= new Project([
            'title'=>$data['title'],
            'desc'=>$data['desc'],
            'image'=>$data['image'],
            'slug'=>$data['slug']
        ]);

        $create = $project->save();
        if ($create) {
            $project->attribute_options()->sync($request->attributeoption_id);
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.project.index');
    }

    public function show(string $id)
    {
        //
    }

    public function attributeedit($id)
    {
        $project = Project::with('attribute_options')->where('id', $id)->get();
        $attributes = Attribute::with('attributeOption')->get();
        return view('admin.attributeedit', compact('attributes', 'project'));
    }

    public function attributeupdate(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $update = $project->update();
        if ($update) {
            $project->attribute_options()->sync($request->attributeoption_id);
        }
        return redirect()->route('admin.project.index');
    }

    public function edit(Project $project)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.project.update',compact('project','locales'));
    }

    public function update(UpdateRequest $request, Project $project)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($project->image);
            $data['image'] = $this->crud->common_image('Photo', $request, 'image');
            $project->image = $data['image'];
            $project->save();
        }
        $project->update([
            'title'=>$data['title'],
            'desc'=>$data['desc'],
            'slug'=>$data['slug']
        ]);
        if ($project) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.project.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back();
    }
}
