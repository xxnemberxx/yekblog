@isset($categories)
<div class="col-md-3">
    <h2 style="margin-top:30px;"class="sb-title">Kategoriler</h2>
    <ul class="sb-cata-list">
      @foreach ($categories as $category)
        <li class="@if(Request::segment(2)==$category->slug) active @endif">
          <a @if(Request::segment(2)!=$category->slug) href="{{route('category',$category->slug)}}" @endif>{{$category->name}}<span>{{$category->articleCount()}}</span>
          </a>
        </li>
      @endforeach
    </ul>
</div>
@endif
