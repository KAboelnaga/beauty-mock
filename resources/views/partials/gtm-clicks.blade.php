<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-gtm-event]').forEach(el => {
    el.addEventListener('click', async function (e) {
      const isLink = el.tagName.toLowerCase() === 'a' && el.href;

      if (isLink) {
        e.preventDefault(); // ❗ منع التنقل المؤقت لو <a>

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          event: el.dataset.gtmEvent,
          label: el.dataset.gtmLabel || '',
          category: 'interaction'
        });

        await new Promise(resolve => setTimeout(resolve, 600)); // وقت آمن لـ GTM

        window.location.href = el.href; // نرجّع التنقل يدويًا
      } else {
        // للعناصر اللي مش <a> (زي buttons أو divs)
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          event: el.dataset.gtmEvent,
          label: el.dataset.gtmLabel || '',
          category: 'interaction'
        });
      }

      console.log('Tracked:', el.dataset.gtmEvent, el.dataset.gtmLabel);
    });
  });
});

</script>