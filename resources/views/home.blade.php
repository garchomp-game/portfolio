@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <span>ダッシュボード</span>
            <a class="btn btn-primary pull-right" href="{{route('board.create')}}">新規掲示板登録</a>
            <div style="clear:both;"></div>
          </div>
          <div class="panel-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            <ul class="list-group">
              @forelse ($board as $value)
                <a class="list-group-item row" style="width:95%; margin:0 auto;" href="{{route('chat.index', $value->id)}}">
                  <div class="col-md-4">
                    <p>{{$value->title}}</p>
                  </div>
                  <div class="col-md-8">
                    <p>{{$value->description}}</p>
                  </div>
                </a>
              @empty
                <li class="list-group-item">まだ掲示板がありません。</li>
              @endforelse
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
