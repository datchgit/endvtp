<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-brand">
            <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
            <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
            <a href="index.html">VTP GROUP</a>
        </div>

        <div class="navbar-right">

            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>Tous les notifications </strong></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-info text-warning"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">{{ Auth::user()->name }} <strong>VTP GROUP</strong> Vous Souhaite la bienvenue Sur Notre PLateforme.</p>
                                            <span class="timestamp">Compte crée {{Auth::user()->created_at  }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>




                            <li class="footer"><a href="javascript:void(0);" class="more">Toutes les Notifications</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page-login.html" class="icon-menu" id="btn-logout"><i class="fa fa-power-off"></i></a>
                        <form action="{{route('logout')}}" name="form-logout" method="POST" style="display: none">
                            @csrf
                            <input type="submit">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
