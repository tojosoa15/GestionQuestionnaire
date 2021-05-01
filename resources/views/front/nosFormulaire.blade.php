@extends('front.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nos Formulaires') }}</div>

                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="list-group">
                                @foreach($list_forms as $item)
                                    <a class="list-group-item d-flex justify-content-between align-items-center" href="{{route('front.form.details',$item->id_form)}}">
                                        {{$item->nom_form }}

                                    </a>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
