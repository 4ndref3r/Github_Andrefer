<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="../assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Sayani</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Bienvenido,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Andre Ajno</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="{{route('pages.profile')}}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{route('email.inbox')}}"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('authentication.login')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">General</li>                
                <li class="{{ Request::segment(1) === 'mypage' ? 'active open' : null }}">
                    <a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>Inicio</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'index' ? 'active' : null }}"><a href="{{route('mypage.index')}}">My Dashboard</a></li>
                        <li class="{{ Request::segment(2) === 'index10' ? 'active' : null }}"><a href="{{route('mypage.index10')}}">University Analytics</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(2) === 'index2' ? 'active open' : null }}"><a href="{{route('dashboard.index2')}}"><i class="icon-speedometer"></i><span>Usuarios</span></a></li>
                <li class="header">Académico</li>
                <li class="{{ Request::segment(1) === 'projects' ? 'active open' : null }}">
                    <a href="#Project" class="has-arrow"><i class="icon-flag"></i><span>Usuarios</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}"><a href="{{route('usuarios.index')}}">Usuarios</a></li>
                        <li class="{{ Request::segment(2) === 'projectlist' ? 'active' : null }}"><a href="{{route('projects.projectlist')}}">Docentes</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'hr' ? 'active open' : null }}">
                    <a href="#Project" class="has-arrow"><i class="icon-umbrella"></i><span>Horarios</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'departments' ? 'active' : null }}"><a href="{{route('aulas.index')}}">Aulas</a></li>
                        <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href="{{route('grupos.index')}}">Grupos</a></li>
                        <li class="{{ Request::segment(2) === 'employee' ? 'active' : null }}"><a href="{{route('materias.index')}}">Materias</a></li>
                        <li class="{{ Request::segment(2) === 'hrdashboard' ? 'active' : null }}"><a href="{{route('hr.hrdashboard')}}">Asignar</a></li>
                        <li class="{{ Request::segment(2) === 'report' ? 'active' : null }}"><a href="{{route('hr.report')}}">Report</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'job' ? 'active open' : null }}">
                    <a href="#JobPortal" class="has-arrow"><i class="icon-screen-tablet"></i><span>Asistencia</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'jobdashboard' ? 'active' : null }}"><a href="{{route('config.reglas')}}">Reglas</a></li>
                        <li class="{{ Request::segment(2) === 'positions' ? 'active' : null }}"><a href="{{route('job.positions')}}">Control</a></li>
                        <li class="{{ Request::segment(2) === 'applicants' ? 'active' : null }}"><a href="{{route('job.applicants')}}">Reemplazos</a></li>
                    </ul>
                </li>
                <li class="header">Nómina y Pagos</li>
                <li class="{{ Request::segment(1) === 'contact' ? 'active open' : null }}">
                    <a href="#Contact" class="has-arrow"><i class="icon-book-open"></i><span>Pagos</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'contact' ? 'active' : null }}"><a href="{{route('contact.contact')}}">Renumeración</a></li>
                        <li class="{{ Request::segment(2) === 'contact2' ? 'active' : null }}"><a href="{{route('contact.contact2')}}">Anticipo</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'email' ? 'active open' : null }}">
                    <a href="#Contact" class="has-arrow"><i class="icon-drawer"></i><span>Nóminas</span></a>
                    <ul>                        
                        <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('email.inbox')}}">Contrato</a></li>
                        <li class="{{ Request::segment(2) === 'compose' ? 'active' : null }}"><a href="{{route('email.compose')}}">Compose</a></li>
                        <li class="{{ Request::segment(2) === 'inboxdetail' ? 'active' : null }}"><a href="{{route('email.inboxdetail')}}">Inbox Detail</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(2) === 'chat' ? 'active open' : null }}"><a href="{{route('messenger.chat')}}"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
                <li class="{{ Request::segment(2) === 'calendar' ? 'active open' : null }}"><a href="{{route('app.calendar')}}"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li class="header">Reportes y Otros</li>
                <li class="{{ Request::segment(2) === 'cards' ? 'active open' : null }}"><a href="{{route('cardlayout.cards')}}"><i class="icon-folder"></i><span>Cards Layout</span></a></li>
                <li class="{{ Request::segment(1) === 'icon' ? 'active open' : null }}">
                    <a href="#uiIcons" class="has-arrow"><i class="icon-tag"></i><span>Reportes</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'fontawesome' ? 'active' : null }}"><a href="{{route('icon.fontawesome')}}">Usuarios</a></li>
                        <li class="{{ Request::segment(2) === 'iconsline' ? 'active' : null }}"><a href="{{route('icon.iconsline')}}">Docentes</a></li>
                        <li class="{{ Request::segment(2) === 'themify' ? 'active' : null }}"><a href="{{route('icon.themify')}}">Pagos</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'components' ? 'active open' : null }}">
                    <a href="#uiComponents" class="has-arrow"><i class="icon-diamond"></i><span>Components</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'bootstrap' ? 'active' : null }}"><a href="{{route('components.bootstrap')}}">Bootstrap UI</a></li>
                        <li class="{{ Request::segment(2) === 'typography' ? 'active' : null }}"><a href="{{route('components.typography')}}">Typography</a></li>
                        <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href="{{route('components.colors')}}">Colors</a></li>
                        <li class="{{ Request::segment(2) === 'buttons' ? 'active' : null }}"><a href="{{route('components.buttons')}}">Buttons</a></li>
                        <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href="{{route('components.tabs')}}">Tabs</a></li>
                        <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href="{{route('components.progressbars')}}">Progress Bars</a></li>
                        <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href="{{route('components.modals')}}">Modals</a></li>
                        <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href="{{route('components.notifications')}}">Notifications</a></li>
                        <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href="{{route('components.dialogs')}}">Dialogs</a></li>
                        <li class="{{ Request::segment(2) === 'listgroup' ? 'active' : null }}"><a href="{{route('components.listgroup')}}">List Group</a></li>
                        <li class="{{ Request::segment(2) === 'mediaobject' ? 'active' : null }}"><a href="{{route('components.mediaobject')}}">Media Object</a></li>
                        <li class="{{ Request::segment(2) === 'nestable' ? 'active' : null }}"><a href="{{route('components.nestable')}}">Nestable</a></li>
                        <li class="{{ Request::segment(2) === 'rangesliders' ? 'active' : null }}"><a href="{{route('components.rangesliders')}}">Range Sliders</a></li>
                        <li class="{{ Request::segment(2) === 'helperclass' ? 'active' : null }}"><a href="{{route('components.helperclass')}}">Helper Classes</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'forms' ? 'active open' : null }}">
                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('forms.basic')}}">Basic Elements</a></li>
                        <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('forms.advanced')}}">Advanced Elements</a></li>
                        <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a href="{{route('forms.validation')}}">Form Validation</a></li>
                        <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a href="{{route('forms.wizard')}}">Form Wizard</a></li>
                        <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a href="{{route('forms.summernote')}}">Summernote</a></li>
                        <li class="{{ Request::segment(2) === 'dragdropupload' ? 'active' : null }}"><a href="{{route('forms.dragdropupload')}}">Drag &amp; Drop Upload</a></li>
                        <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a href="{{route('forms.editors')}}">CKEditor</a></li>
                        <li class="{{ Request::segment(2) === 'markdown' ? 'active' : null }}"><a href="{{route('forms.markdown')}}">Markdown</a></li>
                        <li class="{{ Request::segment(2) === 'cropping' ? 'active' : null }}"><a href="{{route('forms.cropping')}}">Image Cropping</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                    <a href="#Tables" class="has-arrow"><i class="icon-layers"></i><span>Tables</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="{{route('tables.normal')}}">Normal Tables</a></li>
                        <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="{{route('tables.color')}}">Tables Color</a></li>
                        <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href="{{route('tables.datatable')}}">Jquery Datatables</a></li>
                        <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="{{route('tables.editable')}}">Editable Tables</a></li>
                        <li class="{{ Request::segment(2) === 'filter' ? 'active' : null }}"><a href="{{route('tables.filter')}}">Table Filter</a></li>
                        <li class="{{ Request::segment(2) === 'dragger' ? 'active' : null }}"><a href="{{route('tables.dragger')}}">Table dragger</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'charts' ? 'active open' : null }}">
                    <a href="#charts" class="has-arrow"><i class="icon-pie-chart"></i><span>Charts</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'c3' ? 'active' : null }}"><a href="{{route('charts.c3')}}">C3 Charts</a></li>
                        <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a href="{{route('charts.chartjs')}}">ChartJS</a></li>
                        <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a href="{{route('charts.morris')}}">Morris Charts</a></li>
                        <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a href="{{route('charts.flot')}}">Flot Charts</a></li>
                        <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}"><a href="{{route('charts.sparkline')}}">Sparkline Chart</a></li>
                        <li class="{{ Request::segment(2) === 'knob' ? 'active' : null }}"><a href="{{route('charts.knob')}}">Jquery Knob</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(2) === 'jvectormap' ? 'active open' : null }}"><a href="{{route('maps.jvectormap')}}"><i class="icon-map"></i><span>jVector Map</span></a></li>
                <li class="header">Perfíl</li>
                <li class="{{ Request::segment(2) === 'settings' ? 'active open' : null }}"><a href="{{route('extra.settings')}}"><i class="icon-settings"></i><span>Configuración</span></a></li>
            </ul>
        </nav>     
    </div>
</div>