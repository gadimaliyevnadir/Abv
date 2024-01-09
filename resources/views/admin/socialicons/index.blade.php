@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sosyal Iconlar /</span> All Social Icons</h4>
            <a href="{{ route('admin.socialicons.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Sosyal Iconlar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Icon Klası</th>
                                <th>Link</th>
                                <th>Düzənləmələr</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socialicons as $key=> $socialicon)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$socialicon->class }}</td>
                                    <td>{{$socialicon->links}}</td>
                                    <td style="display: flex;gap:10px">
                                        <a href="{{ route('admin.socialicons.edit', $socialicon->id) }}" style="font-size: 11px;width:80px"
                                            class="btn btn-primary">Edit</a>
                                            <form method="post" class="delete-from"
                                            action="{{ route('admin.socialicons.destroy', $socialicon->id) }}">
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
