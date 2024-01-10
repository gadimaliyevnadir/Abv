@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vendor Foto /</span> Düzənləmə</h4>

        <div class="row" style="background-color: rgb(249, 249, 249)">
            <form action="{{ route('admin.vendorss.update',$vendorss->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                @include('admin.layout.includes.alert-message')
                <div class="col-xl-12">
                    <h5 class="text-muted">Vendor Fotolar</h5>
                    <div class="nav-align-top mb-4">
                         <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Vendor Şəkli</label>
                                <div>
                                    <img class="img-fluid" style="width: 220px;height:150px" src="{{asset($vendorss->image)}}">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" value="{{old('image',$vendorss->image)}}" name="image" class="form-control" id="exampleInputFile">
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
    </div>
@endsection
