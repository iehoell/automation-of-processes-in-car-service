<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    <title>Online car service</title>
</head>
<style>
    .header{
        padding-top: 15px;
        position: fixed;
        width: 100%;
        background: #161616;
        padding-bottom: 5px;
        z-index: 2;
    }
    .header__title{
        color: white;
        font-weight: 900;
        font-size: 30px;
        width: 90px;
    }
    .header__inputField{
        border-radius: 50px;
        border: 2px solid #B7B7B7;
        padding-left: 50px;
        width: 300px;
        height: 30px;
        background: transparent;
    }
    .header__inputField:focus{
        outline: none;
        color: lightgray;
    }
    .header__inputField::placeholder{
        color: lightgray;
    }
    .header__flexItems{
        display: flex;
        justify-content: space-around;
        .mainLink{
            text-decoration: none;
        }
    }
    .header__navMenu{
        .navMenu__navMenuItem{
            text-decoration: none;
            margin-right: 25px;
            font-size: 20px;
            font-weight: 200;
            color: #B7B7B7;
        }
        .navMenu__navMenuItem:hover{
            color: #FFFFFF;
            text-decoration: underline #E7772E;
            cursor: pointer;
        }
    }
    .header__icons{
        display: flex;
        color: #FFFFFF;
        .firstSVG{
            margin-right: 20px;
        }
    }
    .footer{
        position: static;
        background-color: #161616;
        color: #FFFFFF;
        display: flex;
        justify-content: space-around;
    }
    .footer__button{
        height: 40px;
        width: 150px;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 500;
        font-size: 16px;
        background: #E7772E;
        color: #FFFFFF;
        border: none;
    }
    .footer__button:hover{
        color: #FFFFFF;
        height: 40px;
        width: 150px;
        border-radius: 10px;
        border: 1px solid #E7772E;
        cursor: pointer;
        font-weight: 500;
        font-size: 16px;
        background: transparent;
    }
    .body{
        margin: 0;
        background: #161616;
        color: #FFFFFF;
    }
    .content{
        padding-top: 55px;
        margin-left: 5%;
        margin-right: 5%;
    }
    .map{
        width: 100%;
        height: 61vh;
    }
    .services{
        border: 1px solid darkred;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        color: #FFFFFF;
        background: #161616;
    }
    .services__element{
        padding: 10px;
        border: 1px solid  darkblue;
        width: 25%;
        margin: 2%;
    }
    .subscriptionPlans{
        margin-bottom: 5%;
        h2{
            color: #FFFFFF;
        }
        h4{
            color: grey;
        }
        .subscriptionPlans__text{
            text-align: center;
        }
        .subscriptionPlans__flexBlocks{
            display: flex;
            justify-content: center;
            .subscriptionPlans__flexBlocks__elem{
                width: 20%;
                padding: 5%;
                margin: 1%;
                background: black;
                text-align: center;
                .subscriptionPlans__flexBlocks__elem__price{
                    display: flex;
                    justify-content: center;
                    text-align: center;
                    margin-top: -15%;
                    h1{
                        color: #E7772E;
                        font-size: 50px;
                    }
                    .nostyles{
                        color: grey;
                        font-size: 24px;
                        margin-left: 20px;
                        margin-top: 25%;
                    }
                }
                .subscriptionPlans__flexBlocks__elem__list{
                    margin-left: -10%;
                    text-align: center;
                    color: antiquewhite;
                    li{
                        list-style-type:  none;
                        font-size: 20px;
                    }
                }
                .subscriptionPlans__flexBlocks__elem__button {
                    margin-top: 5%;
                    height: 40px;
                    width: 150px;
                    border-radius: 10px;
                    cursor: pointer;
                    font-weight: 500;
                    font-size: 16px;
                    background: #E7772E;
                    color: #FFFFFF;
                    border: none;
                }
                .subscriptionPlans__flexBlocks__elem__button:hover {
                    color: #FFFFFF;
                    height: 40px;
                    width: 150px;
                    border-radius: 10px;
                    border: 1px solid #E7772E;
                    cursor: pointer;
                    font-weight: 500;
                    font-size: 16px;
                    background: transparent;
                }
            }
        }
    }
    .advantages{
        margin-top: 8%;
        margin-bottom: 8%;
        .advantages__elems{
            display: flex;
            justify-content: space-between;
            .advantages__elems__textBlock{
                justify-content: left;
                width: 60%;
                .advantages__elems__textBlock__1{
                    padding: 10px;
                    border-radius: 15px;
                    border: 1px solid lightgrey;
                    display: flex;
                    margin-top:5%;
                    margin-bottom: 5%;
                    .advantages__elems__textBlock__elem1{
                        margin-right: 5%;
                        text-decoration: 1px solid #E7772E underline;
                        font-size: 20px;
                        color: #E7772E;
                    }:hover{cursor: pointer}
                    .advantages__elems__textBlock__elem2{
                        margin-right: 5%;
                        text-decoration: none;
                        font-size: 20px;
                        color: #FFFFFF;
                    }
                    .advantages__elems__textBlock__elem3{
                        margin-right: 5%;
                        text-decoration: none;
                        font-size: 20px;
                        color: #FFFFFF;
                    }
                    .advantages__elems__textBlock__elem4{
                        margin-right: 5%;
                        text-decoration: none;
                        font-size: 20px;
                        color: #FFFFFF;
                    }
                }
                .advantages__elems__textBlock__2{
                    font-size: 24px;
                    margin-bottom: 5%;
                }
                .advantages__elems__textBlock__3{
                    .subscriptionPlans__flexBlocks__elem__button {
                        margin-top: 5%;
                        height: 100px;
                        width: 250px;
                        border-radius: 10px;
                        cursor: pointer;
                        font-weight: 500;
                        font-size: 16px;
                        background: #E7772E;
                        color: #FFFFFF;
                        border: none;
                    }
                    .subscriptionPlans__flexBlocks__elem__button:hover {
                        color: #FFFFFF;
                        height: 100px;
                        width: 250px;
                        border-radius: 10px;
                        border: 1px solid #E7772E;
                        cursor: pointer;
                        font-weight: 500;
                        font-size: 16px;
                        background: transparent;
                    }
                }
                .advantages__elems__textBlock__elem{
                    margin-right: 5%;
                    text-decoration: 1px solid #E7772E underline;
                    font-size: 20px;
                    color: #E7772E;
                }
                .advantages__elems__textBlock__elem:hover{
                    cursor: pointer;
                }
            }
            .advantages__elems__imgBlock{
                width: 30%;
                img{
                    border-radius: 10px;
                    box-shadow: 5px 5px 5px 5px black;
                }
            }
        }
    }
