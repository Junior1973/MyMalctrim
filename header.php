<?php wp_head(); ?>

</head>
  <body>

  <header class="header">
      <div class="container">
        <div class="header_burger">
          <div class="burger">
            <span></span>
          </div>
        </div>
        <div class="header_block">
          <a href="index.html"><?php the_custom_logo();?></a>
          <nav class="nav">
            <ul>
              <li><a href="index.html">Главная</a></li>
              <li><a href="schedule.html">Расписание</a></li>
              <li><a href="reminder.html">Памятка туристу</a></li>
              <li><a href="about.html">О нас</a></li>
            </ul>
          </nav>
          <div class="menu" >
            <img class="menu_img" src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/+.png" onclick="menu_img_close()" alt="">
            <ul>
              <li class="menu_link"><a href="index.html">Главная</a></li>
              <li class="menu_link"><a href="schedule.html">Расписание</a></li>
              <li class="menu_link">
                <a href="reminder.html">Памятка туристу</a>
              </li>
              <li class="menu_link"><a href="about.html">О нас</a></li>
            </ul>
            <button class="menu_btn" type="submit" onclick="show()">Заявка</button>
            <div class="menu_tel">
              <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/tube  white.png" alt="telephone">
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_tel">
              <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/tube  white.png" alt="telephone">
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_icon">
              <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/VK1.png" alt="vk">
              <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/TЛ.png" alt="telegram">
            </div>
          </div>
          <div class="header_icon">
            <a href=""><img class="header_icon_telephone" src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Трубка.png" alt="telephone" /></a>
            <a href="#"><img class="header_icon_vk" src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/VK1.png" alt="vk" /></a>
            <a href="#"><img class="header_icon_telegram" src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/TЛ.png" alt="telegram" /></a>
          </div>
          <div class="header_link">
            <a href="#" onclick="show()">В поход !</a>
          </div>
    </div>
          <div class="modal_form_active modal_close">
            <div class="modal_window_window">
            <div class="modal_window">
              <div class="modal_img_1" >
                <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/модальное окно.png" alt="">
                <div class="modal_form_p">
                  <p>Отдыхай правильно</p>
                </div>
              </div>
              <div class="modal_img_2">
                <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/+.png" onclick="show()"alt="">
              </div>
            <div class="modal_form">
              <form action="">
                <p class="modal_form_text">Отправьте заявку и мы перезвоним Вам в ближайшее время и поможем подобрать поход</p>
                <div class="modal_application">
                  <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/туристМод.png" alt="турист">
                  <div class="modal_application_label">
                  <p><label for="">Ваше имя:</label></p>
                  <input class="modal_application_input" type="text" name="name">
                </div>
                </div>
                <div class="modal_application">
                  <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/телефон.png" alt="телефон">
                  <div class="modal_application_label">
                  <p><label for="">Телефон:</label></p>
                  <input class="modal_application_input" type="text" name="name">
                </div>
                </div>
                <div class="modal_application_checkbox">
                <input type="checkbox" class="modal_application_input_checkbox">
                <p> Я согласен с <span>условиями передачи информации</span></p>
              </div>
                <button class="modal_form_btn" type="submit">Отправить</button>
              </form>
            </div>
          </div>
          </div>
      </div>
          <div class="header_box">
            <div class="header_box_title_img">
              <div class="header_box_title">
                <h1>
                  Походы по <br />
                  Крыму и Кавказу
                </h1>
              </div>
              <div class="header_block_description">
                <div class="header_block_img">
                  <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Карта.png" alt="Карта" />
                  <p>Маршруты по всему Крыму</p>
                </div>
                <div class="header_block_img">
                  <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Турист.png" alt="Карта" />
                  <p>Пешие туры на Кавказ</p>
                </div>
                <div class="header_block_img">
                  <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Гора.png" alt="Карта" />
                  <p>Восхождение на Эльбрус</p>
                </div>
              </div>
            </div>
            <div class="header_box_link">
              <a href="schedule.html">Маршруты</a>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 185"><path fill="#ffffff" fill-opacity="1" d="M0,96L120,117.3C240,139,480,181,720,181.3C960,181,1200,139,1320,117.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </header>
    <section class="hiking_advantages">
      <div class="container">
        <h2>Наши походы</h2>
        <div class="hiking_block">
          <div class="hiking_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Веселые.png" alt="cheerful" />
            <p>Веселые</p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Безопасные.png" alt="Safe" />
            <p>Безопасные</p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Вкусные.png" alt="Tasty" />
            <p>Вкусные</p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Круглогодичные.png" alt="season" />
            <p>Круглогодичные</p>
          </div>
        </div>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Веселые.png" alt="Веселые"></div>
            <div class="swiper-slide"><img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Безопасные.png" alt="Безопасные"></div>
            <div class="swiper-slide"><img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Вкусные.png" alt="Вкусные"></div>
            <div class="swiper-slide"><img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Круглогодичные.png" alt="Круглогодичные"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <h2>Наши преимущества</h2>
        <div class="advantages_block">
          <div class="advantages_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector.png" alt="" />
            <p>Скидка новому клиенту</p>
          </div>
          <div class="advantages_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector (1).png" alt="" />
            <p>Подбор индивидуальных походов</p>
          </div>
          <div class="advantages_img_none">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector (2).png" alt="" />
            <p>Быстрая обратная связь</p>
          </div>
          <div class="advantages_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector (3).png" alt="" />
            <p>Походы для любых возрастов</p>
          </div>
          <div class="advantages_img">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector (4).png" alt="" />
            <p>Лучшие фотографии</p>
          </div>
          <div class="advantages_img_none">
            <img src="<?php bloginfo( 'template_url'); ?>./assets/img/header_img/Vector (5).png" alt="" />
            <p>Психологические тренинги на природе</p>
          </div>
        </div>
      </div>
    </section>