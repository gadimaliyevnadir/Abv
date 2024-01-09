@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Haqqımızda /</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Haqqımızda Məlumat</h5>
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
                                            <label class="mb-1" for="title">Başlıq</label>
                                            <input class="form-control" type="text" name="title[{{ $key }}]"
                                                id="title"
                                                value="{{ old('title' . $key, $about->getTranslation('title', $key)) }}"
                                                placeholder="Başlıqı Daxil Edin">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1" for="desc">Mündəricat</label>
                                            <textarea placeholder="Mündəricat Daxil Edin" id="editor" name="desc[{{ $key }}]" class="mt-3 mb-3 form-control">{{ old('desc' . $key, $about->getTranslation('desc', $key)) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group" style="background-color: white">
                            <label for="exampleInputFile">Image 1</label>
                            <div>
                                <img class="img-fluid" style="height:100px;width:130px" src="{{ asset($about->image1) }}">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" value="{{ old('image1', $about->image1) }}" name="image1"
                                        class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="background-color: white">
                            <label for="exampleInputFile">Image 2</label>
                             <div>
                                <img class="img-fluid" style="height:100px;width:130px" src="{{ asset($about->image2) }}">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" value="{{ old('image2', $about->image2) }}" name="image2"
                                        class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="background-color: white">
                            <label for="exampleInputFile">Image 3</label>
                             <div>
                                <img class="img-fluid" style="height:100px;width:130px" src="{{ asset($about->image3) }}">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" value="{{ old('image3', $about->image3) }}" name="image3"
                                        class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
    @push('scripts')
        <script>
            const editors = document.querySelectorAll('#editor');
            editors.forEach(item => {
                if (!item.classList.contains('about_service')) {
                    ClassicEditor
                        .create(item)
                        .then(newEditor => {
                            console.log(newEditor)
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }
            })
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    @endpush
@endsection
