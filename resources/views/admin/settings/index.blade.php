@extends('admin.layout.app')

@section('content')
<section class="content">
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Ayarlar
                        </h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sıra</th>
                                    <th>Logo</th>
                                    <th>Başlıq</th>
                                    <th>Mündəricat</th>
                                    <th>Mail</th>
                                    <th>Adres</th>
                                    <th>Əməliyyatlar</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-wrap: anywhere;">
                                <tr>
                                    <td>{{$setting->id}}</td>
                                    <td style="width: 10%;">
                                        <img style="height: 100px;object-fit:contain" src="{{asset($setting->image)}}" class="img-fluid mb-2" />
                                    </td>
                                    <td>{{$setting->title}}</td>
                                    <td>{!!substr($setting->desc ,0,41)!!}</td>
                                    <td>{{$setting->email}}</td>
                                    <td>{!!substr($setting->address ,0,41)!!}</td>
                                    <td style="display:flex;gap:10px;height:130px;align-items:center">
                                        <a href="{{route('admin.settings.edit',$setting->id)}}" style="font-size: 11.5px;width:70px;height:30px" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
