<?php get_header( $name ); ?>


<section class="slider">
    <div class="container">
        <div class="slider_inner">
<?php
global $post;
$args = array( 'posts_per_page' => 0, 'category' => 2 );
$myposts = get_posts( $args );
foreach( $myposts as $post ){ setup_postdata($post);
    ?>

    <div class="slider_item">
                <div class="slider_item-content">
                     <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
                    <div class="slider_title">
                       <?php the_ID(); ?> <?php the_title(); ?>
                    </div>
                    <div class="slider_text">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">Оставить заявку</a>

                </div>
            </div>
    <?php
}
wp_reset_postdata();
?>
        </div>
    </div>
</section>




<section class="slider">
    <div class="container">
        <div class="slider_inner">

            <!--FIRST SLIDE-->
            <div class="slider_item">
                <div class="slider_item-content">
                    <div class="slider_title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider_text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">
                        Оставить заявку
                    </a>
                </div>
            </div>
            <!--SECOND SLIDE-->
            <div class="slider_item">
                <div class="slider_item-content">
                    <div class="slider_title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider_text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider_btn default_btn">
                        Оставить заявку
                    </a>
                </div>
            </div>
            <!--THIRD SLIDE-->
            <div class="slider_item">
                <div class="slider_item-content">
                    <div class="slider_title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider_text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:" class="slider_btn default_btn">
                        Оставить заявку
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="services_top">
            <div class="services_title-box">
                <div class="services_title">
                    Наши услуги
                </div>
                <div class="services_text">
                    Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех судебных инстанциях.
                </div>
            </div>
            <div class="services_btn">
                <a href="#">Показать все услуги</a>
            </div>
        </div>
        <div class="services_items">
            <div class="services_item">
                <img src="img/about-1.png" alt="">

            <div class="services_item-title">
                Банкротство и ликвидация
            </div>
            <div class="services_item-text">
                Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности
            </div>
            <div class="services_item-btn">
                <a class="services_item-link">Подробнее</a>
                <a data-fancybox data-src="#modal" href="javascript:" class="default_btn">
                    Заказать
                </a>
            </div>
            </div>
            <div class="services_item">
                <img src="img/about-2.png" alt="">

                <div class="services_item-title">
                    Адвокатское сопровождение
                </div>
                <div class="services_item-text">
                    Мы гарантируем полное профессиональное обслуживание клиентов в заявленных сферах деятельности и соблюдение
                    конфиденциальности.
                </div>
                <div class="services_item-btn">
                    <a class="services_item-link">Подробнее</a>
                    <a data-fancybox data-src="#modal" href="javascript:" class="default_btn">
                        Заказать
                    </a>
                </div>
            </div>
            <div class="services_item">
                <img src="img/about-3.png" alt="">

                <div class="services_item-title">
                    Налоговый аудит
                </div>
                <div class="services_item-text">
                    Налоговый аудит проводят перед проведением налоговых проверок; при оценке возможных налоговых рисков; при оптимизации налогообложения.
                </div>
                <div class="services_item-btn">
                    <a class="services_item-link">Подробнее</a>
                    <a data-fancybox data-src="#modal" href="javascript:" class="default_btn">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="about_inner">
        <div class="about_title">
            О компании
        </div>
        <div class="about_text">
            Компания специализируется на оказании услуг в сфере корпоративного права, налогового консалтинга, представительства в судах, ликвидации и банкротства предприятий. На сегодняшний день, коллектив компании объединяет
            высокопрофессиональных экспертов имеющих
        </div>
        <a href="#" class="about_btn default_btn">
            Узнать больше
        </a>
        </div>
    </div>
</section>
<section class="form">
    <div class="container">
        <div class="form_inner">
            <div class="form_content">
                <div class="form_title-box">
                    <div class="form_title">
                        Получить консультацию
                    </div>
                    <div class="form_text">
                        Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех судебных инстанциях.
                    </div>
                </div>
                <div class="form_box">
                    <form>
                        <div class="form_box-inner">
                            <div class="form_box-left">
                                <label>
                                    E-mail
                                    <input type="text" required>
                                </label>
                                <label>
                                    Контактный телефон
                                    <input type="tel" required>
                                </label>
                                <label>
                                    ФИО
                                    <input type="text" required>
                                </label>
                                <label>
                                    Тема вопроса
                                    <select required>
                                        <option>------</option>
                                        <option>------</option>
                                        <option>------</option>
                                        <option>------</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form_box-right">
                                <label>Сообщение
                                    <textarea required></textarea>
                                </label>
                                <button class="default_btn" type="submit">Получить консультацию</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <div class="advantages_inner">
            <div class="advantages_item">
                <div class="advantages_title">
                    Десятки добровольных ликвидаций ежемесячно
                </div>
                <div class="advantages_text">
                    Мы умеем минимизировать все риски в процессе добровольной ликвидации юридических лиц.
                </div>
            </div>
            <div class="advantages_item">
                <div class="advantages_title">
                    Отличное знание законов в сфере банкротства
                </div>
                <div class="advantages_text">
                    Позволяют нам эффективно отстаивать как интересы кредиторов, так и интересы собственников проблемной организации.
                </div>
            </div>
            <div class="advantages_item">
                <div class="advantages_title">
                    Большой опыт сопровождения банкротства
                </div>
                <div class="advantages_text">
                    Мы обладаем большим опытом сопровождения процедур банкротства предприятий.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="news_top">
            <div class="news_title-box">
                <div class="news_title">
                    Новости Компании
                </div>
                <div class="news_text">
                    Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех судебных инстанциях.
                </div>
            </div>
            <div class="news_btn">
                <a href="#">Открыть все новости</a>
            </div>
        </div>
        <div class="news_inner">
            <div class="news_slider">
                <div class="news_slider-inner">
                    <div class="news_slider-item">
                        <div class="news_slider-title">Банкротство и ликвидация предприятия в Украине</div>
                        <div class="news_slider-text">«На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»
                        </div>
                        <div class="news_slider-author">Андрей Ворошилов, генеральный директор компании Bankom</div>
                    </div>
                    <div class="news_slider-item">
                        <div class="news_slider-title">Банкротство и ликвидация предприятия в Украине</div>
                        <div class="news_slider-text">«На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»
                        </div>
                        <div class="news_slider-author">Андрей Ворошилов, генеральный директор компании Bankom</div>
                    </div>
                    <div class="news_slider-item">
                        <div class="news_slider-title">Банкротство и ликвидация предприятия в Украине</div>
                        <div class="news_slider-text">«На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права. На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»
                        </div>
                        <div class="news_slider-author">Андрей Ворошилов, генеральный директор компании Bankom</div>
                    </div>
                </div>
            </div>
            <a href="#" class="news_blog">
                <div class="news_images">
                    <img src=" <?php bloginfo('template_url'); ?>/app/img/news-1.jpg" alt="news">
                    <div class="news_date">03.04</div>
                </div>
                <div class="news_blog-title">Новость компании </div>
                <div class="news_blog-text">На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»</div>
            </a>
            <a href="#" class="news_blog">
                <div class="news_images">
                    <img src="img/news-2.jpg" alt="news">
                    <div class="news_date">03.04</div>
                </div>
                <div class="news_blog-title">Новость компании </div>
                <div class="news_blog-text">На сегодняшний день, коллектив компании объединяет высокопрофессиональных экспертов имеющих специализации в отдельных областях права...»
            </div>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>