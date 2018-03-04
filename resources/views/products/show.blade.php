@extends('products.index')

@section('content')
<h1>{{ $productInfo->product_code }}</h1>
<p>{{ $productInfo->description }}</p>

<hr>

<p>{{ $productInfo->description }}</p>
<br>
@foreach ($comments as $comment )
  <i class="fa fa-user" aria-hidden="true">{{ $comment->comment }}</i>  
  <br>
@endforeach

<br>

<form action="{{ url('/product/' . $productInfo->id) }}" method="post" > 
{{ csrf_field() }}
    <div>
        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
        <input type="hidden" id="product_id" name="product_id" value="{{ $productInfo->id }}">
    </div>

    <button>@lang('title.save')</button>

</form>
<ul>

</ul>
<br>
@if (count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div> 
    @endforeach
@endif   

@endsection