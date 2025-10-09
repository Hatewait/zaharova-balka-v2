/* Premium smooth scroll with Lenis */
(function () {
  'use strict';

  // Фича-флаг — одной строкой можно отключить эффект
  const ENABLE_SMOOTH_SCROLL = true;

  // Уважение к настройкам пользователя
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!ENABLE_SMOOTH_SCROLL || prefersReduced) return;

  // Проверка, что библиотека доступна
  if (typeof Lenis === 'undefined') return;

  // Инициализация
  const lenis = new Lenis({
    // скорость интерполяции: чем меньше, тем "мягче"
    lerp: 0.08,
    // wheel multiplier: чуть плавнее колесо мыши
    wheelMultiplier: 0.9,
    // touch моторику оставим нативной (на мобильных это естественнее)
    normalizeWheel: true,
    smoothTouch: false,
  });

  // Основной цикл
  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  // Добавляем/убираем класс-хук на html
  document.documentElement.classList.add('lenis');

  // Безопасность: если откроется модалка с блокировкой скролла, можно при желании паузить:
  // document.addEventListener('modal:open', () => lenis.stop());
  // document.addEventListener('modal:close', () => lenis.start());

  // Экспорт на всякий — удобно для отладки из консоли
  window.__lenis = lenis;
})();
