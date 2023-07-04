
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
          <a href="index.html"><img src="<?php bloginfo( 'template_url'); ?> ./assets/img/logo.png" alt="logo" /></a>
          <nav class="nav">
            <ul>
              <li><a href="index.html">Главная</a></li>
              <li><a href="schedule.html">Расписание</a></li>
              <li><a href="reminder.html">Памятка туристу</a></li>
              <li><a href="about.html">О нас</a></li>
            </ul>
          </nav>
          <div class="menu">
            <img
              class="menu_img"
              src="<?php bloginfo( 'template_url'); ?> ./assets/img/+.svg"
              onclick="menu_img_close()"
              alt=""
            />
            <ul>
              <li class="menu_link"><a href="index.html">Главная</a></li>
              <li class="menu_link"><a href="schedule.html">Расписание</a></li>
              <li class="menu_link">
                <a href="reminder.html">Памятка туристу</a>
              </li>
              <li class="menu_link"><a href="about.html">О нас</a></li>
            </ul>
            <button class="menu_btn" type="submit" onclick="show()">
              Заявка
            </button>
            <div class="menu_tel">
              <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_tel">
              <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/tube  white.svg" alt="telephone" />
              <p>+7(978) 798-58-72</p>
            </div>
            <div class="menu_icon">
              <a href="http://vk.com/malstrim" rel="noopener" target="_blank"><img class="menu_icon_vk" src="<?php bloginfo( 'template_url'); ?> ./assets/img/VK1.svg" alt="vk"
              /></a>
              <a href="http://t.me/vie_est_vita" rel="noopener" target="_blank"
                ><img class="menu_icon_tl" src="<?php bloginfo( 'template_url'); ?> ./assets/img/TЛ.svg" alt="telegram"
              /></a>
            </div>
          </div>
          <div class="header_icon">
            <img
              class="header_icon_telephone"
              onmouseover="icon_over()"
              onmouseout="icon_out()"
              src="<?php bloginfo( 'template_url'); ?> ./assets/img/Трубка.svg"
              alt="telephone"
            />
            <a href="http://vk.com/malstrim" rel="noopener" target="_blank"
              ><img class="header_icon_vk" src="<?php bloginfo( 'template_url'); ?> ./assets/img/VK1.svg" alt="vk"
            /></a>
            <a href="http://t.me/vie_est_vita" rel="noopener" target="_blank"
              ><img
                class="header_icon_telegram"
                src="<?php bloginfo( 'template_url'); ?> ./assets/img/TЛ.svg"
                alt="telegram"
            /></a>
          </div>
          <div class="header_link">
            <a href="#" onclick="show()">В поход !</a>
          </div>
        </div>
        <!-- Модальное окно с телефонами -->
        <div class="modal_telephone_window modal_telephone_close">
          <div class="modal_telephone_wrap">
            <div class="modal_telephone">
              <div class="modal_telephone_1">
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/tel.svg" alt="" />
                <p>+7(978) 798-58-72</p>
              </div>
              <div class="modal_telephone_1">
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/tel.svg" alt="" />
                <p>+7(978) 529-35-87</p>
              </div>
            </div>
          </div>
        </div>
        <!-- --------------------------  -->
        <div class="modal_form_active modal_close">
          <div class="modal_window_window">
            <div class="modal_window">
              <div class="modal_img_1">
                <img
                  class="modal_window_img"
                  src="<?php bloginfo( 'template_url'); ?> ./assets/img/модальное окно 2.png"
                  alt=""
                />
                <div class="modal_form_p">
                  <p>Мы ждет тебя в нашу команду!</p>
                </div>
              </div>

              <!-- <div class="modal_img_2">
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/+.svg" onclick="show()"alt="">
              </div> -->

              <div class="modal_form">
                <form action="">
                  <div class="modal_img_2">
                    <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/+.svg" onclick="show()" alt="" />
                  </div>

                  <p class="modal_form_text">
                    Отправьте заявку и мы перезвоним Вам в ближайшее время и
                    поможем подобрать поход
                  </p>
                  <div class="modal_application">
                    <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/туристМод.svg" alt="турист" />
                    <div class="modal_application_label">
                      <p><label for="">Ваше имя:</label></p>
                      <input
                        class="modal_application_input"
                        type="text"
                        name="name"
                        placeholder="Введите ваше имя"
                      />
                    </div>
                  </div>
                  <div class="modal_application">
                    <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/телефон.svg" alt="телефон" />
                    <div class="modal_application_label">
                      <p><label for="">Телефон:</label></p>
                      <input
                        class="modal_application_input"
                        type="text"
                        name="name"
                        placeholder="+ 7 (978) 798-58-72"
                      />
                    </div>
                  </div>
                  <div class="modal_application_checkbox">
                    <input
                      type="checkbox"
                      class="modal_application_input_checkbox"
                      title="Введите ваше имя" placeholder="Имя"
                    />
                    <p>
                      Я согласен с <span>условиями передачи информации</span>
                    </p>
                  </div>
                  <button class="modal_form_btn" type="submit">
                    Отправить
                  </button>
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
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/Карта.png" alt="Карта" />
                <p>Маршруты по всему Крыму</p>
              </div>
              <div class="header_block_img">
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/Турист.png" alt="Карта" />
                <p>Пешие туры на Кавказ</p>
              </div>
              <div class="header_block_img">
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/Гора.png" alt="Карта" />
                <p>Восхождение на Эльбрус</p>
              </div>
            </div>
          </div>
          <div class="header_box_link">
            <a href="schedule.html">Маршруты</a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 185">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,96L120,117.3C240,139,480,181,720,181.3C960,181,1200,139,1320,117.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
        ></path>
      </svg>
    </header>