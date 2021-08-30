@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead">
        <img src="website/img/template.png" alt="background" class="background_img">
    </header>

    <!-- Main Content -->
    <div class="container" style="margin-top: 5vh;">
        <div class="row">
            <div class="row mx-auto">
                @foreach($posts as $post)
                    <div class="post-preview col-sm">
                        <a href="{{ url('post/' . $post->slug) }}">
                            <img src="{{ $post->thumbnail }}" alt="thumbnail" width="100%">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h4 class="post-subtitle">
                                {{ $post->sub_title }}
                            </h4>
                        </a>
                        <p class="post-meta">Dodane przez
                            <a href="#">{{ $post->user->name }}</a>
                            dnia {{ date('d-m-Y', strtotime($post->created_at)) }}
                        </p>
                        <div class="crop">{!!$post->details!!}</div>
                    </div>
                    <hr>
            @endforeach

            <!-- Pager -->
                <div class="clearfix mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection()