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
    $("#modal-role-edit").val(id.role);
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