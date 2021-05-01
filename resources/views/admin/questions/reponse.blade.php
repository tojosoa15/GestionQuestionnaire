<div id="reponses" class="tab-pane fade" role="tabpanel" aria-labelledby="reponse">
    <section class="content">
        <div class="pull-right">
            <a href=""><button type="submit" class="btn btn-primary mine_btn">{{__('Nouvelle réponse')}} </button></a>
        </div><br><br>
        <div class="card"> 
            <div class="card-body ">
                <div class="row test">
                    <div class="col-12">
                        <div class="title">
                            <h4>{{__("Liste des réponses")}}</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="table_liste_answer" class="table" style="border-collapse: collapse;width: 100%;">
                                <thead>
                                <tr>
                                    <th>{{__('Nom réponse')}}</th>
                                    <th>{{__('Question')}}</th>
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