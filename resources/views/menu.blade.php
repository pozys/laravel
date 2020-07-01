
@section('menu')

@foreach ($categories as $category)
<a href=' {{ route("categories.getNewsByCategoryId", $category["category_id"]) }} '> {{$category['category_name']}} </a>
@endforeach
@endsection