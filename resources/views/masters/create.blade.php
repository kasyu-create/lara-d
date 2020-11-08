@extends('layout.common')
@section('content')
<div class="container my-4">
  <div class="border p-4">
    <h5 class="mb-4">
      人物紹介の新規作成
    </h5>

    @if ($errors->any())
    <div>
      <ul class="alert alert-danger">
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    {!!Form::open(['route'=>'masters.store'])!!}
    <div class="form-group">
      {!!Form::label('image_file','画像')!!}
      {!!Form::file('image_file',old('image_file'),['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('tags_id','ジャンル')!!}
      {!!Form::select('tags_id',$tags->prepend('選択してください', ''),['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('name','名前')!!}
      {!!Form::text('name',old('name'),['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('career',' 経歴')!!}
      {!!Form::textarea('career',old('career'),['class'=>'form-control'])!!}
    </div>

    <div class="mt-4">
      <a class="btn btn-secondary" href="{{route('top')}}">
        キャンセル
      </a>
      {!!Form::submit('投稿する',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
  </div>
</div>
@endsection('content')