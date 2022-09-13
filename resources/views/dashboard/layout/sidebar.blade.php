<div id="left-sidebar" class="sidebar open">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">

            <div class="dropdown">
                <span>Bienvenue sur VTP,</span>
                <a href="javascript:void(0);" class=" user-name"><strong>{{Auth::user()->name}}</strong></a>

            </div>
            <hr>

        </div>
        <!-- Nav tabs -->


        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="">
                            <a href="#Dashboard" class="has-arrow" aria-expanded="false"><i class="fa fa-dashboard"></i><span>Tableau de bord</span></a>
                            <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                <li><a href="{{ route('dashboard') }}">Acceuil</a></li>
                                <li><a href="{{route('profile')}}">Profile</a></li>

                            </ul>
                        </li>
                        @can("is_seller")
                                <li class="">
                                    <a href="javascript:void(0);" class="has-arrow" aria-expanded="false"><i class="fa fa-th-large"></i><span>Gestion de Produits</span></a>
                                    <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                        <li><a href="{{ route('add.product') }}">Ajouter Un  Produit </a></li>
                                        <li><a href="/category/forms">Ajouter Une Categorie </a></li>
                                        <li><a href="{{ route('product_list') }}">Liste Des Produits </a></li>
                                        <li><a href="/category/list">Liste des categories</a></li>
                                        <li><a href="#">Avis Sur Vos Produit</a></li>
                                        <li><a href="#">Commentaires</a></li>
                                        <li><a href="#">Politique De Retour</a></li>

                                        </li>
                                    </ul>
                                </li>      
                        @endcan
                      
                        <li>
                            <a href="javascript:void(0);" class="has-arrow" aria-expanded="false"><i class="fa fa-puzzle-piece"></i><span>Gestion De Commande</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widgets-data.html">Liste De Commande</a></li>
                                <li><a href="widgets-data.html">Etat De Vos Commande </a></li>
                                <li><a href="widgets-data.html">Politique De Commande </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="fa fa-diamond"></i><span>Boite de reception</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-typography.html">Messages recus</a></li>
                                <li><a href="ui-tabs.html">Messages envoyés</a></li>
                                <li><a href="ui-buttons.html">Contactez l'administrateur</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#charts" class="has-arrow" aria-expanded="false"><i class="fa fa-area-chart"></i><span>Partenaires VTP</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-apex.html">Transporteurs</a> </li>
                                <li><a href="chart-c3.html">Stockeurs</a></li>
                            </ul>
                        </li>



                    </ul>
                </nav>
            </div>
            <div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="assets/images/xs/avatar1.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Alexander <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple"><div class="purple"></div></li>
                    <li data-theme="blue"><div class="blue"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="red"><div class="red"></div></li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>

                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked="">
                            <span>Allowed Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>

                <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
            </div>
            <div class="tab-pane" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button mt-3">
                        <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
