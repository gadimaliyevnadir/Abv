<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Crud;
use App\Http\Requests\Clients\CreateRequest;
use App\Http\Requests\Clients\UpdateRequest;
use App\Models\Client;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    protected $crud;

    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(CreateRequest $request)
    {
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $img = '/uploads/Photo/' . $imageName;
                $client = new Client([
                    'image' => $img,
                ]);
                $file->move(public_path('/uploads/Clients'), $imageName);
                $client->save();
            }
        }
        flash()->success('Sizin Məlumatlarınız Əlavə Edildi')->flash();
        return redirect()->route('admin.clients.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Client $client)
    {
        return view('admin.clients.update', compact('client'));
    }

    public function update(UpdateRequest $request, Client $client)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            File::delete($client->image);
            $data['image'] = $this->crud->common_image('Clients', $request, 'image');
        }
        $client->update($data);
        if ($client) {
            flash()->success('Sizin Məlumatlarınız Yeniləndi')->flash();
        }
        return redirect()->route('admin.clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->back();
    }
}

