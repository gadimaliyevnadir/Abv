@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Komanda Üzvü/</span> Düzənləmə</h4>

        <div class="row">
            <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Komanda Üzvü</h5>
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
                                            <label class="mb-1" for="title">Üzvün Adı</label>
                                            <input class="form-control" type="text" name="title[{{ $key }}]" id="title"
                                                value="{{ old('title' . $key, $team->getTranslation('title', $key), $team->title) }}" placeholder="Adını Yazın">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1" for="desc">Mündəricat</label>
                                            <textarea placeholder="Enter Description" id="editor" name="desc[{{ $key }}]" class="mt-3 mb-3">{{ old('desc' . $key, $team->getTranslation('desc', $key)) }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1" for="subtitle">Vəzifəsi</label>
                                            <input class="form-control" type="text" name="subtitle[{{ $key }}]"
                                                id="subtitle"
                                                value="{{ old('subtitle' . $key, $team->getTranslation('subtitle', $key)) }}"
                                                placeholder="Vəzifə Daxil edin">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="card-body">
                                <!--<p>İkonlar üçün https://fontawesome.com saytına keçid edib baxa bilərsiniz </p>-->
                                <!--<div class="form-group">-->
                                <!--    <label for="link1">Icon Link 1</label>-->
                                <!--    <input type="text" name="link1" id="link1"-->
                                <!--        placeholder="Icon link-in Əlavə edin" value="{{ old('link1', $team->link1) }}"-->
                                <!--        class="form-control">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <label class="mb-1" for="class1">Icon Class 1</label>-->
                                <!--    <input class="form-control" type="text" name="class1" id="class1"-->
                                <!--        value="{{ old('class1', $team->class1) }}" placeholder="Icon Class-ın Əlavə edin">-->
                                <!--</div>-->
                                <div class="form-group">
                                    <label for="link2">Icon Link</label>
                                    <input type="text" name="link2" id="link2"
                                        placeholder="Icon link-in Əlavə edin" value="{{ old('link2', $team->link2) }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="mb-1" for="class2">Icon Class</label>
                                    <input class="form-control" type="text" name="class2" id="class2"
                                        value="{{ old('class2', $team->class2) }}" placeholder="Icon Class-ın Əlavə edin">
                                </div>
                                <!--<div class="form-group">-->
                                <!--    <label for="link3">Icon Link 3</label>-->
                                <!--    <input type="text" name="link3" id="link3"-->
                                <!--        placeholder="Icon link-in Əlavə edin" value="{{ old('link3', $team->link3) }}"-->
                                <!--        class="form-control">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <label class="mb-1" for="class3">Icon Class 3</label>-->
                                <!--    <input class="form-control" type="text" name="class3" id="class3"-->
                                <!--        value="{{ old('class3', $team->class3) }}"-->
                                <!--        placeholder="Icon Class-ın Əlavə edin">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <label for="link4">Icon Link 4</label>-->
                                <!--    <input type="text" name="link4" id="link4"-->
                                <!--        placeholder="Icon link-in Əlavə edin" value="{{ old('link4', $team->link4) }}"-->
                                <!--        class="form-control">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <label class="mb-1" for="class4">Icon Class 4</label>-->
                                <!--    <input class="form-control" type="text" name="class4" id="class4"-->
                                <!--        value="{{ old('class4', $team->class4) }}"-->
                                <!--        placeholder="Icon Class-ın Əlavə edin">-->
                                <!--</div>-->
                                <div class="form-group">
                                    <label for="exampleInputFile">Üzv Şəkli</label>
                                    <div>
                                        <img class="img-fluid" style="width: 150px;height:150px" src="{{ asset($team->image) }}">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" value="{{ old('image') }}" name="image"
                                                class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
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
