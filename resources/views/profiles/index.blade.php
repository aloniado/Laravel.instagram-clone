@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ftlv2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/85257792_604801580372292_520740213132099584_n.jpg?_nc_ht=instagram.ftlv2-1.fna.fbcdn.net&_nc_ohc=nr5gSYMT5fgAX-5uGG4&oh=bc5d772a0a6cb7792178001c3e00f3c9&oe=5EB6769D" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/post/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>TBD</strong> followers</div>
                <div class="pr-5"><strong>TBD</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection
