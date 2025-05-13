<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Войти</title>
</head>
<style>
    .mainContainer1{
        display: flex;
        justify-content: center;
    }
    form{
        padding: 20px;
        border: 1px solid lightgrey;
        display: flex;
        flex-direction: column;
        margin-top: 5%;
    }
    input{
        border: 1px solid lightgrey;
        margin-top: 2%;
        width: 300px;
        padding: 13px;
        border-radius: 10px;
    }
    button{
        border: 1px solid lightgrey;
        border-radius: 10px;
        padding: 13px;
        width: 100%;
    }
    button:hover{
        cursor: pointer;
        color: white;
        background: #E7772E;
    }
    .toRegistrationLink{
        margin-top: 10%;
        margin-bottom: 5%;
        text-decoration: none;
        color: #E7772E;
        width: 90%;
    }
    .toRegistrationLink:hover{
        border-bottom: 1px solid #E7772E;
         }
</style>
    <body>
        <div class="mainContainer1">
            <form action="login/login" method="POST">
                @csrf
                <h3>Войти</h3>
                <input type="email" name="email" placeholder="Электронная почта"/>
                <input type="password" name="password" placeholder="Пароль"/>
                <a href="/registration" class="toRegistrationLink">Нет аккаунта? Зарегистрируйте его сейчас.</a>
                <button type="submit">
                    Войти
                </button>
            </form>
        </div>
    </body>
</html>

