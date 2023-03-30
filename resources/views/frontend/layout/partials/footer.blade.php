<div class="footer-style-2 ptb--30 bg_color--6">
    <div class="wrapper plr--50 plr_sm--20">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-12 col-12">
                <div class="inner text-center">
                    <!-- <ul class="social-share rn-lg-size d-flex justify-content-center liststyle">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul> -->
                    <div class="text my-3">
                        <p>Copyright © 2023 <a href="https://myolbd.com" target="_blank">MY Outsourcing Ltd</a>. All Rights Reserved.</p>
                    </div>
                    <ul class="liststyle">
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fi fi-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                            <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> <span class="fi fi-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12 mx-auto mt-3">
                <form class="d-flex justify-content-center" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger d-flex">
                        <i class="feather feather-power me-3 fs-16 my-auto"></i>
                        <div class="mt-1" >Logout</div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
