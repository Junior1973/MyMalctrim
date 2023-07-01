

<footer>
    
    <div class="footer">
   
      <!-- Логотип -->
      <div class="footer_div">
        <div class="img_logo">
        <?php the_custom_logo();?> <!-- <img src="./footer_img_v1.0/logo.png" alt="logo" /> -->
        </div>

        <p class="footer_p" style="margin-top: 20px">
          Крымская, туристическая организация, для любителей активного отдыха на
          природе
        </p>
        <div class="img_decor" style="margin-top: 20px">
          <img
            src="<?php bloginfo( 'template_url'); ?>./assets/img/footer_img/decor.png"
            alt="logo"
            style="width: 230px; height: 90px"
          />
        </div>
      </div>
      <!-- Услуги -->
      <div class="footer_div">
        <h3 class="footer_h3">Услуги</h3>
        <a class="footer_h4" href="#" style="margin-top: 20px">Крым</a>
        <li><a class="footer_a" href="#">Однодневные походы </a></li>
        <li><a class="footer_a" href="#">Походы с&nbsp;ночевкой</a></li>
        <li><a class="footer_a" href="#">Экстримальные походы</a></li>
        <li><a class="footer_a" href="#">Психологический интенсив</a></li>

        <a class="footer_h4" href="#">Кавказ</a>
        <li><a class="footer_a" href="#">Восхождение на&nbsp;Эльбрус</a></li>
        <li><a class="footer_a" href="#">Трекинг по&nbsp;Адыгее</a></li>
        <li><a class="footer_a" href="#">Трекинг по&nbsp;Архызу</a></li>
        <li><a class="footer_a" href="#">Трекинг по&nbsp;Асетии</a></li>
      </div>
      <!-- Меню -->
      <div class="footer_div_menu">
        <h3 class="footer_h3">Меню</h3>
        <a class="footer_h4" href="#" style="margin-top: 20px">Главная</a>
        <li><a class="footer_a" href="#">Расписание</a></li>
        <li><a class="footer_a" href="#">Памятка туристу</a></li>
        <li><a class="footer_a" href="#">О&nbsp;нас</a></li>
      </div>
      <!-- Контакты -->
      <div class="footer_div">
        <h3 class="footer_h3_Cont">Контакты</h3>
        <div class="footer_div_fone" style="margin-top: 20px">
          <img src="<?php bloginfo( 'template_url'); ?>./assets/img/footer_img/phone_on.png" alt="fone" />
          <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
        </div>
        <div class="footer_div_fone">
          <img src="<?php bloginfo( 'template_url'); ?>./assets/img/footer_img/phone_on.png" alt="fone" />
          <a class="footer_a_fone" href="#">+7(978)529-35-87</a>
        </div>
        <div>
          <p class="footer_p">
            <b>Подпишитесь</b> на&nbsp;нас в&nbsp;социальных сетях и&nbsp;будьте
            в&nbsp;курсе всех планирующихся мероприятий в&nbsp;Мальстриме.
          </p>
        </div>
        <div class="footer_div_socseti">
          <div class="footer_div_socseti_VK">
            <a
              href="http://vk.com/malstrim"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="<?php bloginfo( 'template_url'); ?>./assets/img/footer_img/VK0.png"
                alt="VK"
                style="padding-top: 9px; padding-left: 5px"
              />
            </a>
          </div>
          <div class="footer_div_socseti_Telegram">
            <a
              href="http://t.me/vie_est_vita"
              target="_blank"
              rel="noopener noreferrer"
            >
              <img
                src="<?php bloginfo( 'template_url'); ?>./assets/img/footer_img/Telegram.png"
                alt="Telegram"
                style="padding-top: 9px; padding-left: 5px"
              />
            </a>
          </div>
        </div>
        <div class="footer_div_zayvka">
          <a class="footer_button_z" href="#">Заявка</a>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  </body>
</html>