<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="/main.php">Автошкола Алгоритм</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <p class="me-auto"></p>
                        <ul class="navbar-nav">
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="/main.php">Главная</a>
                            </li>
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="/aboutUs.php">О нас</a>
                            </li>
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="/team.php">Коллектив</a>
                            </li>
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="#">Курсы</a>
                            </li>
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="#">Отзывы</a>
                            </li>
                            <li class="nav-item link">
                            <a class="nav-link text-white" aria-current="page" href="#">Войти</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <style>
        :root {
            --main: #00365C;
        }

        .header {
            background-color: var(--main);
            -webkit-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
            -moz-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
            -ms-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
            -o-box-shadow: 0px 0px 10px rgba(0,0,0,.8);
            box-shadow: 0px 0px 10px rgba(0,0,0,.8);
        }

        .navbar-brand {
            font-weight: 500;
        }

        .navbar-nav {
            display: flex;
            justify-content: space-between;
            min-width: 600px;
        }

        .nav-link {
            font-weight: 500;
        }

        .link a{
            display: inline-block;
            text-decoration: none;
            position: relative;
        }
        .link a:before {
            content: '';
            bottom: 0;
            right: 0;
            position: absolute;
            width: 0%;
            height: 2px;
            background-color: #fff;
            transition: 0.4s;
        }

        .link :hover::before {
            width: 100%;
            left: 0;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        .navbar-toggler-icon,
        .navbar-toggler,
        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
            border: none;
        }
    </style>
</body>
</html>