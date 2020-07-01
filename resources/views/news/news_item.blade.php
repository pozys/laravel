@extends('layouts.main')
@extends('menu')
@extends('footer')
@extends('header')

@section('title')
{{ $news['title'] }}
@endsection

@section('content')

<h2 class="blog-post-title">{{ $news['title'] }}</h2>
<p>{{ $news['body'] }}</p>
@endsection