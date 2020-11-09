<?php

// сктили и скрипты
require get_template_directory() . '/functions/enqueue.php';

// опции ACF
require get_template_directory() . '/functions/acf.php';

// включает поддержку миниатюр thumbnail для записей
add_theme_support( 'post-thumbnails' );

// удаляет заголовок у пагинации
require get_template_directory() . '/functions/pagination.php';

// добавляет вохможность написать отрывок для страницы
add_post_type_support( 'page', 'excerpt' );

// главное меню
require get_template_directory() . '/functions/menus.php';

// регистрация кастомных типов записей для тарифов
require get_template_directory() . '/functions/post-type-rates.php';

// ресгитрация таксономий для тарифов
require get_template_directory() . '/functions/taxonomies-rates.php';


