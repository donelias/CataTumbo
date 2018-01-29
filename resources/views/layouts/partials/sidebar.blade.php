<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="{{route('home')}}">CT. Admin</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                    <div class="profile-data-title">Bienvendido(a)</div>
                </div>
                <div class="profile-controls">
                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li @if(Route::is('home')) class="active" @endif>
            <a href="{{route('home')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li @if(Route::is('customers-index'))
            class="active"
            @elseif(Route::is('customers-new'))
            class="active"
            @elseif(Route::is('customers-edit'))
            class="active"
            @elseif(Route::is('customers-show'))
            class="active"
                @endif>
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Clientes</span></a>
            <ul>
                <li @if(Route::is('customers-index')) class="active" @endif><a href="{{url('admin/customers')}}"><span class="fa fa-list-alt"></span>General Clientes </a></li>
                <li @if(Route::is('customers-new')) class="active" @endif><a href="{{url('admin/customers/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Cliente</a></li>
                <li @if(Route::is('customers-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Cliente</a></li>
                <li @if(Route::is('customers-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Cliente</a></li>
            </ul>
        </li>
        <!--
        <li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
            <ul>
                <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                    <ul>
                        <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                        <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                    <ul>
                        <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                        <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                        <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                    </ul>
                </li>
                <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-file"></span> Blog</a>

                    <ul>
                        <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                        <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                    <ul>
                        <li><a href="pages-login.html">App Login</a></li>
                        <li><a href="pages-login-website.html">Website Login</a></li>
                        <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                    <ul>
                        <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                        <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                        <li><a href="pages-error-500.html"> Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
            <ul>
                <li><a href="layout-boxed.html">Boxed</a></li>
                <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                <li><a href="layout-nav-top.html">Navigation Top</a></li>
                <li><a href="layout-nav-right.html">Navigation Right</a></li>
                <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                <li><a href="layout-search-left.html">Search Left Side</a></li>
                <li><a href="blank.html">Blank Page</a></li>
            </ul>
        </li>
        -->
        <li class="xn-title">Administrador</li>
        <li @if(Route::is('role-index'))
                class="active"
            @elseif(Route::is('role-new'))
                class="active"
            @elseif(Route::is('role-edit'))
                class="active"
            @elseif(Route::is('role-show'))
            class="active"
            @endif>
            <a href="#"><span class="fa fa-list"></span> <span class="xn-text">Roles</span></a>
            <ul>
                <li @if(Route::is('role-index')) class="active" @endif><a href="{{url('admin/roles')}}"><span class="fa fa-list-alt"></span> Roles</a></li>
                <li @if(Route::is('role-new')) class="active" @endif><a href="{{url('admin/roles/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Rol</a></li>
                <li @if(Route::is('role-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Rol</a></li>
                <li @if(Route::is('role-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Rol</a></li>
            </ul>
        </li>
        <li @if(Route::is('sector-index'))
            class="active"
            @elseif(Route::is('sector-new'))
            class="active"
            @elseif(Route::is('sector-edit'))
            class="active"
            @elseif(Route::is('sector-show'))
            class="active"
                @endif>
            <a href="#"><span class="fa fa-map-marker"></span> <span class="xn-text">Sector</span></a>
            <ul>
                <li @if(Route::is('sector-index')) class="active" @endif><a href="{{url('admin/sector')}}"><span class="fa fa-list-alt"></span>General Sectores </a></li>
                <li @if(Route::is('sector-new')) class="active" @endif><a href="{{url('admin/sector/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Sector</a></li>
                <li @if(Route::is('sector-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Sector</a></li>
                <li @if(Route::is('sector-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Sector</a></li>
            </ul>
        </li>
        <li @if(Route::is('statu-index'))
            class="active"
            @elseif(Route::is('statu-new'))
            class="active"
            @elseif(Route::is('statu-edit'))
            class="active"
            @elseif(Route::is('statu-show'))
            class="active"
                @endif>
            <a href="#"><span class="fa fa-list-alt"></span> <span class="xn-text">Status</span></a>
            <ul>
                <li @if(Route::is('statu-index')) class="active" @endif><a href="{{url('admin/statu')}}"><span class="fa fa-list-alt"></span> Status</a></li>
                <li @if(Route::is('statu-new')) class="active" @endif><a href="{{url('admin/statu/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Status</a></li>
                <li @if(Route::is('statu-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Status</a></li>
                <li @if(Route::is('statu-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Status</a></li>
            </ul>
        </li>
        <li @if(Route::is('type-person-index'))
            class="active"
            @elseif(Route::is('type-person-new'))
            class="active"
            @elseif(Route::is('type-person-edit'))
            class="active"
            @elseif(Route::is('type-person-show'))
            class="active"
                @endif>
            <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Tipo Persona</span></a>
            <ul>
                <li @if(Route::is('type-person-index')) class="active" @endif><a href="{{url('admin/type-person')}}"><span class="fa fa-list-alt"></span>General Tipo Persona </a></li>
                <li @if(Route::is('type-person-new')) class="active" @endif><a href="{{url('admin/type-person/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Tipo Persona</a></li>
                <li @if(Route::is('type-person-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Tipo Persona</a></li>
                <li @if(Route::is('type-person-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Tipo Persona</a></li>
            </ul>
        </li>
        <li @if(Route::is('user-index'))
            class="active"
            @elseif(Route::is('user-new'))
            class="active"
            @elseif(Route::is('user-edit'))
            class="active"
            @elseif(Route::is('user-show'))
            class="active"
                @endif>
            <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Usuarios</span></a>
            <ul>
                <li @if(Route::is('user-index')) class="active" @endif><a href="{{url('admin/user')}}"><span class="fa fa-list-alt"></span>General Usuarios </a></li>
                <li @if(Route::is('user-new')) class="active" @endif><a href="{{url('admin/user/create')}}"><span class="fa fa-plus-square-o"></span> Nuevo Usuario</a></li>
                <li @if(Route::is('user-edit')) class="active" @endif><a href="#"><span class="fa fa-edit"></span> Editar Usuario</a></li>
                <li @if(Route::is('user-show')) class="active" @endif><a href="#"><span class="fa fa-eye"></span> Detalle Usuario</a></li>
            </ul>
        </li>

        <!--
        <li class="xn-openable">
            <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
            <ul>
                <li>
                    <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                    <div class="informer informer-danger">New</div>
                    <ul>
                        <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                        <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                        <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                        <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                    </ul>
                </li>
                <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
            <ul>
                <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
            <ul>
                <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
            </ul>
        </li>
        <li>
            <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
            <ul>
                <li class="xn-openable">
                    <a href="#">Second Level</a>
                    <ul>
                        <li class="xn-openable">
                            <a href="#">Third Level</a>
                            <ul>
                                <li class="xn-openable">
                                    <a href="#">Fourth Level</a>
                                    <ul>
                                        <li><a href="#">Fifth Level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        -->
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->