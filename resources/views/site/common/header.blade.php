<header id="header" class="header transparent has-transparent has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main nav-dark toggle-nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href=""
                       title="Xe ghép xe tiện chuyến Hà Nội &#8211; Hải Phòng &#8211; Quảng Ninh - Khách hàng là số 1"
                       rel="home">
                        <img width="178" height="44" src="{{ isset($information['logo'] ) ? $information['logo'] : asset('site/wp-content/uploads/2022/08/logo_xetienchuyen.png') }}"
                             class="header_logo header-logo"
                             alt="Xe ghép xe tiện chuyến Hà Nội &#8211; Hải Phòng &#8211; Quảng Ninh"><img
                                width="178" height="44" src="{{ isset($information['logo'] ) ? $information['logo'] : asset('site/wp-content/uploads/2022/08/logo_xetienchuyen.png') }}"
                                class="header-logo-dark"
                                alt="Xe ghép xe tiện chuyến Hà Nội &#8211; Hải Phòng &#8211; Quảng Ninh"></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                               data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu"
                               aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
            flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-spacing-xlarge nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-spacing-xlarge nav-uppercase">
                        @foreach (\App\Entity\Menu::showWithLocation('menu-chinh') as $menu)
                            @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                            <li id="menu-item-6457{{$id}}"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6451 current_page_item menu-item-6457 active menu-item-design-default">
                                <a href="{{ $menuElement['url'] }}" aria-current="page" class="nav-top-link">{{ $menuElement['title_show'] }}</a>
                            </li>
                            @endforeach
                        @endforeach
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Search" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form method="get" class="searchform" action="{{ route('search_post', [ 'languageCurrent' => $languageCurrent] ) }}" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="word"
                                                               value="" id="s" placeholder="Search&hellip;"/>
{{--                                                        <input type="hidden" name="lang" value="{{$languageCurrent}}">--}}
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                                class="ux-search-submit submit-button secondary button icon mb-0"
                                                                aria-label="Submit">
                                                            <i class="icon-search"></i></button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="html header-button-1">
                            <div class="header-button">
                                <a href="tel:{{ isset($information['hotline']) ? $information['hotline'] : '' }}" class="button secondary is-outline"
                                   style="border-radius:99px;">
                                    <span>Đặt xe: {{ isset($information['hotline']) ? $information['hotline'] : '' }}</span>
                                </a>
                            </div>
                        </li>


                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Search" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form method="get" class="searchform" action="" role="search">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <input type="search" class="search-field mb-0" name="s"
                                                               value="" id="s" placeholder="Search&hellip;"/>
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit"
                                                                class="ux-search-submit submit-button secondary button icon mb-0"
                                                                aria-label="Submit">
                                                            <i class="icon-search"></i></button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
