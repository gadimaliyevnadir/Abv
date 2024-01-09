@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nəticə /</span> Düzənləmə</h4>

        <div class="row">
            <form action="{{ route('admin.result.update',$result->id) }}" method="POST">
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
                                            <label class="mb-1" for="title">Title</label>
                                            <input class="form-control" type="text" name="title[{{ $key }}]"
                                                id="title" value="{{ old('title' . $key, $result->getTranslation('title', $key)) }}" placeholder="Enter Title">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="card-body" style="background-color: white">
                            <div class="form-group">
                                <label class="mb-1" for="count">Sayı</label>
                                <input type="number" name="count" id="count" value="{{ old('count',$result->count) }}"
                                    class="form-control" placeholder="Ədədi Daxil Edin">
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

