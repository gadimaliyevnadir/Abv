@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nəticə Başlıqı /</span> Düzənləmə</h4>

        <div class="row">
            <form action="{{ route('admin.resulttitle.update',$resulttitle->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Nəticə Mündəricatı</h5>
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
                                                id="title" value="{{ old('title' . $key, $resulttitle->getTranslation('title', $key)) }}" placeholder="Başlıq Yazın">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1" for="desc">Mündəricat</label>
                                            <textarea placeholder="Mündəricat Daxil Edin" id="desc" name="desc[{{ $key }}]"
                                                class="mt-3 mb-3 form-control">{{ old('desc' . $key, $resulttitle->getTranslation('desc', $key)) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
