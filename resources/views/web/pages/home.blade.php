@extends('web.layout.app')
@section('seo_title', strip_tags(str_replace('<br>',' – ', __('content.heading-intro'))))
@section('seo_description', strip_tags(__('content.text-intro')))
@section('content')
<section class="content-intro">
  <div>
    <span class="claim">Objekt RC2110.01</span>
    <article class="is-intro">
      <div class="intro__text">
        <div>
          <h1>{!! __('content.heading-intro') !!}</h1>
          {!! __('content.text-intro') !!}
        </div>
      </div>
      <x-slideshow>
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-01" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-02" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-03" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-04" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-05" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-06" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
        <x-image isSlide="true" image="wettswil-am-albis-riccarda-cavelti-intro-07" width="1600" height="1067" alt="{{ __('content.heading-intro') }}" />
      </x-slideshow>
    </article>
  </div>
</section>
<section class="content">
  <div>
    <article>
      <div>
        <h2>{{ __('content.heading-location') }}</h2>
        {!! __('content.text-location') !!}
      </div>
      <a href="/assets/media/wettswil-am-albis.riccardacavelti.ch-low.mp4" data-fancybox="video">
        <figure class="has-button">
          <img data-src="/assets/media/wettswil-am-albis.riccardacavelti.ch-preview.jpg" width="1600" height="1067" alt="{{ __('content.heading-location') }}" class="lazyload">
        </figure>
      </a>
    </article>
    <article class="is-reverse is-plans">
      <div class="order-1 sm:order-2">
        <h1>{{ __('content.heading-rooms') }}</h1>
        {!! __('content.text-rooms') !!}
      </div>
      <div class="order-2 sm:order-1">
        <figure>
          <h1>{{ __('content.heading-1-attic') }}</h1>
          <a href="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d1.jpg" data-fancybox="gallery">
            <picture>
              <source srcset="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d1.webp" type="image/webp">
              <source srcset="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d1.jpg">
              <img data-src="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d1.jpg" width="1216" height="1600" alt="{{ __('content.heading-1-attic') }}" class="lazyload">
            </picture>
          </a>
        </figure>
      </div>
    </article>

    <article>
      <div>
        <h1>{{ __('content.heading-2-attic') }}</h1>
        <figure>
          <a href="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d2.jpg" data-fancybox="gallery">
            <picture>
              <source srcset="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d2.webp" type="image/webp">
              <source srcset="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d2.jpg">
              <img data-src="/assets/media/wettswil-am-albis-riccarda-cavelti-rooms-d2.jpg" width="1216" height="1600" alt="{{ __('content.heading-2-attic') }}" class="lazyload">
            </picture>
          </a>
        </figure>
      </div>
    </article>

    <article class="is-wide">
      <div>
        <h1>{{ __('content.heading-facts') }}</h1>
      </div>
      <div>
        <table>
          <tr>
            <td>{{ __('content.facts-space') }}</td>
            <td>{{ __('content.facts-approx') }} 175 m<sup>2</sup></td>
          </tr>
          <tr>
            <td>{{ __('content.facts-rooms') }}</td>
            <td>{{ __('content.facts-rooms-desc') }}</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-bathrooms') }}</td>
            <td>2</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-floors') }}</td>
            <td>2</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-floor') }}</td>
            <td>2. / 3.</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-year') }}</td>
            <td>1995</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-basement') }}</td>
            <td>1</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-parking') }}</td>
            <td>1</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-conditions') }}</td>
            <td>{{ __('content.facts-conditions-text') }}</td>
          </tr>
          <tr>
            <td>{{ __('content.facts-price') }}</td>
            <td>CHF 1.75 Mio.</td>
          </tr>
        </table>
      </div>
    </article>
    <article class="is-wide">
      <div>
        <h1>{{ __('content.contact') }}</h1>
        <p><strong>Riccarda Cavelti</strong><br><a href="tel:+41 79 613 00 09">+41 79 613 00 09</a><br><a href="mailto:rc@riccardacavelti.ch">rc@riccardacavelti.ch</a></p>
        <p><strong>Riccarda Cavelti GmbH</strong><br>Bahnhofstrasse 10<br>CH-8001 Zürich<br><br><strong><a href="https://www.riccardacavelti.ch" target="_blank">www.riccardacavelti.ch</a></strong></p>
        <p>
          <a href="https://www.instagram.com/riccarda_cavelti/" class="icon-instagram" rel="noopener" target="_blank" title="Instagram öffnen">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25 25"><defs><radialGradient id="a" cx="13.87" cy="0.89" r="10.83" gradientTransform="matrix(1.07, 0, 0, -1.07, -4.77, 19.17)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd776"/><stop offset="0.25" stop-color="#f3a554"/><stop offset="0.38" stop-color="#f15c3c"/><stop offset="0.61" stop-color="#d94867"/><stop offset="0.83" stop-color="#c32f87"/><stop offset="0.96" stop-color="#7d63a7"/><stop offset="1" stop-color="#5c6cb3"/></radialGradient><radialGradient id="b" cx="-909.08" cy="2720.73" r="31.33" gradientTransform="matrix(0.08, 0, 0, -0.08, 91.71, 226.71)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5f6db3"/><stop offset="1" stop-color="#5c6cb3"/></radialGradient><linearGradient id="c" x1="5.06" y1="25.39" x2="19.94" y2="-0.39" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd776"/><stop offset="0.25" stop-color="#f3a554"/><stop offset="0.38" stop-color="#f15c3c"/><stop offset="0.54" stop-color="#d94867"/><stop offset="0.7" stop-color="#c32f87"/><stop offset="0.91" stop-color="#7d63a7"/><stop offset="0.99" stop-color="#5c6cb3"/></linearGradient></defs><path d="M12.5,6.7a5.8,5.8,0,0,0-5.8,5.8,5.7,5.7,0,0,0,5.8,5.7,5.6,5.6,0,0,0,5.7-5.7A5.7,5.7,0,0,0,12.5,6.7Zm0,9.8a4,4,0,1,1,4-4A4,4,0,0,1,12.5,16.5Z" style="fill:url(#a)"/><circle cx="18.9" cy="6.1" r="1.3" style="fill:url(#b)"/><path d="M19,0H6A6,6,0,0,0,0,6V19a6,6,0,0,0,6,6H19a6,6,0,0,0,6-6V6A6,6,0,0,0,19,0Zm4,19a4,4,0,0,1-4,4H6a4,4,0,0,1-4-4V6A4,4,0,0,1,6,2H19a4,4,0,0,1,4,4Z" style="fill:url(#c)"/></svg>
          </a>
        </p>
        <p>
          <strong><a href="javascript:;" class="js-imprint-btn">{{ __('content.imprint') }}</a></strong>
        </p>
        <div class="imprint js-imprint" style="display:none">
          <p><strong>Copyright, 10 / 2021</strong><br>Riccarda Cavelti GmbH, Zürich</p>
          <p><strong>{{ __('content.design') }}</strong><br>WBG AG, Zürich</p>
          <p><strong>{{ __('content.photography') }}</strong><br>Marcel Renggli, Baden</p>
          <p><strong>{{ __('content.development') }}</strong><br><a href="https://marceli.to" target="_blank" rel="noopener" title="marceli.to">marceli.to</a>, Zürich</p>
        </div>
      </div>
    </article>
  </div>
</section>
@endsection