{{--
Template Name: Services Etat
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Assurance invalidité (AI)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Allocation pour impotent (API)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Service Stationnement (Macaron)</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br>
        @php
          $ai_page = get_page_by_title( 'ai', OBJECT ,'page' );
          echo $ai_page->post_title;
          echo $ai_page->post_content;
        @endphp
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <br>
        @php
          $api_page = get_page_by_title( 'api', OBJECT ,'page' );
          echo $api_page->post_title;
          echo $api_page->post_content;
        @endphp
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <br>
        @php
          $macaron_page = get_page_by_title( 'macaron', OBJECT ,'page' );
          echo $macaron_page->post_title;
          echo $macaron_page->post_content;
        @endphp
      </div>
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
