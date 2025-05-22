<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="\"><img src="{{ asset('assets/clients/img/logo.png') }}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="\">Trang chủ</a> </li>
                <li><a href="javascript:void(0)">Về chúng tôi</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                                                <li><a href="{{ route('service') }}">Dịch vụ</a></li>
                                                <li><a href="{{ route('team') }}">Team</a></li>
                                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('about') }}">Cửa hàng</a></li>
                <li><a href="{{ route('about') }}">Liên hệ</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="{{ route('account') }}" title="Tài khoản">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        Tài khoản
                    </a>
                </li>
                <li>
                    <a href="{{ route('account') }}" title="Yêu thích">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Yêu thích
                    </a>
                </li>
                <li>
                    <a href="{{ route('account') }}" title="Giỏ hàng">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Giỏ hàng
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->