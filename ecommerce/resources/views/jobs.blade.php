@extends("appBlade")

@section("content")
@foreach ($jobs as $job) 
 <li> 
    <a href="/job/{{$job['id']}}" >{{ $job['title']}}</a>
 </li>
  
@endforeach
@endsection