@extends('website.template.master')

@section('content')
<!-- Main Content -->
<div class="container" style="margin-top: 15vh;">
    <div class="row">
        <div class="col-lg-8 col-md-8 mx-auto">
            <h1>Spis treści</h1>
            <form id="search-post">
                <input class="form-control" type="text" placeholder="Wyszukaj temat" aria-label="Search" style="margin-bottom: 5%;">
            </form>
            <ul class="post-list">
            @foreach($posts as $post)
            <li class="post-preview">
                <a href="{{ url('post/' . $post->slug) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                </a>
            </li>
            <hr>
            @endforeach
            </ul>
        </div>
    </div>
</div>
<script src="/js/search.js"></script>
@endsection()