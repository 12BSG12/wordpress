<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head();?>
</head>

<body class="relative before:absolute bg-gray bg-opacity-10 left-0 right-0 bottom-0 top-0">
  <div class="max-w-screen-2xl m-auto overflow-hidden">
    <header class="pt-2 mb-4 sm:mb-9">
      <div
        class="left-0 right-0 absolute -top-full transition-all ease-in-out duration-500 block text-center mb-5 md:relative md:flex md:justify-between md:items-center">
        <div>
          <a href="#" class="bvi-open">
            <img style="width: 30px; height: 30px;" src="<?php bloginfo('template_url'); ?>/assets/eye.svg"
              alt="Версия для слабовидящих">
          </a>
          <a href="https://pnipu.ru/index.php/ru/" target="_black">Предыдущая версия сайта</a>
        </div>
        <div :class="styles.rightBtn">
          <div :class="styles.social">
          </div>
          <form>
            <input placeholder="Введите текст для поиска..." />
          </form>
        </div>
      </div>
      <span :class="styles.menuDown">
      </span>
      <div :class="styles.info">
        <?php the_custom_logo(); ?>

        <ul :class="styles.list">
          <li>
            <a href="https://yandex.ru/maps/20243/chaikovsky/house/ulitsa_lenina_73/YU0YdwJpQEcEQFtsfXt3dXhgZg==/?ll=54.159922%2C56.764432&z=16"
              target="_black">
              г. Чайковский Пермский край <br />
              ул. Ленина, 73
            </a>
          </li>
          <li>
            <a href="tel:+73424134456">+7 (34241) 3-44-56</a>
          </li>
          <li>
            <a href="mailto:ok@pnipu.ru?subject=Вопрос">ok@pnipu.ru</a>
          </li>
        </ul>
      </div>
    </header>
