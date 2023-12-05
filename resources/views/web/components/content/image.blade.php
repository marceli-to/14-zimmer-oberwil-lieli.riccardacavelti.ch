@if ($isSlide)
<div class="swiper-slide">
  <figure>
    <picture>
      <source media="(min-width: 1000px)" src="/assets/media/blank.png" data-srcset="/assets/media/{{ $image }}.webp" type="image/webp">
      <source media="(min-width: 1000px)" src="/assets/media/blank.png" data-srcset="/assets/media/{{ $image }}.jpg">
      <source src="/assets/media/blank.png" data-srcset="/assets/media/{{$image}}-sm.webp" type="image/webp">
      <img src="/assets/media/blank.png" data-src="/assets/media/{{$image}}-sm.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" class="lazyload">
    </picture>
  </figure>  
</div>
@elseif ($hasLightBox)
  <a href="/assets/media/{{$image}}-lg.jpg" data-fancybox="gallery">
    <figure>
      <picture>
        <source srcset="/assets/media/{{$image}}-sm.webp" type="image/webp">
        <source srcset="/assets/media/{{$image}}-sm.jpg">
        <img data-src="/assets/media/{{$image}}-sm.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" class="lazyload">
      </picture>
    </figure>
  </a>
@else
  <figure>
    <picture>
      <source srcset="/assets/media/{{$image}}.webp" type="image/webp">
      <source srcset="/assets/media/{{$image}}.jpg">
      <img data-src="/assets/media/{{$image}}.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" class="lazyload">
    </picture>
  </figure>
@endif


