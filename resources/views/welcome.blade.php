<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />  

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                :root{
    /* VARIAVEIS */
    --title-color: #4e7a8f;
    --container-bg-color: #d7e7f8;
    --box-bg-color: #bfd8eb;
    --border-shadow: 3px 3px 2px 1px rgba(0, 0, 0, 0.2);
    --input-border: 1.5px solid #fcfafa;
    --input-color: #1b1414;
    --a-color: #f5efeb;
}
*{
    border: 0;
    padding: 0;
    margin: 0;
}
.container{
    height: 100dvh;
    width: 100dvw;
    background-color: var(--container-bg-color);
    display: flex;
    justify-content: center;
    align-items: center;
}
.box{
    background-color: var(--box-bg-color);
    height: 74dvh;
    max-width: 80dvw;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 5dvw;
    box-shadow: var(--border-shadow);
}
.title{
    color: var(--title-color);
    margin-top: 3dvh;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
input{
    height: 5dvh;
    width: 100%;
    max-width: 100%;
    color: var(--input-color);
    border-radius: 10px;
    padding-inline: 5dvw;
    border: var(--input-border);
    box-sizing: border-box;
    margin: 0;
}
.input-wrapper{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top: 2dvh;
    flex-direction: column;
    padding: 10dvw;
}
.input-row{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 1dvh;
}
button{
    height: 4dvh;
    width: 14dvw;
    background-color: #4e7a8f;
    border-radius: 1dvh;
    color: #fcfafa;
    margin-top: -10dvh;
}
.link-wrapper{
    /* estilo links senha e cadastro */
    margin-top: 4dvh;
    display: flex;
    flex-direction: column-reverse;
    margin-left: dvw;
}
a{
    color: #4c6179;
}
.labels{
    font: bold;
    color: #2f4156;
}
            </style>
        @endif
    </head>
    <body>
    <div class="container">
        <div class="box">
            <h1 class="title">Login</h1>
            <div class="input-wrapper">
                <div class="input-row">
                    <label for="user" class="labels">CPF: </label>
                    <input type="text" id="user" class="inputs" placeholder="Digite seu CPF">
                </div>
                <div class="input-row">
                    <label for="pass" class="labels">Senha: </label>
                    <input type="password" id="pass" class="inputs" placeholder="Digite sua senha">
                </div>
            </div>
            <button>Entrar</button>
            <div class="link-wrapper">
                <a href="./cadastro.html" target="_blank">Cadastrar</a>
                <a href="./alterar.html" target="_blank">Esqueci minha senha</a>
            </div>
        </div>
    </div>
    </body>
</html>
