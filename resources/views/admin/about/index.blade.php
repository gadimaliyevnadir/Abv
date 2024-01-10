@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Haqqımızda /</span> All About</h4>
            <div class="card">
                <h5 class="card-header">Haqqımızda Məlumatlar</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>İmage 1</th>
                                <th>İmage 2</th>
                                <th>İmage 3</th>
                                <th>Başlıq</th>
                                <th>Mündəricat</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>
                                        <img style="height:50px;width:100px;object-fit:contain" src="{{asset($about->image1)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>
                                        <img style="height:50px;width:100px;object-fit:contain" src="{{asset($about->image2)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>
                                        <img style="height:50px;width:100px;object-fit:contain" src="{{asset($about->image3)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{ $about->title }}</td>
                                    <td>{!! substr($about->desc, 0, 40) !!}</td>
                                    <td style="display: flex;gap:10px;;align-items:center;height:89px">
                                        <a href="{{ route('admin.about.edit', $about->id) }}" style="font-size: 11.5px;width:60px;height:30px"
                                            class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
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
