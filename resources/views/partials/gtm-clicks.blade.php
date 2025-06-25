<script>
  document.addEventListener('DOMContentLoaded', function () {
  const clickableElements = document.querySelectorAll('[data-gtm-event]');

  clickableElements.forEach(el => {
    el.addEventListener('click', function () {
      if (typeof window.dataLayer === 'undefined') {
        console.error('❌ dataLayer is not defined');
        return;
      }

      window.dataLayer.push({
        event: el.dataset.gtmEvent,
        label: el.dataset.gtmLabel || '',
        category: 'user_click'
      });

      console.log('✅ Tracked Click:', el.dataset.gtmEvent, el.dataset.gtmLabel);
    });
  });
});

</script>
