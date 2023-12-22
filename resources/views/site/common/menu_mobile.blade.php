<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase">
            <li class="html header-button-1">
                <div class="header-button">
                    <a href="tel:{{ isset($information['hotline']) ? $information['hotline'] : '' }}"
                       class="button secondary is-outline" style="border-radius:99px;">
                        <span>Đặt xe: {{ isset($information['hotline']) ? $information['hotline'] : '' }}</span>
                    </a>
                </div>
            </li>

            @foreach (\App\Entity\Menu::showWithLocation('menu-chinh') as $menu)
                @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6451 current_page_item menu-item-6457{{$id}}">
                        <a href="{{ $menuElement['url'] }}" aria-current="page">{{ $menuElement['title_show'] }}</a>
                    </li>
                @endforeach
            @endforeach

            <li class="html custom html_topbar_right"><a
                        href="tel:{{ isset($information['hotline']) ? $information['hotline'] : '' }}"
                        style="border-radius:99px;font-size: 15px;border: 2px solid;padding: 3px 12px 2px 12px;color: #ed1c24;">
                    <i class="fa fa-phone-alt"
                       aria-hidden="true"></i><span>Hotline: {{ isset($information['hotline']) ? $information['hotline'] : '' }}</span>
                </a></li>


            <li class="html header-social-icons ml-0">
                <div class="social-icons follow-icons"><a
                            href="{{ isset($information['link-facebook']) ? $information['link-facebook'] : '' }}" target="_blank"
                            data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip"
                            title="Follow on Facebook"><i class="icon-facebook"></i></a>
                    <a href="{{ isset($information['link-instagram']) ? $information['link-instagram'] : 'http://url' }}"
                       target="_blank"
                       rel="noopener noreferrer nofollow"
                       data-label="Instagram"
                       class="icon plain  instagram tooltip"
                       title="Follow on Instagram"><i
                                class="icon-instagram"></i></a>
                    <a href="{{ isset($information['link-instagram']) ? $information['link-instagram'] : 'http://url' }}" target="_blank" data-label="Twitter"
                       rel="noopener noreferrer nofollow"
                       class="icon plain  twitter tooltip"
                       title="Follow on Twitter"><i
                                class="icon-twitter"></i></a>
                    <a href="mailto:{{ isset($information['link-email']) ? $information['link-email'] : '' }}"
                       data-label="E-mail"
                       rel="nofollow" class="icon plain  email tooltip"
                       title="Send us an email"><i
                                class="icon-envelop"></i></a></div>
            </li>
        </ul>
    </div>
</div>
