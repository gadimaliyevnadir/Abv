@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mağazalarımız /</span> Tənzimləmə</h4>

        <div class="row">
            <form action="{{ route('admin.store.update',$store->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Mağazalarımız</h5>
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
                                            <label class="mb-1" for="title">Mağaza Adı</label>
                                            <input class="form-control" type="text" name="title[{{ $key }}]"
                                                id="title" value="{{ old('title' . $key, $store->getTranslation('title', $key)) }}" placeholder="Başlıq Yazın">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1" for="address">Mağaza Ünvanı</label>
                                            <input class="form-control" type="text" name="address[{{ $key }}]"
                                                id="address" value="{{ old('address' . $key, $store->getTranslation('address', $key)) }}"
                                                placeholder="Mağaza Ünvanı">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-body" style="background-color: white">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email">Mail</label>
                                <input type="email" value="{{ old('email',$store->email) }}" class="form-control" name="email"
                                    id="email" placeholder="Mail Ünvanı Daxil Edin">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="text" value="{{ old('phone',$store->phone) }}" class="form-control" name="phone"
                                    id="phone" placeholder="Əlaqə Nömrəsi Qeyd Edin">
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="maplink">Xəritə linki</label>
                                <textarea placeholder="Xəritə Linki Daxil edin" id="maplink" name="maplink" class="mt-3 mb-3 form-control">{{ old('maplink',$store->maplink) }}</textarea>
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

