@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width:40px;">
                        </div>
                        <div class="d-flex">
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </div>
                            <div class="pl-3">{{ $post->caption }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>


    </div>
@endsection
