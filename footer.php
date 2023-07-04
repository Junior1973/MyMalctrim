
<footer>
      <div class="footer">
        <!-- Логотип -->
        <div class="footer_div">
          <div class="img_logo">
            <a href="index.html"><img src="<?php bloginfo( 'template_url'); ?> ./assets/img/logo.png" alt="logo" /></a>
          </div>

          <p class="footer_p" >
            Крымская, туристическая организация, для любителей активного отдыха
            на природе
          </p>
          <div class="img_decor" >
            <img
              src="<?php bloginfo( 'template_url'); ?> ./assets/img/decor.png"
              alt="logo"
            />
          </div>
        </div>
        <!-- Услуги -->
        <div class="footer_div">
          <h3 class="footer_h3">Услуги</h3>
          <a class="footer_h4" href="#">Крым</a>
          <ul class="footer_a">
            <li><a  href="#">Однодневные походы </a></li>
            <li><a  href="#">Походы с&nbsp;ночевкой</a></li>
            <li><a  href="#">Экстримальные походы</a></li>
            <li><a  href="#">Психологический интенсив</a></li>
          </ul>
          <a class="footer_h4" href="#">Кавказ</a>
          <ul class="footer_a">
            <li><a  href="#">Восхождение на&nbsp;Эльбрус</a></li>
            <li><a  href="#">Треккинг по&nbsp;Адыгее</a></li>
            <li><a  href="#">Треккинг по&nbsp;Архызу</a></li>
            <li><a  href="#">Треккинг по&nbsp;Асетии</a></li>
          </ul>
        </div>
        <!-- Меню -->
        <div class="footer_div_menu">
          <h3 class="footer_h3">Меню</h3>
          <a class="footer_h4" href="index.html">Главная</a>
          <ul class="footer_a">
            <li><a  href="schedule.html">Расписание</a></li>
            <li><a  href="reminder.html">Памятка туристу</a></li>
            <li><a  href="about.html">О&nbsp;нас</a></li>
          </ul>
        </div>
        <!-- Контакты -->
        <div class="footer_div">
          <h3 class="footer_h3_Cont">Контакты</h3>
          <div class="footer_div_fone">
            <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/phone_on.png" alt="fone" />
            <a class="footer_a_fone" href="#">+7(978)798-58-72</a>
          </div>
          <div class="footer_div_fone_">
            <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/phone_on.png" alt="fone" />
            <a class="footer_a_fone" href="#">+7(978)529-35-87</a>
          </div>
          <div>
            <p class="footer_p">
              <b>Подпишитесь</b> на&nbsp;нас в&nbsp;социальных сетях
              и&nbsp;будьте в&nbsp;курсе всех планирующихся мероприятий
              в&nbsp;Мальстриме.
            </p>
          </div>
          <div class="footer_div_socseti">
            <div class="footer_div_socseti_VK">
              <a
                href="http://vk.com/malstrim"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/VK0.png" alt="VK"/>
              </a>
            </div>
            <div class="footer_div_socseti_Telegram">
              <a
                href="http://t.me/vie_est_vita"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img src="<?php bloginfo( 'template_url'); ?> ./assets/img/Telegram.png" alt="Telegram"/>
              </a>
            </div>
          </div>
          <div class="footer_div_zayvka">
            <a class="footer_button_z" href="#" onclick="show()">Заявка</a>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

  </body>

</html>