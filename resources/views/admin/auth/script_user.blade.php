<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" charset="UTF-8">
    // validate signup form on keyup and submit

    $(document).ready(function () {
        datatable_user();
        updateProfil();
    });

    function datatable_user(){
        $('#table_user').DataTable({
            // "aLengthMenu": [[50, 100, 200, -1], [50, 100,200,{!!  trans('datatable.all')!!}]],
            "iDisplayLength": 100,

            // "errMode" : 'throw',
            // "language": { {!!json_decode(json_encode(trans('datatable.datatable_translate')))  !!} },
            ajax:{
                "url": "{{route('admin.auth.tous.datatable')}}",
                "type": "GET",
                "data":{ _token: "{{csrf_token()}}"}
            },
            columns: [
                {data: 'name', name: 'name'},
                // {data: 'role', name: 'role'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]


        });
        $('#table_user').each(function(){
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            search_input.attr('placeholder', 'Recherche');
            search_input.removeClass('form-control-sm');
            search_input.addClass('border border-dark')
            // LENGTH - Inline-Form control
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
            length_sel.removeClass('form-control-sm');
            length_sel.addClass('border border-dark')
        });
    }

    function edit_user(idUser){
        $.ajax({
            url: "{{ route('admin.auth.editUser_info') }}",
            type: "GET",
            dataType: "JSON",
            data:{ _token: "{{csrf_token()}}",idUser: idUser},
            success: function(response){
                $('#id_user').val(idUser);
                $('#username_edit').val(response.getUserById.name);
                $('#roleuser_edit').val(response.getUserById.role_id);
                $('#email_edit').val(response.getUserById.email);
                $('#modalEditUser').modal();
                $("#editPassW").change(function() {
                    if($(this).prop('checked')) {
                        $('#password-hidden').removeAttr('hidden');
                        $('#password-hidden').show();
                        $('#editPassW').val(1);
                    } else {
                         $('#password-hidden').hide();
                         $('#editPassW').val(0);
                    }
                });
            },
            error: function(xhr, ajaxOptions, error){
                alert("Erreur de chargement modal: "+error);
            }
        });
    }

    function editUserAjax(){
        var id_user = $('#id_user').val();
        var username =  $('#username_edit').val();
        var role = $('#roleuser_edit').val();
        var password = $('#new_password').val();
        var email = $('#email_edit').val();
        var showPassW = $('#editPassW').val();
        if(showPassW == 1){
            if (username != '' && role != '' && password != '' && email != '') {
                var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!emailReg.test(email)) {
                   $('#message_email').html("{{trans('user.valide_email')}}").css('color','red');
                }else
                {
                    $.ajax({
                        url: "{{ route('admin.auth.editUserAjax') }}",
                        type: "GET",
                        dataType: "JSON",
                        data:
                        { 
                            _token: "{{csrf_token()}}",
                            id_user: id_user,
                            username: username,
                            role: role,
                            password: password,
                            email: email
                        },
                        success: function(response){
                           $('#modalEditUser').modal('hide');
                           $('.taxo-msg').removeClass('alert-danger').addClass('alert-success');
                           $('#msg-contet-vv').html(response.message);
                           $(".taxo-msg").fadeTo(2000, 1000).slideUp(5000, function(){
                                $("msg-modal").alert('close');
                            });
                           $('#table_user').DataTable().ajax.reload();

                        },
                        error: function(xhr, ajaxOptions, error){
                            alert("Erreur de chargement modal: "+error);
                        }
                    });
                }
            }else
            {
                if(username == ''){
                    $('#message_username').html("{{trans('user.required_username')}}").css('color','red');
                }
                if(role == ''){
                    $('#message_role').html("{{trans('user.required_rule')}}").css('color','red');
                }
                if(password == ''){
                    $('#message_password').html("{{trans('user.required_password')}}").css('color','red');
                }
                if(email == ''){
                    $('#message_email').html("{{trans('user.valide_email')}}").css('color','red');
                }
            }
        }else{
            if (username != '' && role != '' && email != '') {
                var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (!emailReg.test(email)) {
                   $('#message_email').html("{{trans('user.valide_email')}}").css('color','red');
                }else
                {
                    $.ajax({
                        url: "{{ route('admin.auth.editUserAjax') }}",
                        type: "GET",
                        dataType: "JSON",
                        data:
                        { 
                            _token: "{{csrf_token()}}",
                            id_user: id_user,
                            username: username,
                            role: role,
                            password: password,
                            email: email
                        },
                        success: function(response){
                           $('#modalEditUser').modal('hide');
                           $('.taxo-msg').removeClass('alert-danger').addClass('alert-success');
                           $('#msg-contet-vv').html(response.message);
                           $(".taxo-msg").fadeTo(2000, 1000).slideUp(5000, function(){
                                $("msg-modal").alert('close');
                            });
                           $('#table_user').DataTable().ajax.reload();

                        },
                        error: function(xhr, ajaxOptions, error){
                            alert("Erreur de chargement modal: "+error);
                        }
                    });
                }
            }else
            {
                if(username == ''){
                    $('#message_username').html("{{trans('user.required_username')}}").css('color','red');
                }
                if(role == ''){
                    $('#message_role').html("{{trans('user.required_rule')}}").css('color','red');
                }
                // if(password == ''){
                //     $('#message_password').html("{{trans('user.required_password')}}").css('color','red');
                // }
                if(email == ''){
                    $('#message_email').html("{{trans('user.valide_email')}}").css('color','red');
                }
            }
        }
     }   
    function delete_user(idUser){
        $('#modalDeleteUser').modal();
        $('#id_user').val(idUser);
    }
    function deleteUserAjax(){
        var idUser = $('#id_user').val();
        $.ajax({
            url: "{{ route('admin.auth.delete_user') }}",
            type: "GET",
            dataType: "JSON",
            data:{ _token: "{{csrf_token()}}",idUser: idUser},
            success: function(response){
                $('#modalDeleteUser').modal('hide');
                // console.log(response.message);
                $('.taxo-msg').removeClass('alert-danger').addClass('alert-success');
                $('#msg-contet-vv').html(response.message);
                $(".taxo-msg").fadeTo(2000, 1000).slideUp(1000, function(){
                  $("msg-modal").alert('close');
                });
                $('#table_user').DataTable().ajax.reload();
            },
            error: function(xhr, ajaxOptions, error){
                alert("Erreur de chargement modal: "+error);
            }
        });
    }

    function updateProfil(){
        $("#editMdp").change(function() {
            if($(this).prop('checked')) {
                $('#password-old').removeAttr('hidden');
                $('#password-edit').removeAttr('hidden');
                $('#password-edit-confirm').removeAttr('hidden');
                $('#password-old').show();
                $('#password-edit').show();
                $('#password-edit-confirm').show();
            } else {
                 $('#password-old').hide();
                 $('#password-edit').hide();
                 $('#password-edit-confirm').hide();
            }
        });
    }      
</script>
