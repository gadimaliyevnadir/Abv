@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Həllərin Üst Kategoriyası /</span> All Solutions Category</h4>
            <a href="{{route('admin.solutioncategory.create')}}" class="btn btn-success"  style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Bütün Həllərin Üst Kategoriyası</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="solutioncategory">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Həll Üst Kateqoriya Şəkili</th>
                                <th>Başlıq</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solutioncategories as $key=> $solutioncategory)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                     <td>
                                        <img style="height:80px;width:120px;object-fit:contain"
                                            src="{{$solutioncategory->image}}"/>
                                    </td>
                                    <td>{{ $solutioncategory->title }}</td>
                                    <td style="display: flex;gap:10px;height:102px;align-items:center">
                                        <a href="{{ route('admin.solutioncategory.edit', $solutioncategory->id) }}" style="font-size: 9px;height:30px"
                                            class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.solutioncategory.destroy', $solutioncategory->id) }}">
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
        $('#solutioncategory').DataTable();
        });
    </script>
    @endpush
@endsection
