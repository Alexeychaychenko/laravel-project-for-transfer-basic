<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dataTables/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dataTables/structure.css')}}" rel="stylesheet" type="text/css" class="structure" />

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!--fontawesome-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

    <!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->
    
    <!-- user define css -->

    <link rel="stylesheet" href="{{asset('assets/css/admin/setting.css')}}">

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables/custom_dt_multiple_tables.css')}}">
    <style>
        body{
            color: black!important;
        }    
    </style>

</head>
<body>
    <div id="app">
    <!-- navbar -->

        <nav class="navbar navbar-expand-md navbar-light bg-primary fixed-top">

            <a class="navbar-brand" href = "{{route('home')}}"><img src="{{asset('assets/images/logo_klein.png')}}"></a>
            
            <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse justify-content-between" id="nav">

                <div class="navbar-nav">

                    <div class="nav-item" >

                        <a class="nav-link text-light font-weight-bold px-3" href="#">MY SETTING</a>

                    </div>
                    @if (auth()->user()->role == 1)
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">ADMIN SETTING</a>
                        <div class="dropdown-menu">
                            
                        <a class="dropdown-item" href="{{route('admin.manageUser')}}">Manage Users</a>
                            
                            <a class="dropdown-item" href="{{route('admin.suppliers')}}">Manage Suppliers</a>
                            
                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item" href="#">Intake Reports</a>
                            
                            <a class="dropdown-item" href="#">Finance</a>
                            
                            <a class="dropdown-item" href="#">Daily Turnover</a>
                            
                            <a class="dropdown-item" href="#">Daily Invoice</a>
                            
                            <a class="dropdown-item" href="#">Deposit List</a>
                            
                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item" href="{{route('admin.startday')}}">My Start Day</a>
                            
                            <a class="dropdown-item" href="{{route('admin.endday')}}">My End Day</a>
                            
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">Drivers</a>
                            
                            <a class="dropdown-item" href="{{route('admin.location')}}">Locations</a>

                        </div>
                    </div>
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CARGO</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Inventory</a>
                            <a class="dropdown-item" href="#">Dlivery Note</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Order Requests</a>
                            <a class="dropdown-item" href="#">Giftcards</a>
                            <a class="dropdown-item" href="#">Refunds</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Other Expense</a>
                            <a class="dropdown-item" href="#">Client Requests</a>
                            <a class="dropdown-item" href="#">Wire Transfer</a>
                            <a class="dropdown-item" href="#">Unpack</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.intakes')}}">Intake</a>
                            <a class="dropdown-item" href="#">Search Intakes</a>
                            <a class="dropdown-item" href="#">Sales Invoices</a>

                        </div>
                    </div>
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">COMMISSION</a>
                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="#">Settings</a>
                 
                            <a class="dropdown-item" href="#">Report</a>

                        </div>
                    </div>
                    @elseif (auth()->user()->role == 2)
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CARGO</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">My Order Requests</a>
                            <a class="dropdown-item" href="#">My Giftcards</a>
                            <a class="dropdown-item" href="#">My My Requests</a>
                            <a class="dropdown-item" href="#">My Intakes</a>
                        </div>
                    </div>
                    @elseif (auth()->user()->role == 3)
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CARGO</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Delivery Note</a>
                            <a class="dropdown-item" href="#">Order Requests</a>
                            <a class="dropdown-item" href="#">Giftcards</a>
                            <a class="dropdown-item" href="#">Refunds</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Other Expense</a>
                            <a class="dropdown-item" href="#">Client Requests</a>
                            <a class="dropdown-item" href="#">Wire Transfer</a>
                            <a class="dropdown-item" href="#">Unpack</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Intake</a>
                            <a class="dropdown-item" href="#">Search Intakes</a>
                            <a class="dropdown-item" href="#">Sales Invoices</a>
                        </div>
                    </div>
                    @elseif (auth()->user()->role == 4)
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CARGO</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Order Requests</a>
                            <a class="dropdown-item" href="#">Giftcards</a>
                            <a class="dropdown-item" href="#">Refunds</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Other Expense</a>
                            <a class="dropdown-item" href="#">Client Requests</a>
                            <a class="dropdown-item" href="#">Wire Transfer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Intake</a>
                            <a class="dropdown-item" href="#">Search Intakes</a>
                        </div>
                    </div>
                    @elseif (auth()->user()->role == 5)
                    <div class="dropdown justify-content-between">
                        <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CARGO</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Inventory</a>
                            <a class="dropdown-item" href="#">Unpack</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Intake</a>
                            <a class="dropdown-item" href="#">Search Intakes</a>
                            <a class="dropdown-item" href="#">Sales Invoices</a>
                        </div>
                    </div>
                    @endif

                </div>

                <div class = "row admin-panel">
                    <div class="dropdown justify-content-between">
                    <a id="dropdownMenu-admin"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">
                        @if (isset(auth()->user()->role))
                            @if (auth()->user()->role == 1)
                                <img class = "admin-image" src = "{{asset('assets/images/admin.jpg')}}">
                            @elseif (auth()->user()->role == 2)
                                <img class = "admin-image" src = "{{asset('assets/images/admin.jpg')}}">
                            @elseif (auth()->user()->role == 3)
                                <img class = "admin-image" src = "{{asset('assets/images/employer.jpg')}}">
                            @elseif (auth()->user()->role == 4)
                                <img class = "admin-image" src = "{{asset('assets/images/localmanager.jpg')}}">
                            @else (auth()->user()->role == 5)
                                <img class = "admin-image" src = "{{asset('assets/images/client.jpg')}}"> 
                            @endif
                        @endif
                    </a>
                        <div class="dropdown-menu">
                            @if (auth()->user()->role == 1)
                                <a class="dropdown-item" href="{{ route('admin.setting') }}">Settings</a>
                                <a class="dropdown-item" href="{{route('admin.slide')}}">Slider Setting</a>

                                <div class="dropdown-divider"></div>   
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
    
                        </div>
                    </div>

                    <div class = "justify-content-between" style = "margin-top: 12px;">
                        @if(auth()->user()->role == 1)
                            <a id = "notification-link" href = "{{route('admin.message')}}">
                                <i class="fa fa-envelope" aria-hidden="true" style = "color: white;"></i>
                            </a>
                        @else
                            <a id = "notification-link" href = "{{route('user.message')}}">
                                <i class="fa fa-envelope" aria-hidden="true" style = "color: white;"></i>
                                <span id="navbarNotificationCounter" class="badge rounded-pill badge-notification bg-danger" alt="Notifications"></span>
                            </a>
                        @endif
                            
                    </div>
                </div>
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- Begin modal plugin -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/js/datatables.js')}}"></script>
<script>
    $(document).ready(function() {
        $('table.multi-table').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () {
                $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                $('.dataTables_wrapper table').removeClass('table-striped');
            }
        });
    } );

    // change user's status function
    function changeStatus(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.manageUser.changestatus')}}",
            success: function(ret){
                if (ret == 1)
                {
                    $("#user_fa_"+id).attr('class', 'fas fa-stop');
                    $("#user_fa_"+id).css("color","green");
                    $("#user_fa_edit_"+id).css("color","green");
                }else
                {
                    $("#user_fa_"+id).attr('class', 'fas fa-play');
                    $("#user_fa_"+id).css("color", "red");
                    $("#user_fa_edit_"+id).css("color", "red");
                }
                
            }
        });
    }

    // delete user function
    function deleteUser(id)
    {
        $.ajax({
            method: 'delete',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.manageUser.deleteuser')}}",
            success: function(ret){
                $("#user_"+id+"_table").remove();
                
            }
        });
    }

    $(document).ready(function (e) {
            
        $('#image-modal-open').change(function(){
                    
            let reader = new FileReader();
            
            reader.onload = (e) => { 

                $('#modal-idcardimage').attr('src', e.target.result); 
                fileupload = 1;
            }

            reader.readAsDataURL(this.files[0]); 
            
        });
            
    });
    // $('#modal-role-edit').change(function(){
    //     alert($('#modal-role-edit').val());
    // });
    // defult image when user click edit button
    function editOpenModal(id){
        $("#modal-idcardimage").attr('src', '{{asset("assets/upload/images")}}/'+id.idcard);
        $("#modal-idcardnumber").val(id.idcardnumber);
        $("#modal-username").val(id.username);
        $("#modal-email").val(id.email);
        $("#modal-firstname").val(id.firstname);
        $("#modal-lastname").val(id.lastname);
        $("#modal-phone").val(id.phonenumber);
        $("#modal-address").val(id.address);
        $("#modal-location").val(id.location);
        if(id.role == 1)
            $("#modal-role-edit").val("Admin");
        if(id.role == 2)
            $("#modal-role-edit").val("Client");
        if(id.role == 3)
            $("#modal-role-edit").val("Employer");
        if(id.role == 4)
            $("#modal-role-edit").val("Location Manager");
        if(id.role == 5)
            $("#modal-role-edit").val("Warehouse");
        $("#madal-pickup").val(id.pickup);
        $("#modal-userid").val(id.id);
        
    }

    // location setting function
    $(document).ready(function (e) {
            
        $('#location-select-photo').change(function(){
                    
            let reader = new FileReader();
            
            reader.onload = (e) => { 

                $('#location-preview').attr('src', e.target.result); 
                fileupload = 1;
            }

            reader.readAsDataURL(this.files[0]); 
            
        });
            
    });

    // delete selected location
    function deleteLocation(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.location.delete')}}",
            success: function(ret){
                $("#location_"+id+"_table").remove();
            }
        });
    }

    // slide preview function
    $(document).ready(function (e) {
            
        $('#select-slide1').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#slide-preview1').attr('src', e.target.result); 
                fileupload = 1;
            }
            reader.readAsDataURL(this.files[0]);
        });
        $('#select-slide2').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#slide-preview2').attr('src', e.target.result); 
                fileupload = 1;
            }
            reader.readAsDataURL(this.files[0]);
        });
        $('#select-slide3').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#slide-preview3').attr('src', e.target.result); 
                fileupload = 1;
            }
            reader.readAsDataURL(this.files[0]);
        });
            
    });
    var editable_val;
    // edit supplier function
    function editSupplier(id)
    {
        // console.log($("#supplier_name_"+id))
        editable_val = $("#supplier_name_"+id).text();
        $("#supplier_name_"+id).css('border', '1px solid black');
        $("#supplier_name_"+id).attr('contenteditable', 'true');
        $( "#supplier_name_"+id ).focus();
        $("#supplier_edit_"+id).css('display', 'none');
        $("#supplier_save_"+id).show();
        $("#supplier_cancel_"+id).show();
        $("#supplier_delete_"+id).css('display', 'none');
    }
    function saveSupplier(id)
    {
        var name = $( "#supplier_name_"+id ).text();
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id,
                "name": name
            },
            url: "{{route('admin.supplier.save')}}",
            success: function(ret){
                $("#supplier_name_"+id).css('border', '0px solid black');
                $("#supplier_name_"+id).attr('contenteditable', 'false');
                $("#supplier_edit_"+id).show();
                $("#supplier_save_"+id).css('display', 'none');
                $("#supplier_cancel_"+id).css('display', 'none');
                $("#supplier_delete_"+id).show();
            }
        });
    }
    function cancelSupplier(id)
    {
        $("#supplier_name_"+id).text(editable_val);
        $("#supplier_name_"+id).css('border', '0px solid black');
        $("#supplier_name_"+id).attr('contenteditable', 'false');
        $("#supplier_edit_"+id).show();
        $("#supplier_save_"+id).css('display', 'none');
        $("#supplier_cancel_"+id).css('display', 'none');
        $("#supplier_delete_"+id).show();
    }
    function deleteSupplier(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.supplier.delete')}}",
            success: function(ret){
                $('#supplier_'+id+'_table').remove();
            }
        });
    }
    // create supplier function
    function createSupplier()
    {
        var name = $("#new-cupplier-name").val();
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name
            },
            url: "{{route('admin.supplier.create')}}",
            success: function(ret){
                $('#supplier-table').append(ret);
                $("#new-cupplier-name").val('');
            }
        });
    }

    // send message function
    function sendMessage()
    {
        var content = $("#message-content").val();
        var username = $("#browser-message").val();
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "content": content,
                "username": username
            },
            url: "{{route('admin.message.save')}}",
            success: function(ret){
                $('#message-table').append(ret);
                $("#message-content").val('');
                $("#browser-message").val('');
            }
        });
    }
    // delete message function
    function deleteMessage(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.message.delete')}}",
            success: function(ret){
                if(ret == 'success')
                {
                    $('#massage-cell-'+id).remove();
                }
            }
        });
    }
    
    var user_id = {{auth()->user()->id}};
    $.ajax({
        method: 'POST',
        data: {
            "_token": "{{ csrf_token() }}",
            "id": user_id
        },
        url: "{{route('get.messagecount')}}",
        success: function(ret){
            if(ret > 0 )
            {
                $('#navbarNotificationCounter').text(ret);
            }
        }
    });

    // delete startd day by id
    function deletestartday(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.startday.delete')}}",
            success: function(ret){
                $('#table-startday-'+id).remove();
                $('#deleteStartday').modal('show');
                // $('#deletestartdayModal').modal('hide');
            }
        });
    }

    // delete endday
    function deleteendday(id)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            url: "{{route('admin.endday.save')}}",
            success: function(ret){
                $('#table-endday-'+id).remove();
                $('#deleteEndday').modal('show');
                // $('#deletestartdayModal').modal('hide');
            }
        });
    }

    // function for intak
    @if(isset($setting))
    var setting = new Array();
        @foreach($setting as $key => $val)
            setting.push({{$val}});
        @endforeach
    @endif
    
    $('#set-shipping-method').on('change', function (e) {        
        console.log(setting[$('#set-shipping-method').val()])
        $('#shipping-price').val((setting[$('#set-shipping-method').val()]*$('#shipping-weight').val()).toFixed(2));
    });

    $('#shipping-weight').on('change', function (e) {
        $('#shipping-price').val((setting[$('#set-shipping-method').val()]*$('#shipping-weight').val()).toFixed(2));
    });

    $('#customername-intake').on('change', function (e) {
        var customername = $('#customername-intake').val();
        @if (isset($users))
            @foreach($users as $key => $val)
                if ("{{$val->username}}" == customername)
                    $('#intake-location').val("{{$val->location}}");
                
            @endforeach
        @endif
    });



    // edit intake function
    function editintake(intake)
    {
        
        if (intake['shippingmethod'] == 'eco')
            $('#edit-shipping-method').val('0');
        if (intake['shippingmethod'] == 'air')
            $('#edit-shipping-method').val('1');
        if (intake['shippingmethod'] == 'sea')
            $('#edit-shipping-method').val('2');
        $('#edit-intake-shippingweight').val(intake['shippingweight']);
        $('#customername-intake-edit').val(intake['customername']);
        $('#edit-intake-barcode').val(intake['barcode']);
        $('#edit-intake-discription').val(intake['description']);
        $('#edit-intake-location').val(intake['location']);
        $('#edit-shipping-price').val(intake['price'].toFixed(2))
        $('#edit-intake-id').val(intake['id']);
        $('#editintakeModal').modal('show');

        $('#edit-shipping-method').on('change', function (e) {
            $('#edit-shipping-price').val((setting[$('#edit-shipping-method').val()]*$('#edit-intake-shippingweight').val()).toFixed(2));
        });

        $('#edit-intake-shippingweight').on('change', function (e) {
            $('#edit-shipping-price').val((setting[$('#edit-shipping-method').val()]*$('#edit-intake-shippingweight').val()).toFixed(2));
        });

        $('#customername-intake-edit').on('change', function (e) {
            var customername = $('#customername-intake-edit').val();
            @if (isset($users))
                @foreach($users as $key => $val)
                    if ("{{$val->username}}" == customername)
                        $('#edit-intake-location').val("{{$val->location}}");
                    
                @endforeach
            @endif
        });
    }

    function deleteintake(intake)
    {
        $.ajax({
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": intake['id']
            },
            url: "{{route('admin.intake.delete')}}",
            success: function(ret){
                if (ret == "success")
                {
                    $('#intake-table-'+intake['id']).remove();
                    $('#delete-intake').modal('show');
                }
            }
        });
    }

    // print bar code larbel
    function printbarcode()
    {
        var DymoLabel = dymo.label.framework.openLabelXml(label);
        
    }

</script>

</html>
