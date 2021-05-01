<!-- Modal -->
<div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Suppression utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <input type="text" name="id_user" id="id_user" hidden="">
           <p>Etes-vous sûr de vouloir supprimer?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="deleteUserAjax();">Oui</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>