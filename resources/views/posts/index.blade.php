{{--@extends("layout")--}}
{{--@section("banner")--}}
{{--    <h1>hi</h1>--}}
{{--@endsection--}}
{{--@section("content")--}}
{{--@foreach ($posts as $post)--}}
{{--<h1>--}}
{{--    <a href="{{$post->slug}}">--}}
{{--    {{$post->title }} </a></h1>--}}
{{--<p>written by : <a href="author/{{$post->author->email}}">{{$post->author->name}}</a>--}}
{{--    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--</p>--}}
{{--<article>--}}


{{--</article>--}}
{{--@endforeach--}}
{{--@endsection--}}
<x-layout>

    @include('posts._posts-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
      <x-posts-grid :posts="$posts" />


{{$posts->links()}}
    </main>

</x-layout>
