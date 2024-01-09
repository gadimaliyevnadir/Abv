@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Foto /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Fotolar</h5>
                    <div class="nav-align-top mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile" style="margin-left: 10px">Şəkillər</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{ old('image[]') }}" multiple name="image[]"
                                            class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                            file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
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

        <!-- Tabs -->
    </div>
@endsection
