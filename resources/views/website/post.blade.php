@extends('website.template.master')

@section('content')
<!-- Page Header -->
<header class="masthead">
    <div class="overlay" style="height: 5vh;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->sub_title }}</h2>
                    <span class="meta">Dodane przez
                        <a href="#">{{ $post->user->name }}</a>
                        dnia {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article style="margin-top: 5vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $post->details !!}
            </div>
        </div>
    </div>
</article>
@endsection()