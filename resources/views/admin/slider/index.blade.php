@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Slayder /</span> All Sliders</h4>
            <a href="{{ route('admin.slider.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Slayderlər</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="video">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>File</th>
                                <th>Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $key => $slider)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    @if ($slider->type == 'image')
                                        <td>
                                            <img style="height:100px;width:120px;object-fit:contain"
                                                src="{{ asset($slider->image) }}" class="img-fluid mb-2" />
                                        </td>
                                    @endif
                                    @if ($slider->type == 'video')
                                        <td>
                                            <video style="width: 100px;height:80px" id="video" loop="" playsinline=""
                                                autoplay="" muted="" controls="controls">
                                                <source style="height: 200px;object-fit:contain"
                                                    src="{{ asset($slider->image) }}" type="video/mp4">
                                            </video>
                                        </td>
                                    @endif
                                    <td style="display: flex;gap:10px;height:130px;align-items:center">
                                        <a href="{{ route('admin.slider.edit', $slider->id) }}"
                                            style="font-size: 10px;height:30px" class="btn btn-primary">Edit</a>
                                            @if (count($sliders)>1)
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.slider.destroy', $slider->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                            @endif
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
            $(document).ready(function() {
                $('#video').DataTable();
            });
        </script>
    @endpush
@endsection
