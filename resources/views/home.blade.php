@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
           <img src="{{asset('/img/profile_img/profile_img3.jpg')}}" class="profile_img rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
           <div><h1>{{$user->username}}</h1></div>
           <div class="d-flex">
                <div class="pr-5"><strong class="pr-1">10</strong>posts</div>
                <div class="pr-5"><strong class="pr-1">30</strong>Followers</div>
                <div class="pr-5"><strong class="pr-1">10</strong>Following</div>
           </div>
           <div class="pt-5">
               <div><strong>Chris Dev.</strong></div>
               <div>Coding is game. I will love to play with you.</div>
               <div><a href="github.com/Chris-Miracle">github.com/Chris-Miracle</a></div>
           </div>
        </div>
    </div>
    {{-- Posts --}}
    <div class="row">
        <div class="col-6">
           <div><hr class="posts-line mb-1"></div>
        </div>
        <div class="col-6">
            <div><hr class="tags-line mb-1"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
           <div class="posts-text">
               <span class=""><h4 class="fas fa-table fa-1x">POSTS</h4></span>
            </div>
        </div>
        <div class="col-6  tags-text">
            <div><h4 class="fas fa-user fa-1x">TAGGED</h4></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="{{asset('/img/posts/post_pro1/post_one.jpg')}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="{{asset('/img/posts/post_pro1/post_two2.jpg')}}" class="w-100"  alt="">
        </div>
        <div class="col-4">
            <img src="{{asset('/img/posts/post_pro1/post_three.jpg')}}" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
