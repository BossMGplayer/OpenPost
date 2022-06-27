@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">

       <div class="col-8">
           <img src="/storage/{{ $post->image }}" class="w-100">
       </div>

       <div class="col-4">

           <div>

               <div class="d-flex align-items-center">
                   <div class="pe-3">
                       <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 45px">
                   </div>

                   <div class="fw-bold d-flex">
                       <a href="/profile/{{$post->user->id}}" class="text-dark text-decoration-none pt-1">
                           <span>{{ $post->user->username }}</span>
                       </a>

                       <a>
                           @cannot('update', $post->user->profile)
                               <follow-button user-id="{{ $post->user->id }}" follows="{{ $post->user->follows }}"></follow-button>
                           @endcannot
                       </a>
                   </div>
               </div>

               </div>

               <hr>

               <p>
                   <span class="fw-bold">
                       <a href="/profile/{{$post->user->id}}" class="text-dark text-decoration-none">
                           <span>{{ $post->user->username }}</span></a>
                   </span>
                   <span> {{ $post->caption }} </span>
               </p>

            </div>

       </div>

   </div>
</div>
@endsection
