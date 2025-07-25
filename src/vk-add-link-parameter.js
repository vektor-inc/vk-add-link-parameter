(() => {
  // クエリからvwaf取得
  const params = new URLSearchParams(window.location.search);
  const vwaf = params.get('vwaf');
  if (!vwaf) return;

  // すべての a タグのhrefを走査
  document.querySelectorAll('a[href]').forEach(a => {
    try {
      const url = new URL(a.href, location.origin);
        url.searchParams.set('vwaf', vwaf);
        a.href = url.toString();
    } catch (e) {
      // 無効なURLは無視
    }
  });

// すべてのformのactionを走査
  document.querySelectorAll('form[action]').forEach(form => {
    try {
      const url = new URL(form.action, location.origin);
    if (!form.querySelector('input[name="vwaf"]')) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'vwaf';
        input.value = vwaf;
        form.appendChild(input);
    }
    } catch (e) {}
  });
})();
