@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form  action="{{ route('user.update', Auth::id()) }}" id="form-update" >
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus value="{{ $user->name }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nameuser" class="col-md-4 col-form-label text-md-right">Nombre de Usuario:</label>

                            <div class="col-md-6">
                                <input id="nameuser" type="text" class="form-control{{ $errors->has('nameuser') ? ' is-invalid' : '' }}" name="nameuser" value="{{ $user->nameuser }}" required>

                                @if ($errors->has('nameuser'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nameuser') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobbies" class="col-md-4 col-form-label text-md-right">Pasatiempos:</label>

                            <div class="col-md-6">
                                <textarea id="hobbies" type="hobbies" class="form-control{{ $errors->has('hobbies') ? ' is-invalid' : '' }}" 
                                	name="hobbies" required minlength="1">{{ $user->hobbies }}</textarea>

                                @if ($errors->has('hobbies'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobbies') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Ciudad:</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="guardar" data-id="{{ Auth::id() }}">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript" src="/js/user.js"></script>


@endsection
