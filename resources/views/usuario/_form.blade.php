@if ($errors->any())
    <ul class="collection">
        @foreach ($errors->all() as $error)
            <li class="collection-item red-text">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="row">
    <div class="input-field col s12 m6">
        <input type="text" name="nome" value="{{ old('nome',$usuario->nome) }}">
        <label for="nome">Nome</label>
    </div>
    <div class="input-field col s12 m6">
        <input type="text" name="login" value="{{ old('login', $usuario->login) }}">
        <label for="login">Matricula</label>
    </div>
    <div class="input-field col s12 m6">
        <input type="email" name="email" value="{{ old('email', $usuario->email) }}">
        <label for="email">Email</label>
    </div>
    <div class="input-field col s12 m6">
        <input type="text" name="cargo" value="{{ old('cargo', $usuario->cargo) }}">
        <label for="cargo">Cargo</label>
    </div>
</div>