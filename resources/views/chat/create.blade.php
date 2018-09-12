@extends('layouts.app')

@section('content')
  <div class="container">
    {{Form::open(['route' => 'board.store', 'class' => 'form-group', 'style' => 'width:60%; margin: 0 auto;'])}}
    <p>タイトル</p>
    <input type="text" class="form-control" name="title" placeholder="タイトル" style="margin-bottom:20px;" value="{{old('title')}}">
    <p>詳細</p>
    <textarea name="description" placeholder="詳細" style="margin-bottom:20px;" class="form-control">{{old('description')}}</textarea>
    <input type="submit" name="submit" class="form-control btn-primary" value="作成">
    {{Form::close()}}
  </div>
@endsection
