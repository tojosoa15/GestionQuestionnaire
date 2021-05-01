@extends('admin.layouts.app')
@section('menu_restaurant_active','active')
@section('menu_restaurant_liste_resto_show','show')
@section('menu_restaurant_liste_resto_active','active')

<style type="text/css">
    #hidden{
        display: none;
    }
</style>
@section('content_sign')


<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="#">{{__('Formulaire')}}</a></li>
        <li  class="breadcrumb-item active" aria-current="page"><span>{{__('Gerer formulaire')}}
        </span></li>
    </ol>
</nav>
    <section class="content ">
        <div class=" grid-margin stretch-card">
            <div class="vertical-tab tab-minimal tab-minimal-success col-md-12">
                <ul class="nav nav-tabs col-md-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="form" data-toggle="tab" href="#forms" role="tab" aria-controls="forms" aria-selected="true"><i class="mdi mdi-home-outline"></i>{{__('Formulaire')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="form_page" data-toggle="tab" href="#form_pages" role="tab" aria-controls="form_pages" aria-selected="false"><i class="mdi mdi-arrange-send-backward"></i>{{__('Pages')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="question" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="false"><i class="mdi mdi-arrange-send-backward"></i>{{__('Questions')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reponse" data-toggle="tab" href="#reponses" role="tab" aria-controls="reponses" aria-selected="false"><i class="mdi mdi-arrange-send-backward"></i>{{__('Réponses')}}</a>
                    </li>
                </ul>
                <div class="tab-content col-md-10">
                    @include('admin.questions.form')
                    @include('admin.questions.form_page')
                    @include('admin.questions.question')
                    @include('admin.questions.reponse')
                </div>

            </div>
        </div>
    </section>
@include('admin.questions.script_question')
@include('admin.questions.modals.modal_formulaire')
@endsection