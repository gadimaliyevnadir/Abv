@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Atribut Option/</span> Yarat</h4>

        <div class="row">
            <form action="{{ route('admin.attributeoption.store',$attribute->id) }}" method="POST">
                @csrf
                <div class="col-xl-12">
                    <h5 class="text-muted">Atribut Option</h5>
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
                                            <label class="mb-1" for="name">Atributun Adı</label>
                                                <input type="hidden" name="attribute_id" value="{{ $attribute->id }}">
                                                <input class="form-control" id="name" type="text"
                                                    name="name[{{ $key }}]" disabled
                                                    value="{{ old('name' . $key, $attribute->getTranslation('name', $key)) }}">
                                            <label class="mb-1" for="name">Atribut Option Adı</label>
                                            <input class="form-control" id="name" type="text"
                                                name="name[{{ $key }}]" placeholder="Enter Name"
                                                value="{{ old('name' . $key) }}">
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
