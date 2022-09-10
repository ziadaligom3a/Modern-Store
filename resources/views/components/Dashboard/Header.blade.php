<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="#">
                    <a href="/"><h1 style="color:yellow">ZIX</h1></a>
                    <!-- <br> -->
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li class="has-sub">
                        <a href="/home">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                            <span class="bot-line"></span>
                        </a>
                        
                    </li>


                  
                </ul>
            </div>
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">

                </div>
                <div class="header-button-item js-item-menu">

                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ $user->img }}" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ $user->name }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                <a href="#">
                                <img src="{{ $user->img }}" alt="John Doe">
                                </a>
                                </div>
                                <div class="content">
                                <h5 class="name">
                                <a href="#">{{ $user->name }}</a>
                                <span class="email">{{ $user->email }}</span>

                                </h5>
                                </div>
                                
                                </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="/home/Account">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>

                            </div>
                            <div class="account-dropdown__footer">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>