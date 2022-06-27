@extends('layouts.app')

@section('content')
<div class="container d-flex">
    <div class="pb-4">
        @foreach($posts as $post)
        <div class="pb-4">
            <span class="fw-bold row col-6 offset-3">
                <div class="d-flex align-items-center">

                    <div>
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle" style="width: 50px; height: 50px">
                        </a>
                    </div>

                    <div class="ps-2">
                        <a href="/profile/{{$post->user->id}}" class="text-dark text-decoration-none">
                            <span>{{ $post->user->username }}</span>
                        </a>
                    </div>
                </div>
            </span>


            <div class="row pt-2">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-6 offset-3">
                    <p>
                        <a href="/profile/{{$post->user->id}}" class="text-dark text-decoration-none fw-bold">
                            <span>{{ $post->user->username }}</span>
                        </a>
                        <span> {{ $post->caption }} </span>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="justify-content-center">{{ $posts->links() }}</div>
            </div>
        </div>
    </div>



    <div>
        @foreach($posts as $post)
                <ol class="pb-2 d-flex align-items-center" type="a">
                    <a href="/profile/{{ $post->user->id }}" class="pe-2">
                        <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle" style="width: 50px; height: 50px">
                    </a>

                    <div>
                        {{ $post->user->username }}
                    </div>
                </ol>
        @endforeach
    </div>
</div>
@endsection
