<div id="forms" class="tab-pane fade show active" role="tabpanel" aria-labelledby="form">
    <div class="pull-right">
        <a href="#" onclick="AddForm();"><button type="submit" class="btn btn-primary mine_btn">{{__('Nouvelle formulaire')}} </button></a>
    </div><br><br>
    <div class="col-lg-12 float-left grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row test">
                    <div class="col-12">
                        <div class="alert alert-dismissable taxo-msg tablebio hide">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                            <span id="msg-contet-vv"><label class="test"></label></span>
                        </div>
                        <div class="title">
                            <h4>{{__("Liste des formulaires")}}</h4>
                        </div>
                        <div class="table-responsive">
                            <table id="table_form" class="table" style="border-collapse: collapse;width: 100%;">
                                <thead>
                                <tr>
                                    <th>{{__('Nom formulaire')}}</th>
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