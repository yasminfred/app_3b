<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <style>
        /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Corpo da página */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    background-color: #d7e7f8;
}

/* Caixa do formulário */
.box {
    background-color: #bfd8eb;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

/* Título */
.title {
    font-size: 24px;
    font-weight: bold;
    color: #4e7a8f;
    margin-bottom: 20px;
}

/* Linhas de input */
.input-row {
    margin-bottom: 15px;
    text-align: left;
}

/* Estilo dos labels */
.labels {
    font-size: 14px;
    color: #555;
    margin-bottom: 8px;
    display: inline-block;
}

/* Estilo dos campos de input */
.inputs {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Estilização para os botões */
.button-row {
    display: flex;
    justify-content: space-between;  /* Aplica o espaço entre os botões */
    gap: 10px; /* Garante que haja um espaço entre os botões */
    margin-top: 20px;
}

/* Botões */
.btn {
    padding: 12px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-save {
    background-color: #007bff;
    color: white;
    width: 30%; /* Garante que os botões fiquem lado a lado */
}

.btn-save:hover {
    background-color: #0056b3;
}

/* Botão "Voltar" - cor vermelha */
.btn-back {
    background-color: #dc3545; /* Cor vermelha */
    color: white;
    width: 100%; /* Garante que os botões fiquem lado a lado */
}

.btn-back:hover {
    background-color: #c82333; /* Cor mais escura para o hover */
}
h1{
    text-align: center;
}
body{
    background-color: #dfebf8;
}

    </style>
</head>
<body>
<div class="box">
                <div class="input-wrapper">
                    <h1 class="title">Cadastro</h1>
                <!-- Campo de Nome -->
                <div class="input-row">
                    <label for="name" class="labels">Nome: </label>
                    <input type="text" id="name" class="inputs" placeholder="Digite seu nome">
                </div>
            
                <!-- Campo de CPF -->
                <div class="input-row">
                    <label for="cpf" class="labels">CPF: </label>
                    <input type="text" id="cpf" class="inputs" placeholder="Digite seu CPF">
                </div>
            
                <!-- Campo de Email -->
                <div class="input-row">
                    <label for="email" class="labels">Email: </label>
                    <input type="email" id="email" class="inputs" placeholder="Digite seu email">
                </div>
            
                <!-- Campo de Telefone -->
                <div class="input-row">
                    <label for="phone" class="labels">Fone: </label>
                    <input type="tel" id="phone" class="inputs" placeholder="Digite seu número">
                </div>
            
                <!-- Campo de Senha -->
                <div class="input-row">
                    <label for="password" class="labels">Senha: </label>
                    <input type="password" id="password" class="inputs" placeholder="Digite sua senha">
                </div>
            
                <!-- Campo de Confirmar Senha -->
                <div class="input-row">
                    <label for="confirm-password" class="labels">Confirmar: </label>
                    <input type="password" id="confirm-password" class="inputs" placeholder="Confirmar senha">
                </div>
                <div class="button-row">
                    <a href="./index.html"><button class="btn btn-back">Voltar</button></a>
                    <button class="btn btn-save">Enviar</button>
                </div>
            </div>
        </div>
</body>
</html>