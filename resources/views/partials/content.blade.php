

@php
$link = get_the_permalink();
if ( get_post_meta(get_the_ID(),'ih-link', true) ) {
  $link = get_post_meta(get_the_ID(),'ih-link', true);
}
@endphp

<div class="bt bb b--black-10">
  <article @php post_class() @endphp>
    <br>
    <div class="row">
      <div class="col-12 col-sm-1 col-md-2 col-lg-2">
        <a class="no-underline black dim" href="{{ $link }}" target="_blank">
          @if( has_post_thumbnail() )
            <img src="{{get_the_post_thumbnail_url(get_the_ID(),'full')}}" class="img-fluid" alt="info-handicap-ge">
          @else
            <img src="http://mrmrs.github.io/photos/cpu.jpg" class="img-fluid" alt="Photo of a dimly lit room with a computer interface terminal.">
          @endif
        </a>
      </div>
      <div class="col-12 col-sm-11 col-md-10 col-lg-10">
        <a class="no-underline black dim" href="{{ $link }}" target="_blank">
          <h2 class="f4 fw1 dosis-bold mt0 lh-title">{{ get_the_title() }}</h2>
        </a>
        <p class="f6 f5-l lh-copy dosis">@php the_excerpt() @endphp</p>
        <p class="f6 lh-copy mv0">@include('partials/entry-meta')</p>
      </div>
    </div>
    <br>
  </article>
</div>
