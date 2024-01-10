@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bloq/</span> Düzənləmə</h4>

        <div class="row">
            <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Bloq</h5>
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
                                            <label class="mb-1">Bloq Başlıq</label>
                                            <input type="text" placeholder="Bloq Başlıqı Yazın"
                                                name="title[{{ $key }}]"
                                                value="{{ old('title' . $key, $blog->getTranslation('title', $key)) }}"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Mündəricat</label>
                                            <textarea placeholder="Mündəricat Yazın" id="editor" class="form-control" name="desc[{{ $key }}]" class="mt-3 mb-3">{{ old('desc' . $key, $blog->getTranslation('desc', $key)) }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="mb-1">Slug</label>
                                            <input type="text"
                                                value="{{ old('slug' . $key, $blog->getTranslation('slug', $key)) }}"
                                                class="form-control" name="slug[{{ $key }}]" id="slug"
                                                placeholder="Slug Daxil Edin">
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="select2">Teqlər</label>
                                    <select id="select2" class="js-example-basic-multiple form-control" name="tag_id[]"
                                        multiple="multiple">
                                        @foreach ($tags as $tag)
                                            <option
                                                {{ in_array($tag->id,optional($blog->tags)->pluck('id')->all() ?? [])? 'selected': '' }}
                                                value="{{ $tag->id }}">
                                                {{ $tag->getTranslation('name', $key) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bloqun Şəkli</label>
                                    <div>
                                        <img class="img-fluid" style="height:100px"
                                            src="{{ asset($blog->image) }}">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" value="{{ old('image') }}" name="image"
                                                class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Şəkil Seç</label>
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
        <script src="{{ asset('/admin/assets/vendor/select2/js/select2.full.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#select2').select2();
            });
        </script>
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