</style>
<body class="body">
<header class="header">
    <div class="header__flexItems">
        <a href='/' class="mainLink">
            <div class="header__title">
                OCS
            </div>
        </a>
        <div class="header__navMenu">
            <a class="navMenu__navMenuItem" href='/'>Главная</a>
            <a class='navMenu__navMenuItem' href='/#subscriptionPlans'>Планы подписок</a>
            <a class='navMenu__navMenuItem' href='/#services'>Услуги</a>
            <a class='navMenu__navMenuItem' href='/#advantages'>Преимущества</a>
            <a class='navMenu__navMenuItem' href='/#contacts'>Контакты</a>
            <a class='navMenu__navMenuItem' href='/#AoPiCS'>AoPiCS</a>
        </div>
        <div class='header__icons'>
            <a href='/shoppingCart'>
                <svg
                    class='secondSVG'
                    width='25'
                    height='25'
                    viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 8H17.1597C18.1999 8 19.0664 8.79732 19.1528 9.83391L19.8195 17.8339C19.9167 18.9999 18.9965 20 17.8264 20H6.1736C5.00352 20 4.08334 18.9999 4.18051 17.8339L4.84718 9.83391C4.93356 8.79732 5.80009 8 6.84027 8H8M16 8H8M16 8L16 7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7L8 8M16 8L16 12M8 8L8 12" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </a>
        </div>
    </div>
</header>


