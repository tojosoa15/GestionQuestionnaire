@extends('admin.layouts.app')
@section('menu_questionnaire_active','active')
@section('menu_questionnaire_show','show')

@section('content_sign')
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="#">{{__('Questions')}}</a></li>
            <li  class="breadcrumb-item active" aria-current="page"><span>{{__('Liste des questions')}}
        </span></li>
            </span></li>
        </ol>
    </nav>
    <section class="content">
        <div class="pull-right">
            <a href=""><button type="submit" class="btn btn-primary mine_btn">{{__('Nouvelle question')}} </button></a>
        </div><br><br>
        <div class=" grid-margin stretch-card">
            <div class="vertical-tab tab-minimal tab-minimal-primary col-md-12">
                <div class="tab-pane fade show active" id="listejr" role="tabpanel" aria-labelledby="tab-listejr">
                    <div class="col-12 grid-margin">
                        <div class="alert alert-dismissable" id="message_cost_gain" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="remove mdi mdi-close-circle-outline"></i></button>
                            <div  id="message_text_cost_gain" ></div>
                        </div>
                        <div class="alert alert-dismissable" id="message_product_price_purchase" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="remove mdi mdi-close-circle-outline"></i></button>
                            <div  id="message_text_price_purchase" ></div>
                        </div>
                        <div class="col-lg-12 align-items-stretch grid-margin">
                            <div class="col-12">
                                <div >
                                    <div class="card-body ">
                                        <div class="row test">
                                            <div class="col-12">
                                                <div class="title">
                                                    <h4>{{__("Liste des quetions")}}</h4>
                                                </div>
                                                <div class="table-responsive">
                                                    <table id="table_liste_question" class="table" style="border-collapse: collapse;">
                                                        <thead>
                                                        <tr>
                                                            <th>{{__('Question')}}</th>
                                                            <th><center>{{__('Type question')}}</center></th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('admin.questions.script_question')
@endsection