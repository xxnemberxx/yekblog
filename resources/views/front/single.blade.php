@extends('front.layouts.master')
@section('title',$article->title)
@section('bg',$article->image)
@section('content')
        <div class="col-md-9 mx-auto">
          {!!$article->content!!}
          <br /><br  />
          <span class="text-danger">Okunma sayısı : <b>{{$article->hit}}</b></span>
          <br>
          @php 
          $tags = explode(',',$article->tags);
          @endphp
          <label class="text-danger">Etiket : {!! count($tags) !!}</label>
          <div class="row">
            @foreach($tags as $tag)
              <span class="badge badge-warning pl-2 pr-2 pt-1 pb-1 m-2 text-dark">{!! $tag !!}</span>
            @endforeach
          </div>
        </div>
@include('front.widgets.categoryWidget')
@endsection

