@extends('admin.layout.app')


@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Meta Teq /</span> All Meta Tags</h4>
            <div class="card">
                <h5 class="card-header">Bütün Meta Teqlər</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">Sıra</th>
                                <th>HOME_META</th>
                                <th>ABOUT_META</th>
                                <th>SERVICE_META</th>
                                <th>PROJECT_META</th>
                                <th>BLOG_META</th>
                                <th>Düzənləmə</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $metatag->id }}</td>
                                <td>{{ $metatag->home_title }}</td>
                                <td>{{ $metatag->about_title }}</td>
                                <td>{{ $metatag->service_title }}</td>
                                <td>{{ $metatag->project_title }}</td>
                                <td>{{ $metatag->blog_title }}</td>
                                <td style="display: flex;gap:10px">
                                    <a href="{{ route('admin.metatags.edit', $metatag->id) }}" style="font-size:11px"
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
