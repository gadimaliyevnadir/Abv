@extends('admin.layout.app')


@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                                <img src="/assets/img/logo.png" style="width:155px" />
                        </div>

                        <form enctype="multipart/form-data" class="mb-3" action="{{ route('admin.users.store') }}"
                            method="POST">
                            @csrf
                            @include('admin.layout.includes.alert-message')
                            <div class="card-body">
                            <div class="mb-3 form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" value="{{old('name')}}" id="username" name="name"
                                    placeholder="Enter your username" />
                            </div>
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" value="{{old('email')}}" class="form-control " id="email" name="email"
                                    placeholder="Enter your email" />
                            </div>
                            <div class="mb-3 form-group form-password-toggle">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" value="{{old('password')}}" id="password" class="form-control" name="password"
                                        placeholder="Password"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
@endsection
