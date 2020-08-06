@extends('back.layouts.master')
@section('title','Makale Oluştur')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">@yield('title')
    </div>
    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </div>
      @endif
        <form method="post" action="{{route('admin.makaleler.store')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label>Makale Başlığı</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Makale Kategori</label>
                <select class="form-control" name="category" required>
                    <option value="">Seçim Yapınız</option>
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="tags">Etiketler</label>
              <input id="tags" class="input-tags border border-dark" type="text" name="tags" data-role="tagsinput">
            </div>
            <div class="form-group">
                <label>Makale Fotoğrafı</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Makale İçeriği</label>
                <textarea id="editor" name="content" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Makaleyi Oluştur</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('css')
<style>
  .bootstrap-tagsinput input{
    border:none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #365dcd;
  }
  .bootstrap-tagsinput .tag{
    display: inline-block;
    margin-bottom: 5px;
    background: #365dcd ;
    color:white;
    padding: 5px 20px;
    border-radius: 3px;
  }
</style>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('js')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script src="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script>
$(document).ready(function() {
$('#editor').summernote(
  {
    'height':300
  }
);
$('#tags').tagsinput({
confirmKeys: [13, 44],
maxTags: 20
});
});
</script>
@endsection
