@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sosyal Icon /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.socialicons.store') }}" method="POST">
                @csrf
                @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Sosyal Icon</h5>
                    <div class="nav-align-top mb-4">
                        <div class="tab-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="class">Class</label>
                                    <input type="text" value="{{ old('class') }}" class="form-control" name="class"
                                        id="class" placeholder="Enter Class Name">
                                </div>
                                <div class="form-group">
                                    <label for="links">Link</label>
                                    <input type="text" value="{{ old('links') }}" class="form-control" name="links"
                                        id="links" placeholder="Enter Link">
                                </div>
                            </div>
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
