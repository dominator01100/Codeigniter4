<div class="mb-3">
    <label class="form-label" for="username">Usuario</label>
    <input <?=!$created ? "readonly" : ""?> class="form-control" type="text" id="username" name="username" value="<?=old('username', $user->username)?>"/>
</div>
<div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <input <?=!$created ? "readonly" : ""?> class="form-control" type="text" id="email" name="email" value="<?=old('email', $user->email)?>"/>
</div>
<div class="mb-3">
    <label class="form-label" for="username">Contraseña</label>
    <input class="form-control" type="password" id="password" name="password" value=""/>
</div>

<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> <?=$textButton?></button>