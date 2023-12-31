<?php
/*
Template Name: home
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>МАЛЬСТРИМ</title>

    <?php get_header(); ?>


    <!-- Наши походы  -->
    <section class="hiking_advantages">
      <div class="container">
        <h2>Нас выбирают, потому что:</h2>
        <div class="hiking_block">
          <div class="hiking_img">
            <img src="assets/img/Веселые.png" alt="cheerful" />
            <p>
              В наших походах Вам не нужно ни о чем беспокоиться, мы обо всем
              позаботимся за Вас
            </p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="assets/img/Безопасные.png" alt="Safe" />
            <p>
              Каждый наш поход проходит под чутким руководством специалистов
            </p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="assets/img/Вкусные.png" alt="Tasty" />
            <p>
              У нас разнообразные виды отдыха и даже маршруты с шашлыком и дикой
              лесной баней
            </p>
          </div>
          <div class="hiking_point"></div>
          <div class="hiking_img">
            <img src="assets/img/Круглогодичные.png" alt="season" />
            <p>
              В Крымских и Кавказских горах только проверенные тропы и самые
              красивые пейзажи
            </p>
          </div>
        </div>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide hiking_slider">
              <img src="assets/img/Веселые.png" alt="Веселые" />
              <p>
                В наших походах Вам не нужно ни о чем беспокоиться, мы обо всем
                позаботимся за Вас
              </p>
            </div>
            <div class="swiper-slide hiking_slider">
              <img src="assets/img/Безопасные.png" alt="Безопасные" />
              <p>
                Каждый наш поход проходит под чутким руководством специалистов
              </p>
            </div>
            <div class="swiper-slide hiking_slider">
              <img src="assets/img/Вкусные.png" alt="Вкусные" />
              <p>
                У нас разнообразные виды отдыха и даже маршруты с шашлыком и
                дикой лесной баней
              </p>
            </div>
            <div class="swiper-slide hiking_slider">
              <img src="assets/img/Круглогодичные.png" alt="Круглогодичные" />
              <p>
                В Крымских и Кавказских горах только проверенные тропы и самые
                красивые пейзажи
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- -------------------- -->

      <!-- Наши преимущества -->
      <div class="container">
        <h2>Только для Вас</h2>
        <div class="advantages_block">
          <div class="advantages_img">
            <img src="assets/img/Vector.svg" alt="" />
            <p>Скидка новому клиенту</p>
          </div>
          <div class="advantages_img">
            <img src="assets/img/Vector (1).svg" alt="" />
            <p>Индивидуальные туры</p>
          </div>
          <div class="advantages_img_none">
            <img src="assets/img/Vector (2).svg" alt="" />
            <p>Быстрая обратная связь</p>
          </div>
          <div class="advantages_img">
            <img src="assets/img/Vector (3).svg" alt="" />
            <p>Походы для любых возрастов</p>
          </div>
          <div class="advantages_img">
            <img src="assets/img/Vector (4).svg" alt="" />
            <p>Лучшие фотографии</p>
          </div>
          <div class="advantages_img_none">
            <img src="assets/img/Vector (5).svg" alt="" />
            <p>Психологические тренинги</p>
          </div>
        </div>
      </div>
    </section>
    <!-- --------------  -->

    <!-- Крым  -->
    <section class="caucasus_section">
      <div class="caucasus_fon_top"></div>
      <div class="caucasus_fon_center">
        <div class="container">
          <div class="caucasus_header">
            <div class="caucasus_header_title">Крым</div>
            <div class="nav_caucasus">
              <ul class="tabs">
                <li data-tab="1" class="tab_header active">Однодневные</li>
                <li data-tab="2" class="tab_header">с ночевкой</li>
                <li data-tab="3" class="tab_header">Экстрим</li>
                <li data-tab="4" class="tab_header">
                  психологический интенсив
                </li>
              </ul>
            </div>
          </div>

          <div data-tab-content="1" class="caucasus active">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle_img">
                <img src="assets/img/svg-crimea.svg" alt="" />
              </div>

              <div class="caucasus_subtitle">
                <p>
                  Однодневный поход – это прекрасная возможность отдохнуть на
                  свежем лесном, горном и морском воздухе. Крым богат красивыми
                  пешими маршрутами, которые мы проводим каждую неделю. Виды на
                  Чёрное море, на дикие лесные ущелья, на глубокие каньоны и
                  бескрайние просторы плато. Долина, немножко тихой воды и луч
                  заката — самые простые вещи, самые обыкновенные, самые
                  дорогие.
                </p>
              </div>
            </div>
            <div class="caucasus_img">
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_oneday_1.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_oneday_2.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_oneday_3.png"
                alt=""
              />
            </div>
          </div>

          <div data-tab-content="2" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle_img">
                <img src="assets/img/svg-crimea.svg" alt="" />
              </div>

              <div class="caucasus_subtitle">
                Поход с ночевкой - это увлекательное путешествие по горной
                местности Крыма с ночевками в палатке, разговорами у костра,
                совместное приготовление пищи и сбор дров, обустройство своего
                жилища для удобного и комфортного отдыха на сказочной природе.
                Это когда вместе с душевной компанией встречаешь солнышко из
                морской глади и вечером вместе его провожаешь.
              </div>
            </div>
            <div class="caucasus_img">
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_night_1.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_night_2.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_night_3.png"
                alt=""
              />
            </div>
          </div>

          <div data-tab-content="3" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle_img">
                <img src="assets/img/svg-crimea.svg" alt="" />
              </div>

              <div class="caucasus_subtitle">
                Экстрим туры в Крыму - это самое яркое, красочное и видовое
                путешествие, которое Вы можете себе позволить. С нашими опытными
                инструкторами любой человек сможет попробовать себя в такой
                активной деятельности. Обучим, проведем инструктаж, дадим все
                необходимое снаряжение, лишь бы Ваши эмоции остались на высоте.
                Для нас дороги Ваши впечатления.
              </div>
            </div>
            <div class="caucasus_img">
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_extream_1.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_extream_2.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_extream_3.png"
                alt=""
              />
            </div>
          </div>

          <div data-tab-content="4" class="caucasus">
            <div class="caucasus_desc">
              <div class="caucasus_subtitle_img">
                <img src="assets/img/svg-crimea.svg" alt="" />
              </div>
              <div class="caucasus_subtitle">
                Наша команда проводит семинары на природе, они для тех, кто
                вступил на путь самопознания и саморазвития, желает изменить
                своё восприятие, оздоровить и разгрузить психику, проработать
                внутренние проблемы, разобраться в себе и перезагрузить свою
                жизнь, посетить места силы и уникальные места крымской природы.
                С Вами буду работать опытный психотерапевт и опытный проводник.
              </div>
            </div>
            <div class="caucasus_img">
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_psycho_1.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_psycho_2.png"
                alt=""
              />
              <img
                class="caucasus_img_elbrus"
                src="assets/img/Rectangle_psycho_3.png"
                alt=""
              />
            </div>
          </div>
          <div class="caucasus_button">
            <div class="caucasus_btn_routes">
              <a href="schedule.html">Маршруты</a>
            </div>
            <div class="caucasus_btn_record">
              <a href="#" onclick="show()">Записаться</a>
            </div>
          </div>
        </div>
        <div class="caucasus_fon_bottom"></div>
      </div>
    </section>
    <!-- -----------------  -->

    <!-- Индивидуальные туры  -->
    <section class="tours">
      <div class="container">
        <div class="Individual_tours">
          <div class="Individual_tours_img_block">
            <div class="Individual_tours_img_top">
              <img src="assets/img/Фото 1.png" alt="Фото из похода " />
              <img src="assets/img/Фото 2.png" alt="Фото из похода " />
            </div>
            <div class="Individual_tours_img_bottom">
              <img src="assets/img/3.png" alt="Фото из похода " />
            </div>
          </div>
          <div class="Individual_tours_content">
            <div class="Individual_tours_text">
              <div class="Individual_tours_title">Индивидуальные туры</div>
              <div class="Individual_tours_desc">
                Если Вы ограничены во времени или хотите посетить определенное
                место с семьей или лично, то у нас есть услуга индивидуальных
                туров, где Вы сами назначаете Гиду время и место. Отправьте
                заявку на вашего личного гида сейчас, потому что в любую
                следующую минуту он может быть в походе.
              </div>
              <div class="Individual_tours_text_img">
                <img src="assets/img/4.png" alt="Фото" />
              </div>
              <div class="Individual_tours_text_bottom">
                Так же Вы можете найти нас в Вконтакте или в Телеграме.
              </div>
            </div>
            <div class="Individual_tours_contacts">
              <div class="Individual_tours_icon">
                <a href="http://vk.com/malstrim" title="#" rel="noopener" target="_blank"
                  ><img
                    class="Individual_tours_icon_vk"
                    src="assets/img/vk.svg"
                    alt=""
                /></a>
                <a href="http://t.me/vie_est_vita" title="#" rel="noopener" target="_blank"
                  ><img
                    class="Individual_tours_icon_tl"
                    src="assets/img/tl.svg"
                    alt=""
                /></a>
                <a
                  class="Individual_tours_icon_button"
                  href="#"
                  onclick="show()"
                  >Заявка</a
                >
              </div>
              <div class="Individual_tours_phones">
                <div class="Individual_tours_phones_1">
                  <img src="assets/img/tel.svg" alt="" />
                  <p>+7(978) 798-58-72</p>
                </div>
                <div class="Individual_tours_phones_1">
                  <img src="assets/img/tel.svg" alt="" />
                  <p>+7(978) 529-35-87</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -----------------------------------  -->

    <!-- Кавказ  -->
    <section class="caucasus_section">
      <div class="caucasus_fon_top"></div>
      <div class="caucasus_fon_center">
        <div class="container">
          <div class="caucasus_header">
            <div class="nav_caucasus">
              <ul class="tabs">
                <li data-tab="1" class="tab_header active">
                  восхождение на эльбрус
                </li>
                <li data-tab="2" class="tab_header">архыз</li>
                <li data-tab="3" class="tab_header">осетия</li>
                <li data-tab="4" class="tab_header">адыгея</li>
              </ul>
            </div>
            <div class="caucasus_header_title">Кавказ</div>
          </div>

          <div class="caucasus_tab">
            <div data-tab-content="1" class="caucasus active">
              <div class="caucasus_desc">
                <div class="caucasus_subtitle">
                    <p>На Эльбрус нужно ехать, чтобы:</p>
                  <ul>
                    <li>Побывать на высочайшей вершине Европы!</li>
                    <li>Встретить рассвет над Главным кавказским хребтом!</li>
                    <li>Лично постоять на леднике, где произошло сражение за Эльбрус.</li>
                    <li>Попробовать уникальную кавказскую кухню.</li>
                  </ul> 
                    <p>Все это возможно с нашей командой.</p>
                  
                </div>
                <div class="caucasus_subtitle_img">
                  <img src="assets/img/кавказ гора.png" alt="" />
                </div>
              </div>
              <div class="caucasus_img">
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/Эльбрус 1.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/Эльбрус 2.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/Эльбрус 3.png"
                  alt=""
                />
              </div>
            </div>

            <div data-tab-content="2" class="caucasus">
              <div class="caucasus_desc">
                <div class="caucasus_subtitle">
                  Дорогие туристы, мы можем сказать наверняка, что Архыз - это
                  одно из самых прекрасных мест на нашем материке, бесконечное
                  количество горных озер, волшебный лес, бурные водопады и реки,
                  разнообразная флора и фауна. А представьте жить в данном месте
                  несколько дней и дышать свежем воздухом и набераться
                  энергетикой дикой природы?
                </div>
                <div class="caucasus_subtitle_img">
                  <img src="assets/img/кавказ гора.png" alt="" />
                </div>
              </div>
              <div class="caucasus_img">
                <img class="caucasus_img_elbrus" src="assets/img/архыз 1.png" alt="" />
                <img class="caucasus_img_elbrus" src="assets/img/архыз 2.png" alt="" />
                <img class="caucasus_img_elbrus" src="assets/img/архыз 3.png" alt="" />
              </div>
            </div>

            <div data-tab-content="3" class="caucasus">
              <div class="caucasus_desc">
                <div class="caucasus_subtitle">
                  Вы когда нибудь мечтали попариться в горячих природных
                  источниках с видом на одну из самых высоких вершин Европы -
                  Казбек? Мы предлагаем Вам тур с посещением
                  достопримечательностей Северной Осетии, подойдем ближе к
                  леднику Майли и Колка, поваляемся в радоновых ваннах, пройдем
                  красивую долину вдоль реки Геналдон. И все это за один
                  насыщенный поход.
                </div>
                <div class="caucasus_subtitle_img">
                  <img src="assets/img/кавказ гора.png" alt="" />
                </div>
              </div>
              <div class="caucasus_img">
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/осетия 1.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/осетия 2.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/осетия 3.png"
                  alt=""
                />
              </div>
            </div>

            <div data-tab-content="4" class="caucasus">
              <div class="caucasus_desc">
                <div class="caucasus_subtitle">
                  Наша команда предлагает красивый тур по Адыгее в мае, а именно
                  по маршруту Большой и Малый Тхач, самое популярное место для
                  туристов, любителей увидеть лес как в русской сказке,
                  множество деревянных хижин в лесу, экстремальные броды, бурные
                  реки и бурые - медведи (будем осторожны)! И все это в мае,
                  когда еще нет скопления туристов желающих посмотреть на это
                  чудо.
                </div>
                <div class="caucasus_subtitle_img">
                  <img src="assets/img/кавказ гора.png" alt="" />
                </div>
              </div>
              <div class="caucasus_img">
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/адыгея 1.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/адыгея 2.png"
                  alt=""
                />
                <img
                  class="caucasus_img_elbrus"
                  src="assets/img/адыгея 3.png"
                  alt=""
                />
              </div>
            </div>
          </div>

          <div class="caucasus_button">
            <div class="caucasus_btn_routes">
              <a href="schedule.html">Маршруты</a>
            </div>
            <div class="caucasus_btn_record">
              <a href="#" onclick="show()">Записаться</a>
            </div>
          </div>
        </div>
        <div class="caucasus_fon_bottom"></div>
      </div>
    </section>
    <!-- ---------------------------------------  -->

    <!-- Наши лучшие фотографии  -->
    <section class="photo">
      <div class="container">
        <div class="photo_title">Наши лучшие фотографии</div>
        <div class="photo_img_block">
          <div class="photo_img">
            <img class="photo_img_wrap" src="assets/img/Ледник Майли.png" alt="" />
            <img
              class="photo_img_inner"
              src="assets/img/Ледник Майли(текст).png"
              alt=""
            />
          </div>
          <div class="photo_img">
            <img class="photo_img_wrap" src="assets/img/Осетия.png" alt="" />
            <img class="photo_img_inner" src="assets/img/Осетия(текст).png" alt="" />
          </div>
        </div>
        <div class="photo_img_block">
          <div class="photo_img">
            <img class="photo_img_wrap" src="assets/img/Крым.png" alt="" />
            <img class="photo_img_inner" src="assets/img/Крым (текст).png" alt="" />
          </div>
          <div class="photo_img">
            <img class="photo_img_wrap" src="assets/img/Архыз, река Псыш.png" alt="" />
            <img
              class="photo_img_inner"
              src="assets/img/Архыз, река Псыш(тест).png"
              alt=""
            />
          </div>
        </div>
        <div class="photo_img_block">
          <div class="photo_img">
            <img
              class="photo_img_wrap"
              src="assets/img/Осетия, на Крестах.png"
              alt=""
            />
            <img
              class="photo_img_inner"
              src="assets/img/Осетия, на Крестах(текст).png"
              alt=""
            />
          </div>
          <div class="photo_img">
            <img class="photo_img_wrap" src="assets/img/Архыз, Орленок.png" alt="" />
            <img
              class="photo_img_inner"
              src="assets/img/Архыз, Орленок(текст).png"
              alt=""
            />
          </div>
        </div>

        <!-- Галерея  -->

        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img
                  class="photo_img_wrap_gallery"
                  src="assets/img/Ледник Майли.png"
                  alt=""
                />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Ледник Майли(текст).png"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img
                  class="photo_img_wrap_gallery"
                  src="assets/img/Осетия.png"
                  alt=""
                />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Осетия(текст).png"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img class="photo_img_wrap_gallery" src="assets/img/Крым.png" alt="" />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Крым (текст).png"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img
                  class="photo_img_wrap_gallery"
                  src="assets/img/Архыз, река Псыш.png"
                  alt=""
                />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Архыз, река Псыш(тест).png"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img
                  class="photo_img_wrap_gallery"
                  src="assets/img/Осетия, на Крестах.png"
                  alt=""
                />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Осетия, на Крестах(текст).png"
                  alt=""
                />
              </div>
            </div>
            <div class="swiper-slide photo_img_gallery_clide">
              <div class="photo_img_gallery">
                <img
                  class="photo_img_wrap_gallery"
                  src="assets/img/Архыз, Орленок.png"
                  alt=""
                />
                <img
                  class="photo_img_inner_gallery"
                  src="assets/img/Архыз, Орленок(текст).png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <!--------------------- -->
        <div class="photo_subtitle">
          <a href="http://vk.com/malstrim" rel="noopener" target="_blank">
            Посмотреть<span>&nbsp больше &nbsp </span> фотографий Вы можете на
            нашей странице Вконтакте</a
          >
          <a
            href="http://vk.com/malstrim"
            rel="noopener" target="_blank"
            class="photo_subtitle_link"
            >vk.com/malstrim</a
          >
          <a href="http://vk.com/malstrim" title="#" rel="noopener" target="_blank"
            ><img class="photo_subtitle_link_vk" src="assets/img/VK white.svg" alt=""
          /></a>
        </div>
      </div>
    </section>
    <!-- -------------------------------------  -->

    <!-- Отзывы  -->
    <section class="reviews">
      <h5>Отзывы</h5>
      <div class="buttons">
        <button class="controls" id="previous">
          <img src="assets/img/Кнопка лево.png" alt="previou" />
        </button>
        <button class="controls" id="pause">
          <img src="assets/img/Кнопка.png" alt="pause" />
        </button>
        <button class="controls" id="next">
          <img src="assets/img/Кнопка право.png" alt="next" />
        </button>
      </div>

      <div class="container">
        <ul id="slides">
          <li class="slide showing">
            <div class="review">
              <div class="avatar">
                <img src="assets/img/ava1.png" alt="r1" />
              </div>
              <div>
                <p class="text-review">
                  <span class="text-review-span">Мировита Феоктистова</span>
                  Маршрут полный контрастов, событий и эмоций). Неожиданные
                  встречи, таинственные пещеры, опьяняющие цветущим разнотравьем
                  предгорья... Мы даже несколько буков успели пересадить
                  подальше от тропы)) Маршрут очень красивый, гид Максим - очень
                  внимательный, терпеливый и всегда позитивный. С ним интересно
                  и очень спокойно. Если в поход по Крыму- то только с Мальстрим
                </p>
              </div>
            </div>
          </li>
          <li class="slide">
            <div class="review">
              <div class="avatar">
                <img src="assets/img/ava2.png" alt="r2" />
              </div>
              <div>
                <p class="text-review">
                  <span class="text-review-span">Алена Олейник</span>
                  Первый раз ходила в поход с Мальстримом и подучила массу
                  положительных впечатлений. От интересного маршрута. От
                  неординарных людей. От захватывающих историй. От впечатляющего
                  опыта. От замечательного чувства юмора. От дружеской
                  атмосферы. Такие редкие составляющие и все в одном походе.
                  Ребята, вы огромные молодцы! я теперь ваш клиент надолго.
                </p>
              </div>
            </div>
          </li>
          <li class="slide">
            <div class="review">
              <div class="avatar">
                <img src="assets/img/ava3.png" alt="r3" />
              </div>
              <div>
                <p class="text-review">
                  <span class="text-review-span">Наталья Иванюк</span>
                  Спасибо команде! очень приятно впечатлена ответственностью
                  организаторов и вниманием к каждому участнику! С удовольствием
                  еще пойду с Мальстрим наслаждаться творением природы! Желаю
                  команде всего самого наилучшего и всегда оставаться такими
                  веселыми!
                </p>
              </div>
            </div>
          </li>
          <li class="slide">
            <div class="review">
              <div class="avatar">
                <img src="assets/img/ava4.png" alt="r4" />
              </div>
              <div>
                <p class="text-review">
                  <span class="text-review-span">Сургей Тимофеев</span>
                  Супер маршрут! Супер проводник! Супер компания!в общем все
                  мега супер!
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <script src="./script.js"></script>
      <div class="mobil">
        <p>посмотреть можно здесь</p>
        <a href="#"><img src="assets/img/VK_logo.jpg" alt="VK" class="logo" /></a>
      </div>

      <div class="photo_subtitle photo_subtitle_new">
        <a href="http://vk.com/malstrim" rel="noopener" target="_blank">
          Посмотреть<span>&nbsp больше &nbsp </span> отзывов Вы можете на нашей
          странице Вконтакте
        </a>
        <a
          href="http://vk.com/malstrim"
          rel="noopener" target="_blank"
          class="photo_subtitle_link"
          >vk.com/malstrim</a
        >
        <a href="http://vk.com/malstrim" title="#"  rel="noopener" target="_blank"
          ><img class="photo_subtitle_link_vk" src="assets/img/VK white.svg" alt=""
        /></a>
      </div>

      <!-- <div class="text">
        <p>Посмотреть больше отзывов Вы можете на нашей странице ВКонтакте</p>
        <a href="#"><img src="assets/img/VK_logo.jpg" alt="VK" class="logo" /></a>
      </div> -->
      <div class="footer_svg"></div>
    </section>


    <?php get_footer(); ?>