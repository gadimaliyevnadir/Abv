@extends('admin.layout.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Meta Teq /</span> Yarat</h4>

            <div class="row">
                 <form action="{{ route('admin.metatags.update',$metatag->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="col-xl-12">
                    <h5 class="text-muted">Meta Teqlər</h5>
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
                                            <label for="exampleInputEmail1">Home Meta Title</label>
                                            <input type="text" value="{{ old('home_title' . $key,$metatag->getTranslation('home_title', $key)) }}"
                                                class="form-control" name="home_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Home Meta Description</label>
                                            <input type="text" value="{{ old('home_desc' . $key,$metatag->getTranslation('home_desc', $key)) }}" class="form-control"
                                                name="home_desc[{{ $key }}]" id="exampleInputEmail1"
                                                placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Home Meta Keywords</label>
                                            <input type="text" value="{{ old('home_keywords' . $key,$metatag->getTranslation('home_keywords', $key)) }}"
                                                class="form-control" name="home_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">About Meta Title</label>
                                            <input type="text" value="{{ old('about_title' . $key,$metatag->getTranslation('about_title', $key)) }}"
                                                class="form-control" name="about_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">About Meta Description</label>
                                            <input type="text" value="{{ old('about_desc' . $key,$metatag->getTranslation('about_desc', $key)) }}"
                                                class="form-control" name="about_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">About Meta Keywords</label>
                                            <input type="text" value="{{ old('about_keywords' . $key,$metatag->getTranslation('about_keywords', $key)) }}"
                                                class="form-control" name="about_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Service Meta Title</label>
                                            <input type="text" value="{{ old('service_title' . $key,$metatag->getTranslation('service_title', $key)) }}"
                                                class="form-control" name="service_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Service Meta Description</label>
                                            <input type="text" value="{{ old('service_desc' . $key,$metatag->getTranslation('service_desc', $key)) }}"
                                                class="form-control" name="service_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Service Meta Keywords</label>
                                            <input type="text" value="{{ old('service_keywords' . $key,$metatag->getTranslation('service_keywords', $key)) }}"
                                                class="form-control" name="service_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">News Meta Title</label>
                                            <input type="text" value="{{ old('news_title' . $key,$metatag->getTranslation('news_title', $key)) }}"
                                                class="form-control" name="news_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">News Meta Description</label>
                                            <input type="text" value="{{ old('news_desc' . $key,$metatag->getTranslation('news_desc', $key)) }}"
                                                class="form-control" name="news_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">News Meta Keywords</label>
                                            <input type="text" value="{{ old('news_keywords' . $key,$metatag->getTranslation('news_keywords', $key)) }}"
                                                class="form-control" name="news_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Project Meta Title</label>
                                            <input type="text" value="{{ old('project_title' . $key,$metatag->getTranslation('project_title', $key)) }}"
                                                class="form-control" name="project_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Project Meta Description</label>
                                            <input type="text" value="{{ old('project_desc' . $key,$metatag->getTranslation('project_desc', $key)) }}"
                                                class="form-control" name="project_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Project Meta Keywords</label>
                                            <input type="text" value="{{ old('project_keywords' . $key,$metatag->getTranslation('project_keywords', $key)) }}"
                                                class="form-control" name="project_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Team Meta Title</label>
                                            <input type="text" value="{{ old('team_title' . $key,$metatag->getTranslation('team_title', $key)) }}"
                                                class="form-control" name="team_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Team Meta Description</label>
                                            <input type="text" value="{{ old('team_desc' . $key,$metatag->getTranslation('team_desc', $key)) }}"
                                                class="form-control" name="team_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Team Meta Keywords</label>
                                            <input type="text" value="{{ old('team_keywords' . $key,$metatag->getTranslation('team_keywords', $key)) }}"
                                                class="form-control" name="team_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Photos Meta Title</label>
                                            <input type="text" value="{{ old('photos_title' . $key,$metatag->getTranslation('photos_title', $key)) }}"
                                                class="form-control" name="photos_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Photos Meta Description</label>
                                            <input type="text" value="{{ old('photos_desc' . $key,$metatag->getTranslation('photos_desc', $key)) }}"
                                                class="form-control" name="photos_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Photos Meta Keywords</label>
                                            <input type="text" value="{{ old('photos_keywords' . $key,$metatag->getTranslation('photos_keywords', $key)) }}"
                                                class="form-control" name="photos_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Videos Meta Title</label>
                                            <input type="text" value="{{ old('videos_title' . $key,$metatag->getTranslation('videos_title', $key)) }}"
                                                class="form-control" name="videos_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Videos Meta Description</label>
                                            <input type="text" value="{{ old('videos_desc' . $key,$metatag->getTranslation('videos_desc', $key)) }}"
                                                class="form-control" name="videos_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Videos Meta Keywords</label>
                                            <input type="text" value="{{ old('videos_keywords' . $key,$metatag->getTranslation('videos_keywords', $key)) }}"
                                                class="form-control" name="videos_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Faq Meta Title</label>
                                            <input type="text" value="{{ old('faq_title' . $key,$metatag->getTranslation('faq_title', $key)) }}"
                                                class="form-control" name="faq_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Faq Meta Description</label>
                                            <input type="text" value="{{ old('faq_desc' . $key,$metatag->getTranslation('faq_desc', $key)) }}"
                                                class="form-control" name="faq_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Faq Meta Keywords</label>
                                            <input type="text" value="{{ old('faq_keywords' . $key,$metatag->getTranslation('faq_keywords', $key)) }}"
                                                class="form-control" name="faq_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Blog Meta Title</label>
                                            <input type="text" value="{{ old('blog_title' . $key,$metatag->getTranslation('blog_title', $key)) }}"
                                                class="form-control" name="blog_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Blog Meta Description</label>
                                            <input type="text" value="{{ old('blog_desc' . $key,$metatag->getTranslation('blog_desc', $key)) }}"
                                                class="form-control" name="blog_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Blog Meta Keywords</label>
                                            <input type="text" value="{{ old('blog_keywords' . $key,$metatag->getTranslation('blog_keywords', $key)) }}"
                                                class="form-control" name="blog_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Vacancy Meta Title</label>
                                            <input type="text" value="{{ old('vacancy_title' . $key,$metatag->getTranslation('vacancy_title', $key)) }}"
                                                class="form-control" name="vacancy_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Vacancy Meta Description</label>
                                            <input type="text" value="{{ old('vacancy_desc' . $key,$metatag->getTranslation('vacancy_desc', $key)) }}"
                                                class="form-control" name="vacancy_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Vacancy Meta Keywords</label>
                                            <input type="text" value="{{ old('vacancy_keywords' . $key, $metatag->getTranslation('vacancy_keywords', $key)) }}"
                                                class="form-control" name="vacancy_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Contact Meta Title</label>
                                            <input type="text" value="{{ old('contact_title' . $key, $metatag->getTranslation('contact_title', $key)) }}"
                                                class="form-control" name="contact_title[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Title">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Contact Meta Description</label>
                                            <input type="text" value="{{ old('contact_desc' . $key, $metatag->getTranslation('contact_desc', $key)) }}"
                                                class="form-control" name="contact_desc[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Description">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1">Contact Meta Keywords</label>
                                            <input type="text" value="{{ old('contact_keywords' . $key, $metatag->getTranslation('contact_keywords', $key)) }}"
                                                class="form-control" name="contact_keywords[{{ $key }}]"
                                                id="exampleInputEmail1" placeholder="Enter Meta Keywords">
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

        <!-- Tabs -->
    </div>
@endsection

