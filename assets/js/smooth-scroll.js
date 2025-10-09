/* Premium smooth scroll with Lenis */
(function () {
  'use strict';

  // Фича-флаг — одной строкой можно отключить эффект
  const ENABLE_SMOOTH_SCROLL = true;

  // Уважение к настройкам пользователя
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!ENABLE_SMOOTH_SCROLL || prefersReduced) return;

  // Проверка производительности браузера
  const isLowEndDevice = navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2;
  const isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  
  // Проверка, что библиотека доступна
  if (typeof Lenis === 'undefined') return;

  // Оптимизированные настройки для Chrome
  const lenis = new Lenis({
    // Более агрессивная интерполяция для Chrome
    lerp: isChrome ? 0.12 : 0.08,
    // Уменьшенный множитель колеса для Chrome
    wheelMultiplier: isChrome ? 0.7 : 0.9,
    // Отключаем нормализацию колеса в Chrome (может тормозить)
    normalizeWheel: !isChrome,
    // Отключаем smooth touch на слабых устройствах
    smoothTouch: !isLowEndDevice,
    // Ограничиваем FPS на слабых устройствах
    duration: isLowEndDevice ? 1.2 : 1.0,
    // Более быстрая остановка анимации
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  });

  // Оптимизированный основной цикл
  let rafId;
  function raf(time) {
    lenis.raf(time);
    rafId = requestAnimationFrame(raf);
  }
  
  // Запускаем только если страница видима
  if (!document.hidden) {
    rafId = requestAnimationFrame(raf);
  }
  
  // Пауза при скрытии страницы для экономии ресурсов
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      cancelAnimationFrame(rafId);
    } else {
      rafId = requestAnimationFrame(raf);
    }
  });

  // Добавляем/убираем класс-хук на html
  document.documentElement.classList.add('lenis');

  // Безопасность: если откроется модалка с блокировкой скролла, можно при желании паузить:
  // document.addEventListener('modal:open', () => lenis.stop());
  // document.addEventListener('modal:close', () => lenis.start());

  // Экспорт на всякий — удобно для отладки из консоли
  window.__lenis = lenis;
})();

