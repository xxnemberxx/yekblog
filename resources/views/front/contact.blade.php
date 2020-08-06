@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','front/img/contact-bg.jpg')
@section('content')
  <div class="col-md-8">
    @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  @endif
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <p class="alert alert-info text-center text-dark">Bizimle iletişime geçebilirsiniz.</p>
    
    <form method="post" action="{{route('contact.post')}}">
      @csrf
      <div class="control-group">
        <div class="form-group  controls">
          <label>Ad Soyad</label>
          <input type="text" class="form-control" value="{{old('name')}}" placeholder="Ad Soyadınız" name="name" required >
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group  controls">
          <label>Email Adresi</label>
          <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email Addresiniz" name="email" required >
        </div>
      </div>
      <div class="control-group">
        <div class="form-group col-xs-12  controls">
          <label>Konu</label>
          <select class="form-control" name="topic">
            <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
            <option @if(old('topic')=="Destek") selected @endif>Destek</option>
            <option @if(old('topic')=="Genel") selected @endif>Genel</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group  controls">
          <label>Mesajınız</label>
          <textarea rows="5" name="message" class="form-control" placeholder="Mesajınız">{{old('message')}}</textarea>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
      </div>
    </form>
  </div>
  <div class="col-md-4">
  <div class="card card-default">
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=T%C3%BCrkiye%20istanbul%20arnavutk%C3%B6y%20gaziosmpa%C5%9Fa+()&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
  </div>

</div>
  </div>
@endsection
