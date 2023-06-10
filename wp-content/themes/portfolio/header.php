<!DOCTYPE html>
<html class="is-touchscreen page-is-loaded dom-is-ready" style="--vh: 10px; --scrollBarWidth: 15px; --headerHeight: 70px;" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Nikita Kozlov. Frontend developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>
<div class="flow-container">
    <!-- === HEADER === -->
    <header class="header is-scrolled" data-js-header="">
        <div class="header__inner container">
            <a class="header__logo logo" href="home.php" aria-label="Home page" title="To home page">
                <svg class="logo__svg" width="64" height="64" viewBox="0 0 64 64" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M45.6001 34.7586C45.6001 33.6157 44.5258 32.6896 43.2001 32.6896H20.8C19.4743 32.6896 18.4 33.6157 18.4 34.7586V51.3103C18.4 51.6909 18.7586 52 19.2 52H44.8001C45.2415 52 45.6001 51.6909 45.6001 51.3103V34.7586ZM32.8412 37.9889L29.6412 46.2647C29.5019 46.6256 29.7283 47.0166 30.1476 47.1372C30.5662 47.2573 31.0198 47.0621 31.1597 46.7007L34.3597 38.4248C34.499 38.064 34.2726 37.6729 33.8533 37.5523C33.4347 37.4322 32.9812 37.6274 32.8412 37.9889ZM27.8658 46.1L24.9619 42.3447L27.8658 38.5895C28.1105 38.2723 28.0115 37.8441 27.6444 37.6328C27.2765 37.4219 26.7797 37.5072 26.5347 37.8237L23.3347 41.9617C23.1554 42.1935 23.1554 42.4955 23.3347 42.7271L26.5347 46.865C26.7794 47.1815 27.2761 47.2671 27.6444 47.0559C28.0115 46.845 28.1108 46.4167 27.8658 46.0993V46.1ZM37.4658 46.8654L40.6658 42.7275C40.8451 42.4956 40.8451 42.1936 40.6658 41.9621L37.4658 37.8241C37.2212 37.5076 36.7244 37.422 36.3562 37.6333C35.989 37.8442 35.8897 38.2724 36.1347 38.5899L39.0387 42.3451L36.1347 46.1004C35.8901 46.4175 35.989 46.8458 36.3562 47.057C36.724 47.2679 37.2208 47.1826 37.4658 46.8661V46.8654Z"
                          fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M43.2 21.6552C43.2 26.9877 38.1857 31.3103 32 31.3103C25.8143 31.3103 20.8 26.9877 20.8 21.6552C20.8 16.3227 25.8143 12 32 12C38.1857 12 43.2 16.3227 43.2 21.6552Z"
                          fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.8 39.2126C13.8104 42.4657 12 46.692 12 51.3103C12 51.6909 12.3586 52 12.8 52H16.9368C16.8478 51.7842 16.8 51.5523 16.8 51.3103L16.8 39.2126Z"
                          fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M47.2 39.2126V51.3103C47.2 51.5523 47.1522 51.7842 47.0632 52H51.2C51.6414 52 52 51.6909 52 51.3103C52 46.6918 50.1896 42.4654 47.2 39.2126H47.2Z"
                          fill="white"></path>
                </svg>
            </a>
            <nav class="header__menu hidden-mobile">
                <ul class="header__menu-list">
                    <li class="header__menu-item">
                        <button class="header__menu-button" type="button"
                                onClick="document.getElementById('about').scrollIntoView();"> About
                        </button>
                    </li>
                    <li class="header__menu-item">
                        <button class="header__menu-button" type="button"
                                onClick="document.getElementById('skills').scrollIntoView();"> Skills
                        </button>
                    </li>
                    <li class="header__menu-item">
                        <button class="header__menu-button" type="button"
                                onClick="document.getElementById('portfolio').scrollIntoView();"> Portfolio
                        </button>
                    </li>
                    <li class="header__menu-item">
                        <button class="header__menu-button" type="button"
                                onClick="document.getElementById('work-experience').scrollIntoView();"> Work Experience
                        </button>
                    </li>
                    <li class="header__menu-item">
                        <button class="header__menu-button" type="button"
                                onClick="document.getElementById('contacts').scrollIntoView();"> Contacts
                        </button>
                    </li>
                </ul>
            </nav>
            <!-- === theme switch === -->
            <label class="header__theme-switcher theme-switcher">
                <span class="visually-hidden">Switch theme</span>
                <input class="theme-switcher__checkbox visually-hidden" type="checkbox"
                       data-js-theme-switcher-checkbox="">
                <span class="theme-switcher__body">
              <span class="theme-switcher__icon-wrapper theme-switcher__icon-wrapper--dark-theme">
                <svg class="i-icon icon-moon" data-js-svg-id="icon-moon" viewBox="0 0 20 20">

                <path d="M14.06 12.991a5.487 5.487 0 0 1-4.174-1.611A5.487 5.487 0 0 1 8.27 7.475c0-.841.187-1.652.537-2.386a5.46 5.46 0 0 1 .562-.922c-.385.04-.754.121-1.114.233a5.855 5.855 0 0 0-4.088 5.582 5.85 5.85 0 0 0 10.957 2.852 5.204 5.204 0 0 1-1.064.157Z"
                      fill="#191820"></path></svg>
              </span>
              <span class="theme-switcher__icon-wrapper theme-switcher__icon-wrapper--light-theme">
                <svg class="i-icon icon-sun" data-js-svg-id="icon-sun" viewBox="0 0 20 20">

                <path d="M9.994 2.502a.463.463 0 0 0-.059.015.468.468 0 0 0-.365.468V4.39a.468.468 0 1 0 .936 0V2.985a.468.468 0 0 0-.512-.483ZM5.019 4.565a.469.469 0 0 0-.278.805l.98.995a.476.476 0 0 0 .674-.673l-.995-.98a.468.468 0 0 0-.381-.147Zm9.935 0a.469.469 0 0 0-.278.147l-.995.98a.476.476 0 0 0 .673.674l.98-.995a.468.468 0 0 0-.336-.805h-.044Zm-4.916 1.697a3.757 3.757 0 0 0-3.746 3.746 3.757 3.757 0 0 0 3.746 3.746 3.757 3.757 0 0 0 3.746-3.746 3.757 3.757 0 0 0-3.746-3.746ZM2.926 9.54a.47.47 0 1 0 .088.937H4.42a.468.468 0 1 0 0-.937H2.926Zm12.643 0a.47.47 0 1 0 .087.937h1.405a.468.468 0 1 0 0-.937H15.57Zm-1.595 3.966a.469.469 0 0 0-.059.014.468.468 0 0 0-.234.805l.995.98a.468.468 0 1 0 .658-.658l-.98-.995a.468.468 0 0 0-.38-.146Zm-7.975.014a.468.468 0 0 0-.278.132l-.98.995a.468.468 0 1 0 .658.658l.995-.98A.469.469 0 0 0 6 13.52Zm3.995 1.624a.466.466 0 0 0-.059.015.468.468 0 0 0-.366.468v1.405a.468.468 0 1 0 .937 0v-1.405a.468.468 0 0 0-.512-.483Z"
                      fill="#fff"></path></svg>
              </span>
            </span>
            </label>
            <!-- === / theme switch === -->
            <!-- === burger button === -->
            <button class="header__burger-button visible-mobile burger-button" type="button" title="Open menu"
                    aria-label="Open menu" data-js-burger-button="" wfd-invisible="true">
                <svg class="burger-button__svg" width="30" height="30" viewBox="0 0 100 100">
                    <path class="burger-button__line burger-button__line--1"
                          d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                    <path class="burger-button__line burger-button__line--2" d="M 20,50 H 80"></path>
                    <path class="burger-button__line burger-button__line--3"
                          d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                </svg>
            </button>
            <!-- === / burger button === -->
        </div>
        <div class="visible-mobile mobile-menu" data-js-mobile-menu="" wfd-invisible="true">
            <div class="mobile-menu__inner container">
                <div class="mobile-menu__navigation">
                    <ul class="mobile-menu__navigation-list">
                        <li class="mobile-menu__navigation-item">
                            <button class="mobile-menu__navigation-button" type="button"
                                    onClick="document.getElementById('about').scrollIntoView();"> About
                            </button>
                        </li>
                        <li class="mobile-menu__navigation-item">
                            <button class="mobile-menu__navigation-button" type="button"
                                    onClick="document.getElementById('skills').scrollIntoView();"> Skills
                            </button>
                        </li>
                        <li class="mobile-menu__navigation-item">
                            <button class="mobile-menu__navigation-button" type="button"
                                    onClick="document.getElementById('portfolio').scrollIntoView();"> Portfolio
                            </button>
                        </li>
                        <li class="mobile-menu__navigation-item">
                            <button class="mobile-menu__navigation-button" type="button"
                                    onClick="document.getElementById('work-experience').scrollIntoView();"> Work
                                Experience
                            </button>
                        </li>
                        <li class="mobile-menu__navigation-item">
                            <button class="mobile-menu__navigation-button" type="button"
                                    onClick="document.getElementById('contacts').scrollIntoView();"> Contacts
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- === / HEADER === -->