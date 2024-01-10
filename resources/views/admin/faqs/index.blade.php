@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Faq /</span> All Faqs</h4>
            <a href="{{ route('admin.faqs.create') }}" class="btn btn-success"
                style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <div class="card">
                <h5 class="card-header">Bütün Faqlar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="mytable" style="padding: 30px">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Başlıq</th>
                                <th>Mündəricat</th>
                                <th>Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $key => $faq)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{!! substr($faq->title, 0, 40) !!}</td>
                                    <td>{!! substr($faq->desc, 0, 50) !!}</td>
                                    <td style="display: flex;gap:10px">
                                        <a href="{{ route('admin.faqs.edit', $faq->id) }}" style="font-size: 11px;height:39px"
                                            class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.faqs.destroy', $faq->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" style="font-size: 10px;height:39px">Delete</button>
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
        $('#mytable').DataTable();
        });
    </script>
    @endpush
@endsection
