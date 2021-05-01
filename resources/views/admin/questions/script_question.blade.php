<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

<script type="text/javascript" charset="UTF-8">
   
    // Historique promotion
    $(document).ready(function () {
        datatable_form();
        datatable_form_page();
        datatable_question();
        datatable_answer();
    });
    function datatable_form(){
        $('#table_form').DataTable({
            // "aLengthMenu": [[50, 100, 200, -1], [50, 100,200,{!!  trans('datatable.all')!!}]],
            "iDisplayLength": 100,
            // "language": { {!!json_decode(json_encode(trans('datatable.datatable_translate')))  !!} },
            ajax:{
                "url": "{{route('admin.liste_form')}}",
                "type": "GET",
                //"data":{ _token: "{{csrf_token()}}"}
            },
            columns: [
                {data: 'nom_form'},
                {data: 'action'}
            ]


        });
        $('#table_form').each(function(){
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

    function datatable_form_page(){
        $('#table_form_page').DataTable({
            // "aLengthMenu": [[50, 100, 200, -1], [50, 100,200,{!!  trans('datatable.all')!!}]],
            "iDisplayLength": 100,
            // "language": { {!!json_decode(json_encode(trans('datatable.datatable_translate')))  !!} },
            ajax:{
                "url": "{{route('admin.liste_form_page')}}",
                "type": "GET",
                //"data":{ _token: "{{csrf_token()}}"}
            },
            columns: [
                {data: 'name_form_page'},
                {data: 'form_id'},
                {data: 'action'}
            ]


        });
        $('#table_form_page').each(function(){
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

    function datatable_question(){
        $('#table_liste_question').DataTable({
            // "aLengthMenu": [[50, 100, 200, -1], [50, 100,200,{!!  trans('datatable.all')!!}]],
            "iDisplayLength": 100,
            // "language": { {!!json_decode(json_encode(trans('datatable.datatable_translate')))  !!} },
            ajax:{
                "url": "{{route('admin.liste_question')}}",
                "type": "GET",
                //"data":{ _token: "{{csrf_token()}}"}
            },
            columns: [
                {data: 'question'},
                {data: 'type_question_id'},
                {data: 'form_page_id'},
                {data: 'action'}
            ]


        });
        $('#table_liste_question').each(function(){
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

    function datatable_answer(){
        $('#table_liste_answer').DataTable({
            // "aLengthMenu": [[50, 100, 200, -1], [50, 100,200,{!!  trans('datatable.all')!!}]],
            "iDisplayLength": 100,
            // "language": { {!!json_decode(json_encode(trans('datatable.datatable_translate')))  !!} },
            ajax:{
                "url": "{{route('admin.liste_answer')}}",
                "type": "GET",
                //"data":{ _token: "{{csrf_token()}}"}
            },
            columns: [
                {data: 'name_answer'},
                {data: 'question_id'},
                {data: 'action'}
            ]


        });
        $('#table_liste_answer').each(function(){
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

    function AddForm(){
        $('#modal_add_form').modal('show');
    }

    // Ajouter une société
    function addForm(){
        var nom_form = $("#nom_form").val();
        if(nom_form != ''){
            $.ajax({
                dataType: 'json',
                type:'GET',
                url: "{{route('admin.add_form')}}",
                data:{
                    nom_form:nom_form
                }
            }).done(function(data){
                console.log(data.message);
                // $.alert({
                //     title: 'Insertion formulaire',
                //     content: data.message,
                //     type: 'green',
                //     typeAnimated: true,
                // });
                // $("#nom_form").val('');
                // $('#modal_add_form').modal('hide');
                // $('#table_form').DataTable().ajax.reload();
                
            });
        }else{
         //   alert('Veuiller remplir les champ obligatoire.');
        }
    }
</script>