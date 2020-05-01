<div class="ed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ed-com-t1-left">
                    <ul>
                        <li><a href="#">ADDRESS: CAMEROUN</a>
                        </li>
                        <li><a href="#">DOUALA, CM</a>
                        </li>
                        <li><a href="#">PHONE: + (237) 653 96 78 96 </a>
                        </li>
                    </ul>
                </div>
                <div class="ed-com-t1-right">
                    @auth
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        <ul>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
                            </li>
                        </ul>
                    @else 
                        <ul>
                            <li>
                                <a href="{{ route('login') }}">S'identifier</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">S'inscrire</a>
                            </li>
                        </ul>
                    @endauth
                </div>
                <div class="ed-com-t1-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
