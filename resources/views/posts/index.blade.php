@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
        <div class="align-items-center">
            <div class="row">
                <div class="col-4 offset-4">
                    <div class="d-flex align-items-center">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100 pr-2" style="max-width:50px;" alt="">
                        <div>
                        <div class="font-weight-bold ">•<a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}} </a></div>
                        <span>{{$post->caption}}
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4 pt-2 pb-5">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100 " style="max-width:100%;">
                </div>
            </div>
        </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
             {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
