@extends('layouts.main')
@extends('menu')
@extends('footer')
@extends('header')

@section('content')
@foreach ($news as $key => $item) 
<h1 class="display-4 font-italic">{{ $item['title'] }} </h1>
<p class="lead mb-0"><a href=" {{ route('news.getNewsById', $key) }} " class="text-white font-weight-bold">Читать дальше..</a></p>
</a>
@endforeach
@endsection