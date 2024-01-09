<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\CreateRequest;
use App\Http\Requests\Vacancy\UpdateRequest;
use App\Models\Vacancy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class VacancyController extends Controller
{

    public function index()
    {
        $vacancies=Vacancy::paginate(10);
        return view('admin.vacancy.index',compact('vacancies'));
    }

    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.vacancy.create',compact('locales'));
    }

    public function store(CreateRequest $request)
    {
       $data=$request->validated();
         Vacancy::create($data);
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
       return redirect()->route('admin.vacancy.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Vacancy $vacancy)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.vacancy.update',compact('vacancy','locales'));
    }

    public function update(UpdateRequest $request, Vacancy $vacancy)
    {
        $data=$request->validated();
        $vacancy->update($data);
        if($request){
            $vacancy->update([
                'date' => $request->date
            ]);
        };
        if ($vacancy) {
            flash()
                ->success('Sizin Məlumatlarınız Yeniləndi')
                ->flash();
        }
        return redirect()->route('admin.vacancy.index');
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->back();
    }
}
