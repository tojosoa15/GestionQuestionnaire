<div id="questions" class="tab-pane fade" role="tabpanel" aria-labelledby="question">
    <section class="content">
        <div class="pull-right">
            <a href=""><button type="submit" class="btn btn-primary mine_btn">{{__('Nouvelle question')}} </button></a>
        </div><br><br>
        <div class="card"> 
            <div class="card-body ">
                <div class="row test">
                    <div class="col-12">
                        <div class="title">
                            <h4>{{__("Liste des quetions")}}</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="table_liste_question" class="table" style="border-collapse: collapse;width: 100%;">
                                <thead>
                                <tr>
                                    <th>{{__('Question')}}</th>
                                    <th>{{__('Type question')}}</th>
                                    <th>{{__('Page')}}</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
    </section>
</div>