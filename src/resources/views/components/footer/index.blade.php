@if (config('app.env') === 'production')
  <script async defer src="https://data.alldocs.app/app.js"></script>
  <noscript><img src="https://data.alldocs.app/image.gif" alt=""></noscript>
  <script async defer data-domain="alldocs.app" src="https://plausible.io/js/plausible.js"></script>
@endif

@if (manifest('vendor.js'))
  <script defer src="{{ manifest('vendor.js') }}"></script>
@endif

@if (manifest('app.js'))
  <script defer src="{{ manifest('app.js') }}"></script>
@endif
