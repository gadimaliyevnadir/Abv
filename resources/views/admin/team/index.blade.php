@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Komanda Üzvləri/</span> All Teams</h4>
                        <a href="{{ route('admin.team.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Komanda Üzvləri</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Şəkli</th>
                                <th>Üzvün Adı</th>
                                <th>Vəzifəsi</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $key => $team)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img style="height:80px;width:120px;object-fit:contain"
                                            src="{{ asset($team->image) }}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{ $team->title }}</td>
                                    <td>{{ $team->subtitle }}</td>
                                    <td style="display: flex;gap:10px;align-items:center;height:110px">
                                        <a href="{{ route('admin.team.edit', $team->id) }}"
                                            style="font-size: 11px;width:80px;height:30px" class="btn btn-primary">Edit</a>
                                            <form method="post" class="delete-from"
                                            action="{{ route('admin.team.destroy', $team->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
