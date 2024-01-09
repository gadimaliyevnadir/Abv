@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vakansiya /</span> All Vacancy</h4>
            <a href="{{route('admin.vacancy.create')}}" class="btn btn-success"  style="margin-bottom: 15px;color:rgb(2, 100, 0);background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%,
                 rgb(255, 214, 214) 67.1%);">Yaratmaq</a>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Bütün Vakansiyalar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Başlıq</th>
                                <th>Mündəricat</th>
                                <th>Son Müraciət Tarixi</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vacancies as $key=> $vacancy)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $vacancy->title }}</td>
                                    <td>{!! substr($vacancy->desc, 0, 30) !!}</td>
                                    <td>{{strftime('%d %B %Y',strtotime($vacancy->date))}}</td>
                                    <td style="display: flex;gap:10px;height:60px;align-items:center">
                                        <a href="{{ route('admin.vacancy.edit', $vacancy->id) }}" style="font-size: 9px;height:30px"
                                            class="btn btn-primary">Edit</a>
                                        <form method="post" class="delete-from"
                                            action="{{ route('admin.vacancy.destroy', $vacancy->id) }}">
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
