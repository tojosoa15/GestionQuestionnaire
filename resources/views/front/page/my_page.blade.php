<div class="form-group row">
    <label for="name" class="col-md-12 col-form-label text-md-center">{{$detail_page->name_form_page}}</label>
</div>
@php($questionnaire=array())
@foreach($detail_page->questions as $question)

    <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">{{$question->questionnaire}}</label>

    </div>
    @if($question->type_question->id_type_question==1)
        @foreach($question->answers as $answer)
            <div class="col-sm-4">
                <label class="radio-inline"><input type="radio" name="question_{{$question->id_question}}" value="{{$answer->id_answer}}" >{{$answer->name_answer}}</label>
            </div>
        @endforeach
    @endif
    @if($question->type_question->id_type_question==2)
        @foreach($question->answers as $answer)
            <div class="col-sm-4">
                <label class="radio-inline"><input type="checkbox" name="question_{{$question->id_question}}" value="{{$answer->id_answer}}" >{{$answer->name_answer}}</label>
            </div>
        @endforeach
    @endif

@endforeach
<input type="hidden" name="questionnaire" value="{{json_encode($detail_page->questions->pluck('id_question'))}}">
@if($detail_form->form_pages->last()->id_form_page==$detail_page->id_form_page)
    <div class="panel-body text-center">
        <button type="submit" class="button btn-primary" id="register_accession"> Valider </button>
    </div>
@endif

@if($detail_form->form_pages->last()->id_form_page!=$detail_page->id_form_page)
    <div class="panel-body text-center">

        <button type="button" class="button btn-primary" {{$detail_form->form_pages->first()->id_form_page==$detail_page->id_form_page?'disabled':''}}> Précédent </button>

        <button type="reset" class="button" onclick="saveToSession()"> <a > Suivant </a> </button>
    </div>
@endif
<script type="text/javascript">

    function saveToSession(){
        var question=JSON.parse($("input[name='questionnaire']").val());

        var data_responds= [];
        for (i = 0; i < question.length; i++) {
            var test = [];
            $("input[name='question_"+question[i]+"']:checked").each(function() {
                test.push($(this).val());
            });
            data_responds.push(new DATA_RESPOND(question[i],test));
        }
        $.ajax({
            url: "{{route('front.page.save_response_next_load_page')}}",
            method:'POST',
            data: {id_page:"{{$detail_page->id_form_page}}", _token:"{{csrf_token()}}",data_responds:data_responds},
            success: function(data){
                $("#load_page").html(data.load_page);
            },
            timeout:200000,

        });

    }
    function DATA_RESPOND(id_question,id_answer){
        this.id_question=id_question;
        this.id_answer=id_answer;
    }
</script>
