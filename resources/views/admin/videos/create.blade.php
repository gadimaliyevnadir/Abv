@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Video /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Videolar</h5>
                    <div class="nav-align-top mb-4">
                         <div class="card-body">
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{old('backimage')}}" name="backimage" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                               <label for="link">Youtube Link</label>
                               <input type="text" name="link" id="link" placeholder="Youtube Linkin Daxil Edin" value="{{old('link')}}" class="form-control">
                            </div>
                            <hr>
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
