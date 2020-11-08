@extends('layout.common')
@section('title', '名人列伝')
@section('content')
<div class="mainimg">
    <img src="img/mainimg.jpg" alt="メイン画像">
</div>
<section style="padding: 30px 0px;">
    <div class="container">
        <a class="btn btn-primary" href="{{route('masters.create')}}">
            <h2 class="catch">人 物 新 規 作 成</h2>
        </a>
        <div class="row">
            @foreach($masters as $master)
            <div class="col span-4">
                <figure>
                    <figcaption>{{ $master->name }}</figcaption>
                </figure>
                <a href="">{{ $master->career }}</a>
                <!-- <img src="img/catch.jpg" alt="画像"> -->
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection('content')