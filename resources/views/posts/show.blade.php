@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:50px;" alt="">
                    </div>
                    <div>
                        <h4 class="font-weight-bold"><a href="/profile/{{$post->user->id}}" class="text-dark pr-1">{{$post->user->username}}</a>
                            •<a href="#" class="pl-2">Follow</a>
                        </h4>

                    </div>
                </div>
                <hr>

                <p><span class="font-weight-bold "><a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}} </a>  </span> {{$post->caption}}</p>
            </div>
        </div>

    </div>
@endsection
