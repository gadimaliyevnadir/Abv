@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bloq Teqlər/</span> All Tags</h4>
            <a href="{{ route('admin.blogtags.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Bloq Teqlər</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Teqin Adı</th>
                                <th>Sluq</th>
                                <th>Düzənləmələr</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $key => $tag)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td style="display: flex;gap:10px">
                                        <a href="{{ route('admin.blogtags.edit', $tag->id) }}"
                                            style="font-size: 11px;width:80px" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.blogtags.destroy', $tag->id) }}">
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
            <!--/ Basic Bootstrap Table -->

        </div>
        <!-- / Content -->
    </div>
    <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>

    </div>
    <!-- / Layout wrapper -->
@endsection
