<nav class="browse">
  <ul>
    <li>
      <a href="{{ localized_route('page.' . $routePrev) }}" title="{{ __('content.' . $titlePrev) }}" class="btn-prev">
        <span>{{ __('content.' . $titlePrev) }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 8.4 14"><style>.cl-st0{enable-background:new}.cl-st1{clip-path:url(#SVGID_2_);fill:gray}</style><g class="cl-st0"><defs><path id="SVGID_1_" d="M0 0h8.4v14H0z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"/></clipPath><path class="cl-st1" d="M7 13l.4-.4L1.8 7l5.6-5.6L7 1 1 7z"/></g></svg>
      </a>
    </li>
    <li>
      <a href="{{ localized_route('page.home') }}" title="Home" class="btn-home">
        <span>&nbsp;</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><style>.x-st0{fill:gray}</style><path class="x-st0" d="M12 .4l-.4-.4L6 5.6.4 0 0 .4 5.6 6 0 11.6l.4.4L6 6.4l5.6 5.6.4-.4L6.4 6z"/></svg>
      </a>
    </li>
    <li>
      <a href="{{ localized_route('page.' . $routeNext) }}" title="{{ __('content.' . $titleNext) }}" class="btn-next">
        <span>{{ __('content.' . $titleNext) }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 8.4 14"><style>.cr-st0{enable-background:new}.cr-st1{clip-path:url(#SVGID_2_);fill:gray}</style><g class="cr-st0"><defs><path id="SVGID_1_" d="M0 0h8.4v14H0z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"/></clipPath><path class="cr-st1" d="M1.4 13l-.4-.4L6.6 7 1 1.4l.4-.4 6 6z"/></g></svg>
      </a>
    </li>
  </ul>
</nav>