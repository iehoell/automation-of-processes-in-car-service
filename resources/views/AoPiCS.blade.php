<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AoPiCS</title>
</head>
<style>
    body{
        margin: 0;
    }
    .mainContainer{
        display: flex;
        .mainContainer__menu{
            text-align: center;
            background: #E7772E;
            color: #FFFFFF;
            width: 8%;
            height: 100vh;
            .mainContainer__menu__menuItem{
                text-align: center;
                padding-top: 12%;
                padding-bottom: 12%;
            }:hover{
            background: #2d3748;cursor: pointer;}
        }
        .mainContainer__content{
            background: #FFFFFF;
            color: black;
            width: 90%;
        }
    }
    .mainContainer__content{
        .mainContainer__content__tasksBlock{
            margin-left: 5%;
            .tasksBlock__titles{
                display: flex;
                h4{
                    text-align: left;
                    align-items: start;
                    width: 200px;
                }
            }
            .tasksBlock__tasks{
                display: flex;
                .tasksBlock__tasks__tasksItem{
                    border-radius: 15px;
                    border: 1px solid lightgrey;
                    height: max-content;
                    width: 160px;
                    margin-right: 20px;
                    padding-left: 15px;
                }
            }
        }
    }
    .mainContainer__content__clientsBlock{
        margin-left: 5%;
        margin-right: 3%;
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
        }
        td{
            text-align: center;
        }
        .clientsBlock__header{
            display: flex;
            justify-content: space-between;
            a{
                text-decoration: none;
                color: #FFFFFF;
                margin-top: 1%;
            }:hover{cursor: pointer}
            .clientsBlock__addNewClient{
                margin-top: 1%;
                width: 40px;
                height: 40px;
                padding: 5px;
                font-size: 20px;
            }
        }
    }
    .mainContainer__content__storageBlock{
        margin-left: 5%;
        margin-right: 3%;
        .storageBlock__header {
            display: flex;
            justify-content: space-between;
            a{
                text-decoration: none;
                color: #FFFFFF;
                margin-top: 1%;
            }:hover{cursor: pointer}
            .storageBlock__addNewDelivery{
                margin-top: 1%;
                width: 40px;
                height: 40px;
                padding: 5px;
                font-size: 20px;
            }
        }
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
        }
        td{
            text-align: center;
        }
    }
    .mainContainer__content__dealsBlock{
        margin-left: 5%;
        margin-right: 5%;
        .dealsBlock__clientBlock{
            border: 1px solid #161616;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            border-radius: 5px;
            margin-bottom: 5%;
            .dealsBlock__clientBlock__fio{
                display: flex;
                img{
                    width: 40px;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 10px;
                    margin-right: 10px;
                }
                h4{

                }
            }
            .dealsBlock__clientBlock__number{
                display: flex;
                img{
                    width: 40px;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 10px;
                    margin-right: 10px;
                }
            }
            .dealsBlock__clientBlock__sale{
                p{
                    margin: 0;
                }
            }
            .dealsBlock__clientBlock__auto{
                p{
                    margin:0;
                }
                h4{
                    margin: 5px;
                }
            }
        }
        .dealsBlock__workBlock{
            margin-bottom: 5%;
            table{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 100%;
                border-spacing: 10px;
            }
            .titleRow{
                font-weight: 600;
                font-size: 20px;
            }
        }
        .dealsBlock__productBlock{
            margin-bottom: 5%;
            table{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 100%;
                border-spacing: 10px;
            }
            .titleRow{
                font-weight: 600;
                font-size: 20px;
            }
        }
    }
    .mainContainer__content__dealsList{
        margin-left: 5%;
        margin-right: 5%;
        table{
            width: 100%;
            border-bottom: 1px solid lightgrey;
        }
        .titleRow{
            font-weight: 600;
            font-size: 20px;
        }
        a{
            text-decoration: none;
            color: black;
        }
    }
    .links{
        text-decoration: none;
        color: #FFFFFF;
    }
    .delete_and_edit_buttons{
    }:hover{cursor: pointer;}
</style>
<body>
    <div class="mainContainer">
        <div class="mainContainer__menu">
            <h2>AoPiCS</h2>
            <div class="mainContainer__menu__menuItem"><h4><a href="/AoPiCS/dealsList" class="links">Сделки</a></h4></div>
            <div class="mainContainer__menu__menuItem"><h4><a href="/AoPiCS/tasks" class="links">Задачи</a></h4></div>
            <div class="mainContainer__menu__menuItem"><h4><a href="/AoPiCS/storage" class="links">Склад</a></h4></div>
            <div class="mainContainer__menu__menuItem"><h4><a href="/AoPiCS/clients" class="links">Клиенты</a></h4></div>
            <div class="mainContainer__menu__menuItem"><h4>Аналитика !</h4></div>
            <div class="mainContainer__menu__menuItem"><h4>Настройки !</h4></div>
            <div class="mainContainer__menu__menuItem"><h4>Учёт !</h4></div>
            <div class="mainContainer__menu__menuItem"><h4>Календарь !</h4></div>
        </div>
        <div class="mainContainer__content">
            @yield('content')
        </div>
    </div>
</body>
</html>
