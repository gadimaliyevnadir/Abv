@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bloq Teqlər /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.blogtags.store') }}" method="POST">
                @csrf
                <div class="col-xl-12">
                    <h5 class="text-muted">BLoq Teqlər</h5>
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($locales as $key => $locale)
                                <li class="nav-item">
                                    <button type="button" class="nav-link { $loop->first ? 'active' : '' }}" role="tab"
                                        data-bs-toggle="tab" data-bs-target="#{{ $key }}"
                                        aria-controls="navs-top-home" aria-selected="true">
                                        {{ strtoupper($key) }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @include('admin.layout.includes.alert-message')
                            @foreach ($locales as $key => $locale)
                                <div class="tab-pane fade {{ $loop->first ? 'active show' : '' }}" id="{{ $key }}"
                                    role="tabpanel">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Teqin Adı</label>
                                            <input type="text" value="{{ old('name' . $key) }}" class="form-control"
                                                name="name[{{ $key }}]" id="exampleInputEmail1"
                                                placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Slug</label>
                                            <input type="text" value="{{ old('slug' . $key) }}" class="form-control"
                                                name="slug[{{ $key }}]" id="exampleInputEmail1"
                                                placeholder="Enter Slug">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

