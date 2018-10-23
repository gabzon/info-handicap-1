@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    <br>
    @php comments_template('/partials/comments.blade.php') @endphp
  @endwhile
@endsection
