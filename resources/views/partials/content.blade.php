@php
$link = get_post_meta(get_the_ID(),'ih-link', true);
@endphp

@php
if ( has_category('info-pratique')) {
  $link = get_the_permalink()
}
@endphp

<div class="bt bb b--black-10">
  <article @php post_class() @endphp>
    <br>
    <div class="row">
      <div class="col-12 col-sm-3 col-md-4 col-lg-4">
        <a class="no-underline black dim" href="{{ $link }}" target="_blank">
          @if( has_post_thumbnail() )
            <img src="{{get_the_post_thumbnail_url(get_the_ID(),'full')}}" class="img-fluid" alt="info-handicap-ge">
          @else
            <img src="http://mrmrs.github.io/photos/cpu.jpg" class="img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @endif
        </a>
      </div>
      <div class="col-12 col-sm-9 col-md-8 col-lg-8">
        <a class="no-underline black dim" href="{{ $link }}" target="_blank">
          <h1 class="f3 fw1 dosis-bold mt0 lh-title">{{ get_the_title() }}</h1>
        </a>
        <p class="f6 f5-l lh-copy dosis">@php the_excerpt() @endphp</p>
        <p class="f6 lh-copy mv0">@include('partials/entry-meta')</p>
      </div>
    </div>
    <br>
  </article>
</div>
