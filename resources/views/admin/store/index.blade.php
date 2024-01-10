@extends('admin.layout.app')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Mağazalar
                            </h3>
                            <a href="{{ route('admin.store.create') }}" class="btn btn-success"
                                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Sıra</th>
                                        <th>Mağaza Adı</th>
                                        <th>Mağaza Ünvanı</th>
                                        <th>Mail</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody style="overflow-wrap: anywhere;">
                                    @foreach ($stores as $store)
                                        <tr>
                                            <td>{{ $store->id }}</td>
                                            <td>{{ $store->title }}</td>
                                            <td>{{ $store->address }}</td>
                                            <td>{{ $store->email }}</td>
                                            <td style="display:flex;gap:10px;height:130px;align-items:center">
                                                <a href="{{ route('admin.store.edit', $store->id) }}"
                                                    style="font-size: 11.5px;width:70px;height:30px"
                                                    class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
