<!-- Modal -->
<div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modification utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form role="form" id="editModalForm">
          <input type="text" name="id_user" id="id_user" hidden="">
          <div class="form-group">
              <label for="username_edit">{{trans('user.username')}}</label>
              <input id="username_edit" class="form-control border border-dark" name="username_edit" type="text">
              <label id="message_username"></label>
          </div>

          <div class="form-group">
              <label for="roleuser_edit">{{trans('user.rule')}}</label>
              <select  name="roleuser_edit" class="form-control border border-dark " id="roleuser_edit" >
                  <option value="">- - -</option>
                  @foreach ($roles as $role)
                      <option value="{{ $role->id_role }}">{{ $role->nom_role }}</option>
                  @endforeach
              </select>
              <label id="message_role"></label>
          </div>
          <div class="form-group">
              <label for="email_edit">{{trans('user.email')}}</label>
              <input id="email_edit" class="form-control  border border-dark" name="email_edit" type="email" required="">
              <label id="message_email"></label>
          </div>
          <div class="form-group form-check-inline">
            <input type="checkbox" id="editPassW" value="">
            <label class="form-check-label" for="editPassW" style="padding-left: 10px;">Changer mot de passe</label>
          </div>
          <div class="form-group" id="password-hidden" hidden="">
            <label for="new_password">Nouvelle {{trans('user.password')}}</label>
            <input id="new_password" class="form-control  border border-dark" name="new_password" type="password">
            <label id="message_password"></label>
          </div>
          
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="editUserAjax();">Enregistrer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>