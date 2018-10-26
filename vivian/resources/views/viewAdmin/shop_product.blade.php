
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Product manager</title>
        @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/test/public/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S-cart</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset('images/img/scart-min.png')}}"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <style>
.search-form {
    width: 250px;
    margin: 10px 0 0 20px;
    border-radius: 3px;
    float: left;
}
.search-form input[type="text"] {
    color: #666;
    border: 0;
}
.search-form .btn {
    color: #999;
    background-color: #fff;
    border: 0;
}
</style>

<form action="https://demo.s-cart.org/system_admin/shop_order" method="get" class="search-form" pjax-container>
    <div class="input-group input-group-sm ">
        <input type="text" name="keyword" class="form-control" placeholder="Search order id, email, phone or name">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
    </div>
</form>


        <!-- Navbar Right Menu -->
            @include("viewAdmin.elements.NavbarRightMenu")
    </nav>
</header>    
    @include("viewAdmin.elements.menu")
    <div class="content-wrapper" id="pjax-container">
            <section class="content-header">
        <h1>
            Product manager
            <small> </small>
        </h1>

        <!-- breadcrumb start -->
        
        <!-- breadcrumb end -->

    </section>

    <section class="content">

                        
        <div class="row"><div class="col-md-12"><div class="box">
    
    <div class="box-header with-border">
        <div class="pull-right">
            
            
<div class="btn-group pull-right" style="margin-right: 10px">
    <a href="/system_admin/shop_product/create" class="btn btn-sm btn-success" title="New">
        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
    </a>
</div>

        </div>
        <span>
            <input type="checkbox" class="grid-select-all" />&nbsp;

<div class="btn-group">
    <a class="btn btn-sm btn-default">&nbsp;<span class="hidden-xs">Action</span></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
                    <li><a href="#" class="grid-batch-0">Delete</a></li>
            </ul>
</div> <a class="btn btn-sm btn-primary grid-refresh" title="Refresh"><i class="fa fa-refresh"></i><span class="hidden-xs"> Refresh</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
    <label class="btn btn-sm btn-dropbox 5bcf39323dabe-filter-btn " title="Filter">
        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filter</span>
    </label>

    </div>
        </span>
    </div>

    <div class="box-header with-border hide" id="filter-box">
    <form action="https://demo.s-cart.org/system_admin/shop_product" class="form-horizontal" pjax-container method="get">

        <div class="row">
                        <div class="col-md-12">
                <div class="box-body">
                    <div class="fields-group">
                                                    <div class="form-group">
    <label class="col-sm-2 control-label"> ID</label>
    <div class="col-sm-8">
        <div class="input-group input-group-sm">
            <div class="input-group-addon">
            <i class="fa fa-pencil"></i>
        </div>

    <input type="text" class="form-control id" placeholder="ID" name="id" value="">
