<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لوحة التحكم | محتوى Mohtawa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap-rtl 3.3.4 -->
    <link rel="stylesheet" href="/assets/admin/bootstrap/css/bootstrap-rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/admin/dist/css/fontawesome-4.4.0.min.css">
    <!-- Ionicons -->
    <link rel="shortcut icon" href="{{asset('image/icon.png')}}" type="image/x-icon">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="/assets/admin/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/assets/admin/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/assets/admin/dist/css/add-img.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="/assets/admin/dist/js/jquery.validate.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">محتوى</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>محتوى &numsp;</b>Mohtawa</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>


            <div class="navbar-custom-menu">
                
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                   

                    <li>
                        
                        <a href="{{route('logout')}}" data-toggle=""><i class="fa fa-power-off"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    
<!-- Right side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                
            </div>
            <div class="pull-left info">
                <p>{{-- $_SESSION['username'] --}}</p>
                <a href="#"style="color: #b8c7ce;"> موقع محتوى Mohtawa </a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">القائمة الرئيسية</li>
            <li class="active treeview">
                <a href="/admin/index">
                    <i class="fa fa-home"></i> <span>الرئيسية</span>
                </a>

            </li>
            
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>الفيديوهات</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                
                <ul class="treeview-menu">
                    <li><a href="{{route('video.index')}}"><i class="fa fa-circle-o"></i> قائمة الفيديوهات</a></li>
                    <li><a href="{{route('video.create')}}"><i class="fa fa-circle-o"></i> إضافة فيديو جديد</a></li>
                </ul>
               
            </li> 
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>من نحن  </span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('aboutus.index')}}"><i class="fa fa-circle-o"></i> قائمة النبذ </a></li>
                    <li><a href="{{route('aboutus.create')}}"><i class="fa fa-circle-o"></i> إضافة نبذة جديدة</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>معرض الاعمال </span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('our-works.index')}}"><i class="fa fa-circle-o"></i> قائمة الأعمال </a></li>
                    <li><a href="{{route('our-works.create')}}"><i class="fa fa-circle-o"></i> إضافة عمل جديد</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>خدماتنا  </span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('services.index')}}"><i class="fa fa-circle-o"></i> قائمة الخدمات </a></li>
                    <li><a href="{{route('services.create')}}"><i class="fa fa-circle-o"></i> إضافة خدمة جديد</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>الباقات</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> قائمة الباقات </a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> إضافة باقة جديد</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>شركاؤنا</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('clients.index')}}"><i class="fa fa-circle-o"></i> قائمة الشركاء </a></li>
                    <li><a href="{{route('clients.create')}}"><i class="fa fa-circle-o"></i> إضافة شريك جديد</a></li>
                </ul>
            </li> 
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>آراء العملاء</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('review.index')}}"><i class="fa fa-circle-o"></i> قائمة الآراء </a></li>
                    <li><a href="{{route('review.create')}}"><i class="fa fa-circle-o"></i> إضافة رأي جديد</a></li>
                </ul>
            </li> 

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>المدونة</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('blog.index')}}"><i class="fa fa-circle-o"></i> قائمة التدوينات </a></li>
                    <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i> إضافة تدوينة جديدة</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>تواصل اجتماعي</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('social.index')}}"><i class="fa fa-circle-o"></i> قائمة الروابط </a></li>
                    <li><a href="{{route('social.create')}}"><i class="fa fa-circle-o"></i> إضافة روابط جديدة</a></li>
                </ul>
            </li> 

            {{-- if($this->session->userdata('role')==1){ --}}
            
                
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>المستخدمين</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> قائمة المستخدمين</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> إضافة مستخدم جديد</a></li>
                </ul>
            </li>

      

        </ul>
    </section>
</aside>

    @yield('main')


</div>
    
<footer class="main-footer" >
    جميع الحقوق محفوظة ل - أجيال Ajyal   <strong dir="ltr">  2021 &copy; </strong>
</footer>

<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- Bootstrap 3.3.5 -->
<script src="/assets/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- FastClick -->
<script src="/assets/admin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/admin/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/assets/admin/dist/js/index.js"></script>

<script src="/assets/admin/plugins/iCheck/icheck.min.js"></script>
<script src="/assets/admin/plugins/tinymce/tinymce.min.js"></script>

@yield('my-script')
</body>
</html>
