@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row; d-flex">
        <div class="col-3; p-5">
            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-lg-baseline">

                <div class="d-flex align-items-center pb-3">
                    <div class="h4"> {{$post->user->username}} </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
       @foreach($user->posts as $post)
           <div class="col-4 pb-4">
               <a href="/p/{{ $post->id }}">
                   <img src="/storage/{{ $post->image }}" class="w-100">
               </a>
           </div>
        @endforeach
    </div>

</div>
@endsection
