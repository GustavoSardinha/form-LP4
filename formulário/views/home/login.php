<br>
<div class="container opacity">
    <form method="POST">
        <h1>Fazer Login</h1>
        <hr>
        <div class="form-group">
            <label for="loginLabel">Login</label>
            <input type="text" class="form-control" id="loginLabel" aria-describedby="login" name="login" placeholder="Digite seu Login" required>
        </div>
        <br>
        <div class="form-group">
            <label for="senhaLabel">Senha</label>
            <div class='eye' id="eye1" onclick="show('#senhaLabel', '#eye1')"></div>
            <input type="password" class="form-control" id="senhaLabel" aria-describedby="senha" name="senha" placeholder="Digite sua Senha" required>
        </div>
        <br>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="mantenhaCheck" name="mantenha" onclick="verify('#mantenhaCheck')">
            <label class="form-check-label" for="mantenhaCheck">Mantenha-me logado!</label>
        </div>
        <br>
        <button type="submit" class="btn btn-danger form-control">Logar</button>
    </form>
</div>