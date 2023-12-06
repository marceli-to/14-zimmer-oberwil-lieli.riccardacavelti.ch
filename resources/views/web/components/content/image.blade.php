@if ($isSlide)
<div class="swiper-slide">
  <figure>
    <picture>
      <source media="(min-width: 1000px)" srcset="/assets/media/{{ $image }}.avif" type="image/avif">
      <source media="(min-width: 1000px)" srcset="/assets/media/{{ $image }}.webp" type="image/webp">
      <source media="(min-width: 1000px)" srcset="/assets/media/{{ $image }}.jpg">
      <source srcset="/assets/media/{{$image}}-sm.avif" type="image/avif">
      <source srcset="/assets/media/{{$image}}-sm.webp" type="image/webp">
      <img src="/assets/media/{{$image}}-sm.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" loading="lazy">
    </picture>
  </figure>  
</div>
@elseif ($hasLightBox)
  <a href="/assets/media/{{$image}}-lg.jpg" data-fancybox="gallery">
    <figure>
      <picture>
        <source srcset="/assets/media/{{$image}}-sm.avif" type="image/avif">
        <source srcset="/assets/media/{{$image}}-sm.webp" type="image/webp">
        <source srcset="/assets/media/{{$image}}-sm.jpg">
        <img src="/assets/media/{{$image}}-sm.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" loading="lazy">
      </picture>
    </figure>
  </a>
@else
  <figure>
    <picture>
      <source srcset="/assets/media/{{$image}}.avif" type="image/avif">
      <source srcset="/assets/media/{{$image}}.webp" type="image/webp">
      <source srcset="/assets/media/{{$image}}.jpg">
      <img src="/assets/media/{{$image}}.jpg" width="{{$width}}" height="{{$height}}" alt="{{$alt}}" loading="lazy">
    </picture>
  </figure>
@endif


