@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bloqlar/</span> All Blogs</h4>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Bloqlar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="blog">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Şəkil</th>
                                <th>Başlıq</th>
                                <th>Mündəricat</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img style="height:80px;width:120px;object-fit:contain"
                                            src="{{ asset($blog->image) }}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{substr($blog->desc,0,50)}}</td>
                                    <td style="display: flex;gap:10px;align-items:center;height:110px">
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                            style="font-size: 11px;width:80px;height:30px" class="btn btn-primary">Edit</a>
                                            <form method="post" class="delete-from"
                                            action="{{ route('admin.blogs.destroy', $blog->id) }}">
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
        @push('scripts')
    <script>
        $(document).ready(function(){
        $('#blog').DataTable();
        });
    </script>
    @endpush
@endsection
