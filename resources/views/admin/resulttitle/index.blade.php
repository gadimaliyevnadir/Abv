@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nəticə Başlıqı /</span> All Result Title</h4>
            <div class="card">
                <h5 class="card-header">Bütün Nəticə Başlıqları</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Başlıq</th>
                                <th>Mündəricat</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $resulttitle->id }}</td>
                                <td>{{ $resulttitle->title }}</td>
                                <td>{{ substr($resulttitle->desc,0,100) }}</td>
                                <td style="display: flex;gap:10px">
                                    <a href="{{ route('admin.resulttitle.edit', $resulttitle->id) }}"
                                        style="font-size: 11px;width:80px" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
