<?php
/**
 * Компонент навигации
 * Чистый HTML с простой логикой
 */
?>

<ul class="header__nav" data-da=".js-insert-nav,1719">
  <?php foreach ($menu_items as $key => $item): ?>
    <?php
    $is_active = ($key === $active);
    $has_dropdown = $item['dropdown'] ?? false;

    // Определяем ссылку
    $href = $is_active ? '#' : $item['href'];

    // Определяем классы
    $link_class = 'color-white link-md-light link-decor';
    if ($is_active) {
      $link_class .= ' active';
    }
    if ($has_dropdown) {
      $link_class .= ' dropdown-toggle';
    }

    // Определяем data-атрибуты
    $data_attrs = '';
    if ($key === 'about' && $active !== 'about') {
      $data_attrs .= ' data-scrolling-to="true"';
    }
    if ($key === 'contacts' && $active !== 'contacts') {
      $data_attrs .= ' data-scrolling-to="true"';
    }
    if ($has_dropdown) {
      $data_attrs .= ' data-dropdown="formats-dropdown"';
    }
    ?>

    <li class="<?= $has_dropdown ? 'dropdown' : '' ?>">
      <a href="<?= htmlspecialchars($href) ?>" class="<?= $link_class ?>" <?= $data_attrs ?>>
        <?= htmlspecialchars($item['text']) ?>
      </a>

      <?php if ($has_dropdown && isset($item['dropdown_items'])): ?>
        <ul class="dropdown-menu" id="formats-dropdown">
          <?php foreach ($item['dropdown_items'] as $dropdown_item): ?>
            <li>
              <a href="<?= htmlspecialchars($dropdown_item['href']) ?>" class="link-md-light">
                <?= htmlspecialchars($dropdown_item['text']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>