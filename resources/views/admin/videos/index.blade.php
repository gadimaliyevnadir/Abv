@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Video /</span> All Videos</h4>
            <a href="{{ route('admin.videos.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Videolar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="video">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Video</th>
                                <th>Link</th>
                                <th>Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $key => $video)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img style="height:100px;width:120px;object-fit:contain" src="{{asset($video->backimage)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{ $video->link}}</td>
                                    <td style="display: flex;gap:10px;height:130px;align-items:center">
                                        <a href="{{ route('admin.videos.edit', $video->id) }}" style="font-size: 10px;height:30px"
                                            class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.videos.destroy', $video->id) }}">
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
        $('#video').DataTable();
        });
    </script>
    @endpush
@endsection
