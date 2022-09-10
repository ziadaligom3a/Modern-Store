@props(['data'])
<header>
    <!-- header inner -->
    <div class="header" style="background: black">
       <div class="container-fluid">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="/"><img src="https://iili.io/4skwx4.png" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">

                     

                        @foreach($data as $d)
                        <li class="nav-item {{ '/' . last(request()->segments()) == $d->path ? 'active' : ''}}">
                           <a class="nav-link" href="{{ $d->path }}">{{ $d->name }}</a>
                        </li>
                       @endforeach

                       @guest
                       @if(Session::has('lang') && Session::get('lang') == 'ar' )
                       <li class="nav-item {{ '/' . last(request()->segments()) == 'login' ? 'active' : ''}}">
                          <a class="nav-link" href="/login">تسجيل</a>
                       </li>
                       @else
                       <li class="nav-item {{ '/' . last(request()->segments()) == 'login' ? 'active' : ''}}">
                        <a class="nav-link" href="/login">Login</a>
                     </li>
                       @endif
                       @endguest

                       @auth
                       <li class="nav-item">
                        @role('Admin')
                        <a class="nav-link" href="/admin/home">{{ __('Admin Dashboard') }}</a>
                        @else
                           <a class="nav-link" href="/home">My Account</a>
                        @endrole
                     </li>
                       @endauth
                         <li class="nav-item d_none">
                            <a class="nav-link" href="/Search"><i class="fa fa-search" aria-hidden="true"></i></a>
                         </li>

                      
                      </ul>
                      <br>
                      <ul class="navbar-nav mr-auto">
                        @if(!Session::has('lang'))
                        <li class="nav-item">
                           <a class="nav-link" href="/local/ar">AR</a>
                         </li>

                         @elseif(Session::get('lang') == 'ar')

                         <li class="nav-item">
                           <a class="nav-link" href="/local/en">EN</a>
                         </li>

                         @elseif(Session::get('lang') == 'en')

                         <li class="nav-item">
                           <a class="nav-link" href="/local/ar">AR</a>
                         </li>

                         @endif
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>