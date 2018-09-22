{{--
Template Name: Accueil
--}}

@extends('layouts.fullwidth')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <br>

    <div class="row no-gutters">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="{{ get_permalink( get_page_by_path( 'services-du-canton-de-geneve' )) }}">
          <div class="card bg-dark text-white br0 bn" >
            <img src="@asset('images/gva.jpg')" alt="" class="card-img br0">
            <div class="card-img-overlay hover-bg-black-40">
              <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Services du Canton de Genève</h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/suivi.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Suivi</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/garde.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Garde</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/therapies.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Thérapies</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/associations.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Associations/Fondations</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/question-mark.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Info Pratique</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/faq.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">FAQ</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
        <div class="card bg-dark text-white br0 bn">
          <img src="@asset('images/forum.jpg')" alt="" class="card-img br0">
          <div class="card-img-overlay hover-bg-black-40">
            <h3 class="card-title b ttu" style="text-shadow: 1px 1px black;">Forum</h3>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="container">
      @include('partials.content-page')
    </div>

  @endwhile
@endsection
