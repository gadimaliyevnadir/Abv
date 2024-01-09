@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Müştəri Şəkilləri /</span> All Client Photos</h4>
            <a href="{{ route('admin.clients.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Müştəri Şəkilləri</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="client">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Müştəri Şəkilləri</th>
                                <th>Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $key => $client)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img style="height:100px;width:120px;object-fit:contain"
                                            src="{{ asset($client->image) }}" class="img-fluid mb-2" />
                                    </td>
                                    <td style="display: flex;gap:10px;height:130px;align-items:center">
                                        <a href="{{ route('admin.clients.edit', $client->id) }}"
                                            style="font-size: 9px;height:30px" class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.clients.destroy', $client->id) }}">
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
        $('#client').DataTable();
        });
    </script>
    @endpush
@endsection
