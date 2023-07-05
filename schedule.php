
<?php
/*
Template Name: schedule
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>МАЛЬСТРИМ</title>

<?php get_header('sch'); ?>


<!-- main -->
<main>
      <div class="container-main ">
        <div>
          <div class="menu_list">
            <div class="mail_list_li">
              <p class="text1">Выберите регион</p>
              <div class="navigashion">
                <ul class="list_reset_styles">
                  <li>
                    <a class="n_link active-link1 n_list n_list1 text2" href="reminder.html">Крым</a>
                  </li>
                  <li>
                    <a class="n_link active-link2 n_list n_list2 text2" href="kavkaz.html"
                      >Кавказ</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <section class="main-menu-night">
              <div class="main-menu_list">
                <button type="button" id="tab-night-btn1" class="main-menu-li tabs-memo-active1">Однодневные</button>
                <div class="divider text2"></div>
                <button type="button" id="tab-night-btn2" class="main-menu-li">С ночевкой</button>
                <div class="divider text2"></div>
                <button type="button" id="tab-night-btn3" class="main-menu-li">Экстрим</button>
                <div class="divider text2"></div>
                <button type="button" id="tab-night-btn4" class="main-menu-li"
                  >Психологический интенсив</button>
              </div>

              <!-- Dropdown menu start -->
              <div class="main-menu-drop">
                <div class="dropdown">
                  <button class="drop-btn" onclick="myFunction()" id="drop-btn-1">Однодневные</button>
                  <div class="dropdown-content" id="drop-menu-1">
                    <button class="drop-link" id="dr-link1">Однодневные</button>
                    <button class="drop-link" id="dr-link2">С ночевкой</button>
                    <button class="drop-link" id="dr-link3">Экстрим</button>
                    <button class="drop-link" id="dr-link4">Психологический интенсив</button>
                  </div>
                </div>
              </div>
              <!-- Dropdown menu end -->

            </section>
          </div>
        </div>
        <section class="routes">
          <div class="routes-block">
          <div class="tabs-item1 tabs-item-active1"  id="tabText1">
            <div class="routes_list">
                <figure class="description-img">
                  <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/Rectangle 188.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">01.04.2023</div>
                  <div class="name-place">Через гору Демерджи</div>
                  <div class="description-place">
                    Долина приведений, водопад Джурла, гора Аленга.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">600 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>

                </div>
                </figcaption>
                </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img2.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">02.04.2023</div>
                  <div class="name-place">На гору Чатры-Даг, Секвойная роща</div>
                  <div class="description-place">
                    Путь на одну из самых высоких гор Крыма.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">600 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
            </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img8.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">08.04.2023</div>
                  <div class="name-place">К месту силы на гору Бойко</div>
                  <div class="description-place">
                    Популярное место в Крыму, где можно зарядиться силой.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img3.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">09.04.2023</div>
                  <div class="name-place">На Барскую поляну, Орлиный залет</div>
                  <div class="description-place">
                    Грот с озером внутри, Юсуповское озеро.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img9.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">15.04.2023</div>
                  <div class="name-place">В Большой каньон Крыма</div>
                  <div class="description-place">
                    Одно из самых красивых мест в Крыму, ванна молодости.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img4.svg" alt="" />

                <div class="description-text">
                  <div class="date-text">16.04.2023</div>
                  <div class="name-place">Шашлычный поход с лесной баней</div>
                  <div class="description-place">
                    Лес, банька, шашлык, легкий поход - лучший выбор.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1500 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img10.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">22.04.2023</div>
                  <div class="name-place">
                    На гору Парагильмен и Бирюзовое озеро
                  </div>
                  <div class="description-place">
                    Бирюзовое озеро среди дикого леса, лесная тропа.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">600 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img5.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">23.04.2023</div>
                  <div class="name-place">Фотопоход в обсерваторию</div>
                  <div class="description-place">
                    Купольные сооружения, телескоп, лесное дикое озеро.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img11.svg" alt="" />

                <div class="description-text">
                  <div class="date-text">01.05.2023</div>
                  <div class="name-place">На Чернореченский каньон</div>
                  <div class="description-place">
                    Самый длинный каньон Крыма, лазурная вода.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img6.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">14.05.2023</div>
                  <div class="name-place">На пик Космос, Тропа Голицина</div>
                  <div class="description-place">
                    Долина Ада и Рая, Лестница Тавров, мыс Капчик.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1300 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>

              <div class="routes_list">
                <figure class="description-img">
                  <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img12.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">20.05.2023</div>
                  <div class="name-place">К месту силы, Храм Солнца, Ильяс Кая</div>
                  <div class="description-place">
                    Сюда приходят зарядиться энергетическими лучами.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                  </div>
                </figcaption>
              </figure>
              </div>
              <div class="routes_list">
                <figure class="description-img">
                <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img7.svg" alt="" />

                <figcaption class="description-text">
                  <div class="date-text">21.04.2023</div>
                  <div class="name-place">По Таракташской тропе</div>
                  <div class="description-place">
                    Слоеные скалы с видом на Черное море и сосновый лес.
                  </div>
                  <div class="main-block-buy">
                  <div class="price">1200 руб</div>
                  <a href="route_details.html" class="main-block-btn">Подробнее</a>
                </div>
                </figcaption>
              </figure>
              </div>

            <div class="main-request">
              <p class="main-request-info">
                При вашем первом походе с Мальстрим, <b>скидка 15%</b> от указанных
                цен
              </p>
              <p class="main-request-info">
                Если Вам не подошел не один из походов мы можем провести
                <b>индивидуальный тур</b> в любую точку Крыма и в любое время.
              </p>
              <button class="main-request-btn" type="submit" onclick="show()">Заявка</button>
            </div>
          </div>
        </div>
      </section>

        <section class="routes">
          <div class="routes-block">
          <div class="tabs-item1" id="tabText2">
            <div class="routes_list">
            <figure class="description-img">
              <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img13.png" alt="" />

            <figcaption class="description-text">
              <div class="date-text">29-30.04.2023</div>
              <div class="name-place">Закаты и рассветы в горах Крыма</div>
              <div class="description-place">
                Заночуем на одной из лучших смотровых площадок Крыма.
              </div>
              <div class="main-block-buy">
              <div class="price">1200 руб</div>
              <a href="route_details.html" class="main-block-btn">Подробнее</a>
            </div>
            </figcaption>
            </figure>
            </div>
            <div class="routes_list">
            <figure class="description-img">
            <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img14.png" alt="" />

            <figcaption class="description-text">
              <div class="date-text">06-09.05.2023</div>
              <div class="name-place">Крымская сказка в дубовых лесах</div>
              <div class="description-place">
                Шум реки, шорох лесных зверей и сказочный лес.
              </div>
              <div class="main-block-buy">
              <div class="price">1600 руб</div>
              <a href="route_details.html" class="main-block-btn">Подробнее</a>
              </div>
              </figcaption>
            </figure>
            </div>
            <div class="routes_list">
            <figure class="description-img">
            <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img15.png" alt="" />

            <figcaption class="description-text">
              <div class="date-text">10-12.06.2023</div>
              <div class="name-place">Через горы к Черному морю</div>
              <div class="description-place">
                С высоких гор, через водопады спустимся к морю.
              </div>
              <div class="main-block-buy">
              <div class="price">2000 руб</div>
              <a href="route_details.html" class="main-block-btn">Подробнее</a>
              </div>
            </figcaption>
            </figure>
          </div>

        <div class="main-request">
          <p class="main-request-info">
            При вашем первом походе с Мальстрим, <b>скидка 15%</b> от указанных
            цен
          </p>
          <p class="main-request-info">
            Если Вам не подошел не один из походов мы можем провести
            <b>индивидуальный тур</b> в любую точку Крыма и в любое время.
          </p>
          <button class="main-request-btn" type="submit" onclick="show()">Заявка</button>
        </div>
      </div>
    </div>
    </section>
    <section class="routes">
      <div class="routes-block">
      <div class="tabs-item1" id="tabText3">
        <div class="routes_list">
        <figure class="description-img">
          <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img16.svg" alt="" />

        <figcaption class="description-text">
          <div class="date-text">22.04.2023</div>
          <div class="name-place">Дюльфер Мисхорских гротов</div>
          <div class="description-place">
            Несколько спусков с плато Ай-Петри через грот.
          </div>
          <div class="main-block-buy">
          <div class="price">4000 руб</div>
          <a href="route_details.html" class="main-block-btn">Подробнее</a>
        </div>
        </figcaption>
        </figure>
        </div>
        <div class="routes_list">
        <figure class="description-img">
        <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img17.svg" alt="" />

        <figcaption class="description-text">
          <div class="date-text">13.05.2023</div>
          <div class="name-place">Виа – Фератта на Батилимане</div>
          <div class="description-place">
            Экстремальный подъем по железной лестнице.
          </div>
          <div class="main-block-buy">
          <div class="price">3000 руб</div>
          <a href="route_details.html" class="main-block-btn">Подробнее</a>
          </div>
          </figcaption>
        </figure>
        </div>
        <div class="routes_list">
        <figure class="description-img">
        <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img18.svg" alt="" />

        <figcaption class="description-text">
          <div class="date-text">20.05.2023</div>
          <div class="name-place">Виа – Фератта на Ильяс-Кая</div>
          <div class="description-place">
            Экстремальный подъем по железной лестнице.
          </div>
          <div class="main-block-buy">
          <div class="price">3000 руб</div>
          <a href="route_details.html" class="main-block-btn">Подробнее</a>
          </div>
        </figcaption>
        </figure>
      </div>

    <div class="main-request">
      <p class="main-request-info">
        При вашем первом походе с Мальстрим, <b>скидка 15%</b> от указанных
        цен
      </p>
      <p class="main-request-info">
        Если Вам не подошел не один из походов мы можем провести
        <b>индивидуальный тур</b> в любую точку Крыма и в любое время.
      </p>
      <button class="main-request-btn" type="submit" onclick="show()">Заявка</button>
    </div>
  </div>
</div>
</section>
<section class="routes">
  <div class="routes-block">
  <div class="tabs-item1" id="tabText4">
    <div class="routes_list">
    <figure class="description-img">
      <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img19.svg" alt="" />

    <figcaption class="description-text">
      <div class="date-text">По набору</div>
      <div class="name-place">Перезагрузка на природе</div>
      <div class="description-place">
        Активный отдых совместно с психологическим интенсивом.
      </div>
      <div class="main-block-buy">
      <div class="price">15000 руб</div>
      <a href="route_details.html" class="main-block-btn">Подробнее</a>
    </div>
    </figcaption>
    </figure>
    </div>
    <div class="routes_list">
      <figure class="description-img">
        <img class="beautiful-views" src="<?php bloginfo( 'template_url'); ?> . /assets/img 1/img20.svg" alt="" />

        <figcaption class="description-text">
          <div class="date-text">По набору</div>
          <div class="name-place">Погружение на природе</div>
          <div class="description-place">
            Активный отдых совместно с психологическим интенсивом.
          </div>
          <div class="main-block-buy">
          <div class="price">35000 руб</div>
          <a href="404.html" class="main-block-btn">Подробнее</a>
          </div>
          </figcaption>
      </figure>
    </div>


          <div class="main-request">
            <p class="main-request-info">
              При вашем первом походе с Мальстрим, <b>скидка 15%</b> от указанных
              цен
            </p>
            <p class="main-request-info">
              Если Вам не подошел не один из походов мы можем провести
              <b>индивидуальный тур</b> в любую точку Крыма и в любое время.
            </p>
            <button class="main-request-btn" type="submit" onclick="show()">Заявка</button>
          </div>
        </div>
</div>
</section>

      </div>

    </main>
    <div class="footer_svg"></div>


<?php get_footer(); ?>