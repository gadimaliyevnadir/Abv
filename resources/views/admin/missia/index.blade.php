@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Missiya/</span> All Missia</h4>
            <div class="card">
                <h5 class="card-header">Bütün Missiyalar</h5>
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
                            @foreach ($missias as $missia)
                            <tr>
                                <td>{{ $missia->id }}</td>
                                <td>{{ $missia->title }}</td>
                                <td>{!! substr($missia->desc, 0, 50) !!}</td>
                                <td style="display: flex;gap:10px">
                                    <a href="{{ route('admin.missia.edit', $missia->id) }}"
                                        style="font-size: 11px;width:60px;height:30px" class="btn btn-primary">Edit</a>
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
    </div>
    </div>
@endsection
