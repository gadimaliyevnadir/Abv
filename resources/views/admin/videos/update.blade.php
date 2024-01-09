@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Video /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.videos.update',$video->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Videolar</h5>
                    <div class="nav-align-top mb-4">
                         <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Videonun Arxa Şəkli</label>
                                <div>
                                    <img class="img-fluid" style="width: 150px;height:150px" src="{{asset($video->backimage)}}">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{old('backimage',$video->backimage)}}" name="backimage" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                               <label for="link">Youtube Link</label>
                               <input type="text" name="link" id="link" placeholder="Youtube Linkin Daxil Edin" value="{{old('link',$video->link)}}" class="form-control">
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