</div>    </div>
</div>
                                            </div>
                </div>
            </div>
                    </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group pull-left">
                            <button class="btn btn-info submit btn-sm"><i
                                        class="fa fa-search"></i>&nbsp;&nbsp;Search</button>
                        </div>
                        <div class="btn-group pull-left " style="margin-left: 10px;">
                            <a href="https://demo.s-cart.org/system_admin/shop_product" class="btn btn-default btn-sm"><i
                                        class="fa fa-undo"></i>&nbsp;&nbsp;Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th> </th>
                                        <th>ID<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_product?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                        <th>Product name<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_product?_sort%5Bcolumn%5D=name&_sort%5Btype%5D=desc"></a></th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price cost</th>
                                        <th>Price for sale</th>
                                        <th>Product type</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="49" />
                    </td>
                                        <td >
                        49
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        MENS
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/0950df6d59696ad39a8e5505735f578c.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="49" />
                    </td>
                                        <td >
                        2018-09-03 08:05:59
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/49/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="49" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="48" />
                    </td>
                                        <td >
                        48
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/6ddd855403d127a9fed049d0ec335481.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="48" />
                    </td>
                                        <td >
                        2018-08-24 09:52:15
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/48/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="48" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="47" />
                    </td>
                                        <td >
                        47
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/cd7aa3394c35330ed7f9e4095c6adb65.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="47" />
                    </td>
                                        <td >
                        2018-08-24 09:48:31
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/47/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="47" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="46" />
                    </td>
                                        <td >
                        46
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/949fa36ebd56593445fb61d141fd2a81.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="46" />
                    </td>
                                        <td >
                        2018-08-24 09:23:07
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/46/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="46" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="45" />
                    </td>
                                        <td >
                        45
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        GUESS
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/3c8f613d30b4e487ef95a5e4cdea634c.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="45" />
                    </td>
                                        <td >
                        2018-08-24 08:58:42
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/45/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="45" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="44" />
                    </td>
                                        <td >
                        44
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/95349d3747fdaf79d391fdc98e083701.jpg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="44" />
                    </td>
                                        <td >
                        2018-08-24 08:56:02
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/44/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="44" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="43" />
                    </td>
                                        <td >
                        43
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/a111c060ebb6ffbbd2d34ae278501789.jpg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="43" />
                    </td>
                                        <td >
                        2018-08-24 08:54:45
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/43/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="43" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="42" />
                    </td>
                                        <td >
                        42
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/98fafb9da683cd9ee854598f3f3a3bd5.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="42" />
                    </td>
                                        <td >
                        2018-08-24 08:52:58
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/42/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="42" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="41" />
                    </td>
                                        <td >
                        41
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/9d9aab8be8634708c9cf5b690fee74a4.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="41" />
                    </td>
                                        <td >
                        2018-08-24 08:51:11
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/41/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="41" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="40" />
                    </td>
                                        <td >
                        40
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/830d640cd17eba0bf186dc649d5c3053.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="40" />
                    </td>
                                        <td >
                        2018-08-24 08:49:49
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/40/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="40" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="39" />
                    </td>
                                        <td >
                        39
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/c400aecd5c6d87782ac9af33dd7a5980.jpg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="39" />
                    </td>
                                        <td >
                        2018-08-24 08:46:21
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/39/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="39" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="38" />
                    </td>
                                        <td >
                        38
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        HOUSEHOLDS
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/61559578baf403e03565e73a14f845ce.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="38" />
                    </td>
                                        <td >
                        2018-08-24 06:33:31
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/38/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="38" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="37" />
                    </td>
                                        <td >
                        37
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        UNDER ARMOUR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/da687e60e54bd7fc7eab5c76e7ec3754.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        100,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="37" />
                    </td>
                                        <td >
                        2018-08-24 06:25:48
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/37/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="37" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="36" />
                    </td>
                                        <td >
                        36
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/820283598735f98a9b23960821da438b.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        25,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="36" />
                    </td>
                                        <td >
                        2018-08-24 06:07:15
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/36/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="36" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="35" />
                    </td>
                                        <td >
                        35
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        VALENTINO
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/41c8f0d0111cd5a3f0538604233cbed8.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="35" />
                    </td>
                                        <td >
                        2018-08-24 05:13:58
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/35/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="35" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="34" />
                    </td>
                                        <td >
                        34
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/a32f12e009ebf0d24ab264706ecbc15e.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="34" />
                    </td>
                                        <td >
                        2018-08-24 05:09:34
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/34/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="34" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="33" />
                    </td>
                                        <td >
                        33
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        NIKE
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/a635cc2bdf5485ccb2c0cc9d186968b2.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="33" />
                    </td>
                                        <td >
                        2018-08-24 04:44:04
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/33/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="33" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="32" />
                    </td>
                                        <td >
                        32
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/efd9fb910ba539c125b7c431a1ccc563.jpg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="32" />
                    </td>
                                        <td >
                        2018-08-24 04:40:54
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/32/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="32" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="31" />
                    </td>
                                        <td >
                        31
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/0e1416d509af3712bd801404ca928702.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        10,000
                    </td>
                                        <td >
                        <span class="label label-default">Default</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="31" />
                    </td>
                                        <td >
                        2018-08-24 04:39:03
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/31/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="31" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        <input type="checkbox" class="grid-row-checkbox" data-id="30" />
                    </td>
                                        <td >
                        30
                    </td>
                                        <td >
                        Easy Polo Black Edition
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        <img src="https://demo.s-cart.org/documents/website/product/ed74817ffed5bcc692c00135f4288a8c.jpeg" style='max-width:50px;max-height:200px' class='img img-thumbnail' />
                    </td>
                                        <td >
                        15,000
                    </td>
                                        <td >
                        20,000
                    </td>
                                        <td >
                        <span class="label label-success">New</span>
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="30" />
                    </td>
                                        <td >
                        2018-08-24 04:35:39
                    </td>
                                        <td >
                        <a href="/system_admin/shop_product/30/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="30" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>20</b> of <b>40</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    
    <!-- Pagination viewAdmin.elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="https://demo.s-cart.org/system_admin/shop_product?page=2">2</a></li>
                
    <!-- Next Page Link -->
        <li class="page-item"><a class="page-link" href="https://demo.s-cart.org/system_admin/shop_product?page=2" rel="next">&raquo;</a></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="https://demo.s-cart.org/system_admin/shop_product?per_page=10" >10</option>
