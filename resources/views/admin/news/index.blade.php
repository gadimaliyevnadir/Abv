@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Xəbərlər/</span> All News</h4>
                        <a href="{{ route('admin.news.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Xəbərlər</h5>
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
                            @foreach ($news as $key => $news)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img style="height:80px;width:100px;object-fit:contain"
                                            src="{{ asset($news->image) }}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{substr($news->desc,0,50)}}</td>
                                    <td style="display: flex;gap:10px;align-items:center;height:110px">
                                        <a href="{{ route('admin.news.edit', $news->id) }}"
                                            style="font-size: 11px;width:80px;height:30px" class="btn btn-primary">Edit</a>
                                            <form method="post" class="delete-from"
                                            action="{{ route('admin.news.destroy', $news->id) }}">
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
