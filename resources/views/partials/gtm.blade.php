<script>
  window.dataLayer = window.dataLayer || [];
  
  window.dataLayer.push({
    event: 'page_view',
    user_status: "{{ auth()->check() ? 'logged_in: user_id: ' . auth()->user()->id : 'guest' }}",
    page: "{{ Request::path() }}",
    page_type: "{{ Route::currentRouteName() ?? 'unknown' }}"
  });

  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id=' + i + dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MPWLQRDD');
</script>

<!-- GTM noscript -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPWLQRDD"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>