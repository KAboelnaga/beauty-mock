<script>
document.addEventListener('DOMContentLoaded', function () {
  let scrollTracked = false;

  window.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY;
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollPosition / totalHeight) * 100;

    if (!scrollTracked && scrollPercent > 25) {
      scrollTracked = true;

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        event: 'scroll_depth',
        percentage: 25
      });

      console.log('Scroll event tracked at 25%');
    }
  });
});
</script>
