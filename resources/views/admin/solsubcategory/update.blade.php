@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Həllər Alt Kategoriyası /</span> Düzənləmə</h4>
        <div class="row">
            <form action="{{ route('admin.solsubcategory.update',$solsubcategory->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Həllər Alt Kategoriyası</h5>
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
                                                value="{{ old('title' . $key,$solsubcategory->getTranslation('title', $key)) }}"
                                                placeholder="Enter Title">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-body">
                                     <div class="form-group">
                                            <label class="mb-1">Aid Kateqoriyanı Seçin</label>
                                            <select name="category_id" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option class="form-control" value="{{ $category->id }}" {{ $category->id == $selectedCategoryId ? 'selected' : '' }}>
                                                        {!! $category->title !!}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label class="mb-1" for="link">Link</label>
                                        <input class="form-control" type="text" name="link" id="link"
                                            value="{{ old('link',$solsubcategory->link) }}" placeholder="Link Daxil Edin">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Həll Alt Kateqoriya Şəkili</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" value="{{ old('image',$solsubcategory->image) }}" name="image"
                                                    class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
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
@endsection
