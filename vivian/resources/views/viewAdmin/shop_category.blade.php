
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Shop category</title>
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
            Shop category
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
    <a href="/system_admin/shop_category/create" class="btn btn-sm btn-success" title="New">
        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
    </a>
</div>

        </div>
        <span>
            
        </span>
    </div>

    

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
                <tr>
                                        <th>ID<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_category?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Parent category</th>
                                        <th>Status</th>
                                        <th>Sort</th>
                                        <th>Action</th>
                                    </tr>
            </thead>

            <tbody>
                                <tr >
                                        <td >
                        18
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        ADIDAS
                    </td>
                                        <td >
                        WOMENS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="18" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='18' data-url='/system_admin/shop_category/18' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/18/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="18" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        17
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        UNDER ARMOUR
                    </td>
                                        <td >
                        WOMENS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="17" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='17' data-url='/system_admin/shop_category/17' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/17/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="17" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        16
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        NIKE
                    </td>
                                        <td >
                        MENS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="16" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='16' data-url='/system_admin/shop_category/16' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/16/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="16" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        15
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        FENDI
                    </td>
                                        <td >
                        FASHION
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="15" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='15' data-url='/system_admin/shop_category/15' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/15/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="15" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        14
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        FENDI
                    </td>
                                        <td >
                        KIDS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="14" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='14' data-url='/system_admin/shop_category/14' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/14/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="14" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        13
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        HOUSEHOLDS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="13" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='13' data-url='/system_admin/shop_category/13' data-value='2'>2</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/13/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="13" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        12
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        VALENTINO
                    </td>
                                        <td >
                        SPORTSWEAR
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="12" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='12' data-url='/system_admin/shop_category/12' data-value='3'>3</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/12/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="12" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        11
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        DIOR
                    </td>
                                        <td >
                        SPORTSWEAR
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="11" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='11' data-url='/system_admin/shop_category/11' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/11/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="11" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        10
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        VALENTINO
                    </td>
                                        <td >
                        MENS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="10" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='10' data-url='/system_admin/shop_category/10' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/10/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="10" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        9
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        HOUSEHOLDS
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="9" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='9' data-url='/system_admin/shop_category/9' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/9/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="9" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        8
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        ASICS
                    </td>
                                        <td >
                        KIDS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="8" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='8' data-url='/system_admin/shop_category/8' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/8/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="8" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        7
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        PUMA
                    </td>
                                        <td >
                        KIDS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="7" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='7' data-url='/system_admin/shop_category/7' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/7/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="7" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        6
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        GUESS
                    </td>
                                        <td >
                        HOUSEHOLDS
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="6" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='6' data-url='/system_admin/shop_category/6' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/6/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="6" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        5
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        FASHION
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="5" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='5' data-url='/system_admin/shop_category/5' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/5/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="5" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        4
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        KIDS
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="4" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='4' data-url='/system_admin/shop_category/4' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/4/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="4" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        3
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        WOMENS
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="3" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='3' data-url='/system_admin/shop_category/3' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/3/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="3" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        2
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        MENS
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="2" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='2' data-url='/system_admin/shop_category/2' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/2/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="2" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                                <tr >
                                        <td >
                        1
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                        SPORTSWEAR
                    </td>
                                        <td >
                        
                    </td>
                                        <td >
                                <input type="checkbox" class="grid-switch-status" checked data-key="1" />
                    </td>
                                        <td >
                        <a href='#' class='grid-editable-sort' data-type='text' data-pk='1' data-url='/system_admin/shop_category/1' data-value='0'>0</a>
                    </td>
                                        <td >
                        <a href="/system_admin/shop_category/1/edit">
    <i class="fa fa-edit"></i>
</a><a href="javascript:void(0);" data-id="1" class="grid-row-delete">
    <i class="fa fa-trash"></i>
</a>
                    </td>
                                    </tr>
                            </tbody>
        </table>

    </div>

    

    <div class="box-footer clearfix">
        Showing <b>1</b> to <b>18</b> of <b>18</b> entries<ul class="pagination pagination-sm no-margin pull-right">
    <!-- Previous Page Link -->
        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
    
    <!-- Pagination viewAdmin.elements -->
        <!-- "Three Dots" Separator -->
    
    <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>
                
    <!-- Next Page Link -->
        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
    </ul>

<label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

        <small>Show</small>&nbsp;
        <select class="input-sm grid-per-pager" name="per-page">
            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=10" >10</option>
<option value="https://demo.s-cart.org/system_admin/shop_category?per_page=20" selected>20</option>
<option value="https://demo.s-cart.org/system_admin/shop_category?per_page=30" >30</option>
<option value="https://demo.s-cart.org/system_admin/shop_category?per_page=50" >50</option>
<option value="https://demo.s-cart.org/system_admin/shop_category?per_page=100" >100</option>
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
            url: "/system_admin/shop_category/" + pk,
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

                    $('.grid-editable-sort').editable({"emptytext":"<i class=\"fa fa-pencil\"><\/i>","name":"sort"});
                    
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
                    url: '/system_admin/shop_category/' + id,
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
