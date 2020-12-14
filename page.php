<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hungry
 */

get_header();
?>

	<div class="social-box">
        <div class="social-box__item"><i class="fab fa-facebook-f"></i></div>
        <div class="social-box__item"><i class="fab fa-twitter"></i></div>
        <div class="social-box__item"><i class="fab fa-instagram"></i></div>
    </div>

    <section class="section s-about">
        <div class="container">
            <div class="content content--left">
                <div class="content__text-field">
                    <div class="content__title">
                        <h2>about us</h2>
                    </div>
                    <div class="content__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                        velit
                        maximus, molestie est a, tempor magna.</div>
                    <div class="content__text">Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                        Morbi
                        non ultrices ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a
                        sollicitudin lorem quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla
                        facilisis
                        semper laoreet.</div>
                </div>
                <div class="content__image">
                    <img class="content__img" src="<?php the_field('about-img') ?>" alt="about">
                    <div class="content__square content__square--pos-right"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section s-team" style="background-image: url(<?php the_field('team-bg') ?>)">
        <div class="container">
            <div class="section__header">OUR TEAM</div>
            <div class="content content--reverse">
                <div class="content__text-field text-color--white">
                    <div class="content__title">
                        <h2>MASTER CHEF</h2>
                    </div>
                    <div class="content__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                        velit maximus, molestie est a, tempor magna.</div>
                    <div class="content__text">Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                        Morbi non ultrices ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a
                        sollicitudin lorem quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla
                        facilisis semper laoreet.</div>
                </div>
                <div class="content__image">
                    <div class="content__square content__square--pos-left"></div>
                    <img class="content__img" src="<?php the_field('team-img') ?>" alt="team">
                </div>
            </div>
        </div>
    </section>
    <section class="section s-book">
        <div class="container">
            <div class="content">
                <div class="content__form-wrapper">
                    <div class="content__title">
                        <h2>book a table</h2>
                    </div>
                    <form action="#" class="order-form">
                        <input type="text" class="order-form__item" placeholder="Name">
                        <input type="text" class="order-form__item" placeholder="Email">
                        <input type="tel" class="order-form__item" placeholder="Phone">
                        <input type="number" class="order-form__item" placeholder="People" min="1" max="100">
                        <input type="text" class="order-form__item" placeholder="Date (mm/dd)">
                        <input type="time" class="order-form__item" placeholder="Time">
                        <button class="order-form__btn btn btn--colored">Book now</button>
                    </form>
                </div>
                <div class="content__image image">
                    <img src="<?php the_field('book-img') ?>" alt="" class="content__img">
                    <div class="content__square content__square--pos-right content__square--small"></div>
                </div>
            </div>
            <div class="section__footer">Mon - Fri: 8PM - 10PM, Sat - Sun: 8PM - 3AM, Phone: +40 729 131 637/+40 726 458
                782</div>
        </div>
    </section>
    <section class="section s-spec">
        <div class="container">
            <div class="section__header">specialties</div>
            <div class="content content--reverse">
                <div class="content__text-field text-color--white">
                    <div class="content__title">
                        <h2>chocolate pancakes</h2>
                    </div>
                    <div class="content__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at
                        velit maximus, molestie est a, tempor magna.
                    </div>
                    <div class="content__text">Integer ullamcorper neque eu purus euismod, ac faucibus mauris posuere.
                        Morbi non ultrices ligula. Sed dictum, enim sed ullamcorper feugiat, dui odio vehicula eros, a
                        sollicitudin lorem quam nec sem. Mauris tincidunt feugiat diam convallis pharetra. Nulla
                        facilisis semper laoreet.
                    </div>
                </div>
                <div class="content__image">
                    <div class="content__square content__square--pos-left"></div>
                    <img src="/img/spec-img.png" alt="" class="content__img">
                </div>
            </div>
            <div class="section__footer">
                <div class="pagination">
                    <div class="pagination__item"></div>
                    <div class="pagination__item"></div>
                    <div class="pagination__item"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section s-menu">
        <div class="container">
            <div class="content__wrapper--full">
                <div class="content__title">
                    <h2>DELICIOUS MENU</h2>
                </div>
                <div class="content__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                    </br>at velit maximus, molestie est a, tempor magna.
                </div>
                <ul class="content__menu">
                    <li class="content__menu-item">SOUPE</li>
                    <li class="content__menu-item">PIZZA</li>
                    <li class="content__menu-item">PASTA</li>
                    <li class="content__menu-item">DESERT</li>
                    <li class="content__menu-item">WINE</li>
                    <li class="content__menu-item">BEER</li>
                    <li class="content__menu-item">DRINKS</li>
                </ul>
                <div class="carte">
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                    <div class="carte__item">
                        <div class="carte__title">
                            PIZZA QUATRO STAGIONI
                            <span class="carte__price">55,68 USD</span>
                        </div>
                        <!-- <div class="carte__price">
                                55,68 USD
                            </div> -->
                        <div class="carte__descr">
                            Integer ullamcorper neque eu purus euismod
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section s-events">
        <div class="container">
            <div class="section__header">
                PRIVATE EVEnTS
            </div>
            <div class="content">
                <div class="content__image">
                    <div class="content__square content__square--pos-left"></div>
                    <img src="/img/events1-img.png" alt="" class="content__img">
                    <!-- <div class="image__title image__title--pos-right">
                        <p class="image__title-text">weddings</p>
                    </div> -->
                </div>
                <div class="content__image">
                    <!-- <div class="image__title image__title--pos-left">
                        <p class="image__title-text rotate">corporate parties</p>
                    </div> -->
                    <img src="/img/events2-img.png" alt="" class="content__img">
                    <div class="content__square content__square--pos-right"></div>
                </div>
            </div>
            <div class="section__footer text-color--white-opacity">
                For private events please call: +40 729 131 637/+40 726 458 782 or use the contact form.
            </div>
        </div>
    </section>
    <section class="section s-slider">
        <div class="container">
            <div class="slider">
                <img src="/img/slider-img1.png" alt="" class="slider__item">
                <img src="/img/slider-img2.png" alt="" class="slider__item">
                <img src="/img/slider-img3.png" alt="" class="slider__item">
                <img src="/img/slider-img4.png" alt="" class="slider__item">
            </div>
        </div>
    </section>
    <section class="section s-contact">
        <div class="container">
            <div class="content__wrapper--full">
                <div class="content__title">
                    <h2>CONTACT</h2>
                </div>
                <div class="content__subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                    </br> at velit maximus, molestie est a, tempor magna.
                </div>
                <form class="contact-form">
                    <input type="text" class="contact-form__item" id="name" placeholder="Name">
                    <input type="text" class="contact-form__item" id="email" placeholder="Email">
                    <input type="text" class="contact-form__item" id="phone" placeholder="Phone">
                    <textarea class="contact-form__item contact-form__item--textarea" id="messege" placeholder="Messege"></textarea>
                    <div class="contact-form__contact-list">
                        <div class="contact-form__contact-list-item">
                            <span class="fas fa-map-marker-alt contact-form__icons"></span>
                            5th London Boulevard, U.K.
                        </div>
                        <div class="contact-form__contact-list-item">
                            <span class="fas fa-phone contact-form__icons"></span>
                            +40 729 131 637/+40 726 458 782  
                        </div>
                        <div class="contact-form__contact-list-item">
                            <span class="fas fa-envelope contact-form__icons"></span>
                            office@mindblister.com
                        </div>      
                    </div>
                    <div class="contact-form__btn btn btn--colored">SEND MESSAGE</div>
                </form>
                
            </div>
        </div>
    </section>
    <section class="section s-map">
        <div class="map"></div>
    </section>

<?php

get_footer();