<div class="content">

    <div class="services" id="services">
        <div class="services__element">
            <h2>Auto repair</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
        <div class="services__element">
            <h2>Fluid replacement</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
        <div class="services__element">
            <h2>Warranty service</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
        <div class="services__element">
            <h2>Paint work</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
        <div class="services__element">
            <h2>Car diagnostics</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
        <div class="services__element">
            <h2>Battery replacement</h2>
            <p>Similique minima magni quidem aliquid illo sequi corporis fugiat type and llo</p>
        </div>
    </div>

    <div class="advantages" id="advantages">
        <h2>Наши преимущества</h2>
        <div class="advantages__elems">
            <div class="advantages__elems__textBlock">
                <div class="advantages__elems__textBlock__1">
                    <div class="advantages__elems__textBlock__elem1">Out equipment</div>
                    <div class="advantages__elems__textBlock__elem2">Our experience</div>
                    <div class="advantages__elems__textBlock__elem3">Loyalty program</div>
                    <div class="advantages__elems__textBlock__elem4">Quality</div>
                </div>
                <div class="advantages__elems__textBlock__2">
                    <p>
                        Metus quam cras vehicula ante, potenti eget. Vel est integer, vivamus proin torquent, sodales aliquam tincidunt laoreet est, at in sollicitudin laoreet etiam sit suspendisse, ligula ut vestibulum dapibus et neque. Nibh et risus ipsum amet pede, eros arcu non, velit ridiculus elit, mauris cursus et. Vel cursus sagittis sem nullam odio pede. Metus quam cras vehicula ante, potenti eget. Vel est integer, vivamus proin torquent, sodales aliquam tincidunt laoreet est
                    </p>
                </div>
                <div class="advantages__elems__textBlock__3">
                    <a href='/subscriptionPlans' class="subscriptionPlans__flexBlocks__elem__link">
                        <button class="subscriptionPlans__flexBlocks__elem__button">
                            Приобрести
                        </button>
                    </a>
                </div>
            </div>
            <div class="advantages__elems__imgBlock">
                <img src="https://quto.ru/thumb/1280x960/smart/filters:quality(75)/imgs/2022/12/28/12/5733516/ad40ed144a8170e8f5d3395ce1cbf3eb8b1b6aa8.jpg" width="450" height="450">
            </div>
        </div>
    </div>

    <div class="subscriptionPlans" id="subscriptionPlans">
        <div class="subscriptionPlans__text">
            <h2>Планы подписки</h2>
            <h4>Выберите тот план, который будет наиболее вам удобен.</h4>
        </div>
        <div class="subscriptionPlans__flexBlocks">
            <div class="subscriptionPlans__flexBlocks__elem">
                <h2>Стандартная</h2>
                <h4>Базовая версия подписки</h4>

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>$ 99</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Virginia safety ispection</li>
                    <li>Emission inspection or air filter</li>
                    <li>4 Tire repairs</li>
                    <li>4 Tire rotations</li>
                    <li>2 Oil changes up to $40</li>
                    <li>Check engine diagnostics</li>
                </ul>

                <a href='/subscriptionPlans' class="subscriptionPlans__flexBlocks__elem__link">
                    <button class="subscriptionPlans__flexBlocks__elem__button">
                        Приобрести
                    </button>
                </a>
            </div>
            <div class="subscriptionPlans__flexBlocks__elem">
                <h2>Премиум</h2>
                <h4>Продвинутая версия подписки</h4>

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>$ 499</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Virginia safety ispection</li>
                    <li>Emission inspection or air filter</li>
                    <li>4 Tire repairs</li>
                    <li>4 Tire rotations</li>
                    <li>2 Oil changes up to $40</li>
                    <li>Check engine diagnostics</li>
                </ul>

                <a href='/subscriptionPlans' class="subscriptionPlans__flexBlocks__elem__link">
                    <button class="subscriptionPlans__flexBlocks__elem__button">
                        Приобрести
                    </button>
                </a>
            </div>
            <div class="subscriptionPlans__flexBlocks__elem">
                <h2>Эксклюзивная</h2>
                <h4>Вы можете сэкономить до 40%</h4>

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>$ 1199</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Virginia safety ispection</li>
                    <li>Emission inspection or air filter</li>
                    <li>4 Tire repairs</li>
                    <li>4 Tire rotations</li>
                    <li>2 Oil changes up to $40</li>
                    <li>Check engine diagnostics</li>
                </ul>

                <a href='/subscriptionPlans' class="subscriptionPlans__flexBlocks__elem__link">
                    <button class="subscriptionPlans__flexBlocks__elem__button">
                        Приобрести
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="footer" id="contacts">
        <h2>Contacts Us</h2>
        <h2>+100 256 65 55</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
            <button class="footer__button">
                Обратная связь
            </button>
    </div>
</footer>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d140377.28154276972!2d47.82763922948704!3d56.65026699560467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0L7QvdC70LDQudC9INC60LDRgNGC0LAg0LDQstGC0L7RgdC10YDQstC40YHQvtCyINC50L7RiNC60LDRgCDQvtC70Ysg0LPRg9Cz0Lsg0LrQsNGA0YLRiw!5e0!3m2!1sru!2sru!4v1746019568518!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>
<?php /**PATH C:\OSPanel\automation-of-processes-in-car-service\resources\views/welcome.blade.php ENDPATH**/ ?>
