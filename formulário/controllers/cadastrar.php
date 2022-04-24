<?php
    session_start();
    $nome = $_POST['nome'];
    var_dump($nome);
    $email = $_POST['email'];
    var_dump($email);
    $sexo = $_POST['inlineRadioOptions'];
    var_dump($sexo);
    $data = $_POST['data'];
    var_dump($data);
    $cidade = $_POST['cidade'];
    var_dump($cidade);
    $estado = $_POST['estado'];
    var_dump($estado);
    $escolaridade = $_POST['escolaridadeRadios'];
    var_dump($escolaridade);
    $login = $_POST['login'];
    var_dump($login);
    $senha = $_POST['senha'];
    var_dump($senha);
    $confirme = $_POST['confirme'];
    var_dump($confirme);
    $novidades = $_POST['novidades'];
    var_dump($novidades);
    if($estado == "none"){
        $_SESSION['erro'] = true;
        $_SESSION['msg'] = "Por favor, escolha um estado!";
        header('Location: /formulário/home');
        exit;
    }
    $ano = (int) substr($data, 0, -6);
    echo($ano);
    if(($ano > 2022) || ($ano < 1880)){
        $_SESSION['erro'] = true;
        $_SESSION['msg'] = "Data inválida! Por favor, tente novamente!";
        header('Location: /formulário/home');
        exit;
    }
    if(strlen($login) > 13){
        $_SESSION['erro'] = true;
        $_SESSION['msg'] = "O login deve ter no máximo 12 caracteres! Por favor, tente novamente!";
        header('Location: /formulário/home');
        exit;
    }
    if($senha != $confirme || strlen($senha) > 9){
        $_SESSION['erro'] = true;
        $_SESSION['msg'] = "As senhas não conferem ou são inválidas! Por favor, tente novamente!";
        header('Location: /formulário/home');
        exit;
    }
    $_SESSION['sucesso'] = true;
    header('Location: /formulário/home');

?>