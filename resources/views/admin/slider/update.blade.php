@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Slayder /</span> Düzənləmə</h4>

        <div class="row">
            <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Slayderlər</h5>
                    <div class="nav-align-top mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Slayder Faylı</label>
                                @if ($slider->type == 'image')
                                    <div>
                                        <img class="img-fluid" style="width: 150px;height:150px"
                                            src="{{ asset($slider->image) }}">
                                    </div>
                                @endif
                                @if ($slider->type == 'video')
                                    <div>
                                        <video style="width: 100px;height:100px" id="video" loop="" playsinline=""
                                            autoplay="" muted="" controls="controls">
                                            <source style="height: 200px;object-fit:contain"
                                                src="{{ asset($slider->image) }}" type="video/mp4">
                                        </video>
                                    </div>
                                @endif
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{ old('image', $slider->image) }}" name="image"
                                            class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
