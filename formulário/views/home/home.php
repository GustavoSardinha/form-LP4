<?php
    if (isset($_SESSION['erro'])):
     echo "<br>";
     echo "<div class='container alert alert-danger'>";
     echo $_SESSION['msg'];
     echo "</div>";
    endif;
    unset($_SESSION['erro']);
?>
<?php
    if (isset($_SESSION['sucesso'])):
     echo "<br>";
     echo "<div class='container alert alert-success'>";
     echo "Cadastro realizado com sucesso!";
     echo "</div>";
    endif;
    unset($_SESSION['sucesso']);
?>
<br>
<div class="container opacity">
    <h1>Formulário LP4</h1>
</div>
<br>
<fieldset>
    <form method="POST" action="controllers/cadastrar.php">
        <div class="container opacity">
            <hr>
            <div class="form-group">
                <label for="nomeLabel">Seu nome</label>
                <input class="form-control" name="nome" type="text" id="nomeLabel" placeholder="Digite seu nome" required>
            </div>
            <br>
            <div class="form-group">
                <label for="emailLabel">Seu email</label>
                <input class="form-control" name="email" type="email" id="emailLabel" placeholder="Digite seu email" required>
            </div>
            <br>
            <label >Sexo</label>
            <script>var sids = ['#Feminino', '#Masculino'];</script>
            <br>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions"  id="Feminino" value="F" onchange="verifyAll(sids)" required>
            <label class="form-check-label" for="Feminino">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Masculino" value="M" onchange="verifyAll(sids)" required>
            <label class="form-check-label" for="Masculino">Masculino</label>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label for="dataLabel">Que dia você nasceu?</label>
                <input class="form-control" name="data" type="date" id="dataLabel" required>
            </div>
            <hr>
            <div class="form-group">
                <label for="cidadeLabel">Cidade</label>
                <input class="form-control" name="cidade" type="text" id="cidadeLabel" placeholder="Digite sua cidade" required>
            </div>
            <br>
            <div class="form-group">
                <label for="estadoLabel">Estado</label>
                <select id="estadoLabel" class="form-select" name="estado"> 
                    <option selected value="none">Selecionar...</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RR">RR</option>
                    <option value="RO">RO</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label>Escolaridade</label>
                <br>
                <br>
                <script>var ids = ['#EFI', '#EFC', '#EMI', '#EMC', '#ESI', '#ESC'];</script>
                <div class="form-check">
                <input checked class="form-check-input bg-danger" type="radio" name="escolaridadeRadios" id="EFI" value="EFI" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="EFI">
                    Ensino Fundamental Incompleto
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="escolaridadeRadios" id="EFC" value="EFC" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="EFC">
                    Ensino Fundamental Completo
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="escolaridadeRadios" id="EMI" value="EMI" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="EMI">
                    Ensino Médio Incompleto
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="escolaridadeRadios" id="EMC" value="EMC" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="EMC">
                    Ensino Médio Completo
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="escolaridadeRadios" id="ESI" value="ESI" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="ESI">
                    Ensino Superior Incompleto
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="escolaridadeRadios" id="ESC" value="ESC" onchange="verifyAll(ids)" required>
                <label class="form-check-label" for="ESC">
                    Ensino Superior Completo
                </label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="loginLabel">Crie um Login</label>
                <input type="text" class="form-control" id="loginLabel" aria-describedby="login" name="login" placeholder="Crie um Login" required onchange="toLower('#loginLabel')">
                <small id="login" class="form-text text-muted">no máx. 12 caracteres. Só letras MINÚSCULAS</small>
            </div>
            <br>
            <div class="form-group">
                <label for="senhaLabel">Crie uma Senha</label>
                <div class='eye' id="eye1" onclick="show('#senhaLabel', '#eye1')"></div>
                <input type="password" class="form-control" id="senhaLabel" aria-describedby="senha" name="senha" placeholder="Crie uma Senha" required onchange="toLower('#senhaLabel')">
                <small id="senha" class="form-text text-muted">Só pode ter 8 caracteres. Só letras MINÚSCULAS</small>
            </div>
            <br>
            <div class="form-group">
                <label for="confirmeLabel">Confime sua Senha</label>
                <div class='eye' id="eye2" onclick="show('#confirmeLabel', '#eye2')"></div>
                <input type="password" class="form-control" id="confirmeLabel" name="confirme" placeholder="Confirme sua Senha" required onchange="toLower('#confirmeLabel')">
            </div>
            <br>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="novidadesCheck" name="novidades" onclick="verify('#novidadesCheck')">
                <label class="form-check-label" for="novidadesCheck">Eu gostaria de receber semanalmente as Novidades do <s>Mengão</s> Fotos da Galera do chat!</label>
            </div>
            <br>
            <button type="submit" class="btn btn-danger form-control" onclick="validate()">Enviar</button>
        </div>
    </form>
</fieldset>