<option value="https://demo.s-cart.org/system_admin/shop_product?per_page=20" selected>20</option>
<option value="https://demo.s-cart.org/system_admin/shop_product?per_page=30" >30</option>
<option value="https://demo.s-cart.org/system_admin/shop_product?per_page=50" >50</option>
<option value="https://demo.s-cart.org/system_admin/shop_product?per_page=100" >100</option>
        </select>
        &nbsp;<small>entries</small>
    </label>

    </div>
    <!-- /.box-body -->
</div>
</div></div>

    </section>
        <script data-exec-on-popstate>

    $(function () {
                    $('.grid-row-checkbox').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChanged', function () {
    if (this.checked) {
        $(this).closest('tr').css('background-color', '#ffffd5');
    } else {
        $(this).closest('tr').css('background-color', '');
    }
});

var selectedRows = function () {
    var selected = [];
    $('.grid-row-checkbox:checked').each(function(){
        selected.push($(this).data('id'));
    });

    return selected;
}

                    
$('.grid-switch-status').bootstrapSwitch({
    size:'mini',
    onText: 'ON',
    offText: 'OFF',
    onColor: 'primary',
    offColor: 'default',
    onSwitchChange: function(event, state){

        $(this).val(state ? 'on' : 'off');

        var pk = $(this).data('key');
        var value = $(this).val();

        $.ajax({
            url: "/system_admin/shop_product/" + pk,
            type: "POST",
            data: {
                "status": value,
                _token: LA.token,
                _method: 'PUT'
            },
            success: function (data) {
                toastr.success(data.message);
            }
        });
    }
});

                    
$('.grid-row-delete').unbind('click').click(function() {

    var id = $(this).data('id');

    swal({
        title: "Are you sure to delete this item ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "Cancel",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: '/system_admin/shop_product/' + id,
                    data: {
                        _method:'delete',
                        _token:LA.token,
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

                    
$('.grid-select-all').iCheck({checkboxClass:'icheckbox_minimal-blue'});

$('.grid-select-all').on('ifChanged', function(event) {
    if (this.checked) {
        $('.grid-row-checkbox').iCheck('check');
    } else {
        $('.grid-row-checkbox').iCheck('uncheck');
    }
});

                    
$('.grid-batch-0').on('click', function() {

    var id = selectedRows().join();

    swal({
        title: "Are you sure to delete this item ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        showLoaderOnConfirm: true,
        cancelButtonText: "Cancel",
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    method: 'post',
                    url: '/system_admin/shop_product/' + id,
                    data: {
                        _method:'delete',
                        _token:'2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa'
                    },
                    success: function (data) {
                        $.pjax.reload('#pjax-container');

                        resolve(data);
                    }
                });
            });
        }
    }).then(function(result) {
        var data = result.value;
        if (typeof data === 'object') {
            if (data.status) {
                swal(data.message, '', 'success');
            } else {
                swal(data.message, '', 'error');
            }
        }
    });
});

                    
$('.grid-refresh').on('click', function() {
    $.pjax.reload('#pjax-container');
    toastr.success('Refresh succeeded !');
});

                    $('.5bcf39323dabe-filter-btn').click(function (e) {
    if ($('#filter-box').is(':visible')) {
        $('#filter-box').addClass('hide');
    } else {
        $('#filter-box').removeClass('hide');
    }
});
                    
$('.grid-per-pager').on("change", function(e) {
    $.pjax({url: this.value, container: '#pjax-container'});
});

            });
</script>
    </div>

    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        &nbsp;&nbsp;&nbsp;&nbsp;

        <strong>Version</strong>&nbsp;&nbsp; 2.0.4

    </div>
    <!-- Default to the left -->
    <strong><a href="https://s-cart.org">S-Cart</a></strong> Free Open Source eCommerce for Business
</footer>

</div>

<script>
    function LA() {}
    LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
</script>

    @include("viewAdmin.elements.script")

</body>
</html>
