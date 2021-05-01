@extends('front.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $details_form->nom_form }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12" id="load_page">
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function(){
                                    getNombrePage({{$details_form->id_form}});

                                });
                                function getNombrePage(id_form){

                                    $.ajax({
                                        url: "{{route('front.page.get_nombre_page')}}",
                                        method:'POST',
                                        data: {id_form:id_form, _token:"{{csrf_token()}}"},
                                        success: function(data){
                                            $('#compteur_verification').html('Nombre de page traitées: 0/'+data.nombre_page);
                                            var skip_row=0;
                                            setTimeout(verificationData(data.id_page,id_form), 20000); //On attend 10 secondes avant d'exécuter la fonction

                                        },

                                    });
                                }
                                function verificationData(id_page,id_form){
                                   // console.log(id_page);
                                    $.ajax({
                                        url: "{{route('front.page.load_page')}}",
                                        method:'POST',
                                        data: {id_page:id_page, _token:"{{csrf_token()}}",id_form:id_form},
                                        success: function(data){
                                            $("#load_page").append(data.load_page);
                                        },
                                        timeout:200000,

                                    });
                                }
                            </script>
                                </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="pull-right d-flex justify-content-between">
                                    <small></small>
                                    <small id="compteur_verification">Nombre de page traitées: 0/inconnu</small>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="justify-content-between progress progress-lg mt-2">
                                    <div class="progress-bar progress-bar-success" id="progress_bar_import" role="progressbar" style="width: 0%" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


