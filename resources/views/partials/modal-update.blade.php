<div class="modal" tabindex="-1" role="dialog" id="modal-update">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form  action="{{ route('user.update', Auth::id()) }}" id="form-update" >
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nameuser" class="col-md-4 col-form-label text-md-right">Nombre de Usuario:</label>

                            <div class="col-md-6">
                                <input id="nameuser" type="text" class="form-control{{ $errors->has('nameuser') ? ' is-invalid' : '' }}" name="nameuser" value="{{ $user->nameuser }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobbies" class="col-md-4 col-form-label text-md-right">Pasatiempos:</label>

                            <div class="col-md-6">
                                <textarea id="hobbies" type="hobbies" class="form-control{{ $errors->has('hobbies') ? ' is-invalid' : '' }}" 
                                	name="hobbies" required minlength="1">{{ $user->hobbies }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad:</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required>
                            </div>
                        </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary " id="guardar-modal">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>