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
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        color: #FFFFFF;
        background: #161616;
    }
    .services__element{
        display: flex;
        padding: 10px;
        width: 25%;
        img{
            margin-top: 5%;
            margin-right: 10%;
            width: 100px;
            height: 100px;
            border-radius: 25px;
        }
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
    #text{
        font-size: 18px;
        font-weight: 600;
    }
    .characteristicsBlock{
        color: #FFFFFF;
        display: none;

        animation: show 0.5s 1;
        transition: 0.3s;
    }
    .deliveryBlock{
        color: #FFFFFF;
        display: none;

        animation: show 0.5s 1;
        transition: 0.3s;
    }
    .ourStoresBlock{
        color: #FFFFFF;
        display: none;

        animation: show 0.5s 1;
        transition: 0.3s;
    }
    .SectionsList{
        display: flex;
        font-size: 24px;
        font-weight: 600;
        color: #B7B7B7;
        .SectionsList__reviews{
            margin-right: 5%;
            color: #E7772E;
        }
        .SectionsList__characteristics, .SectionsList__delivery, .SectionsList__ourStores{
            margin-right: 5%;
        }
        .SectionsList__reviews:hover, .SectionsList__characteristics:hover, .SectionsList__delivery:hover, .SectionsList__ourStores:hover{
            cursor: pointer;
            color: #E7772E;
        }

    }
    .mainPhoto{
        margin: 5%;
        width: 90%;
        border-radius: 15px;
    }
</style>
<script>
    reviewsButtonClick = () => {
        //находим все кнопки, по которым будет срабатывать скрипт
        let reviewsButton = document.getElementById('reviewsButton');
        let characteristicsButton = document.getElementById('characteristicsButton');
        let deliveryButton = document.getElementById('deliveryButton');
        let ourStoresButton = document.getElementById('ourStoresButton');
        //находим все блоки, которые будем менять
        let reviewsBlock = document.getElementById('reviewsBlock');
        let characteristicsBlock = document.getElementById('characteristicsBlock');
        let deliveryBlock = document.getElementById('deliveryBlock');
        let ourStoresBlock = document.getElementById('ourStoresBlock');
        //меняем цвет кнопок, когда произошло нажатие
        characteristicsButton.style.color = '#B7B7B7';
        deliveryButton.style.color = '#B7B7B7';
        ourStoresButton.style.color = '#B7B7B7';
        reviewsButton.style.color = '#E7772E';
        //показываем тот блок, который нам нужен, и скрываем все остальные
        deliveryBlock.style.display = 'none';
        deliveryBlock.style.height = '0';

        characteristicsBlock.style.display = 'none';
        characteristicsBlock.style.height = '0';

        ourStoresBlock.style.display = 'none';
        ourStoresBlock.style.height = '0';

        reviewsBlock.style.display = 'block';
        reviewsBlock.style.height = '36%';
    };
    characteristicsButtonClick = () => {
        //находим все кнопки, по которым будет срабатывать скрипт
        let reviewsButton = document.getElementById('reviewsButton');
        let characteristicsButton = document.getElementById('characteristicsButton');
        let deliveryButton = document.getElementById('deliveryButton');
        let ourStoresButton = document.getElementById('ourStoresButton');
        //находим все блоки, которые будем менять
        let reviewsBlock = document.getElementById('reviewsBlock');
        let characteristicsBlock = document.getElementById('characteristicsBlock');
        let deliveryBlock = document.getElementById('deliveryBlock');
        let ourStoresBlock = document.getElementById('ourStoresBlock');
        //меняем цвет кнопок, когда произошло нажатие
        reviewsButton.style.color = '#B7B7B7';
        deliveryButton.style.color = '#B7B7B7';
        ourStoresButton.style.color = '#B7B7B7';
        characteristicsButton.style.color = '#E7772E';
        //показываем тот блок, который нам нужен, и скрываем все остальные
        reviewsBlock.style.display = 'none';
        reviewsBlock.style.height = '0';

        deliveryBlock.style.display = 'none';
        deliveryBlock.style.height = '0';

        ourStoresBlock.style.display = 'none';
        ourStoresBlock.style.height = '0';

        characteristicsBlock.style.display = 'block';
        characteristicsBlock.style.height = '36%';
    };

    deliveryButtonClick = () => {
        //находим все кнопки, по которым будет срабатывать скрипт
        let reviewsButton = document.getElementById('reviewsButton');
        let characteristicsButton = document.getElementById('characteristicsButton');
        let deliveryButton = document.getElementById('deliveryButton');
        let ourStoresButton = document.getElementById('ourStoresButton');
        //находим все блоки, которые будем менять
        let reviewsBlock = document.getElementById('reviewsBlock');
        let characteristicsBlock = document.getElementById('characteristicsBlock');
        let deliveryBlock = document.getElementById('deliveryBlock');
        let ourStoresBlock = document.getElementById('ourStoresBlock');
        //меняем цвет кнопок, когда произошло нажатие
        reviewsButton.style.color = '#B7B7B7';
        characteristicsButton.style.color = '#B7B7B7';
        ourStoresButton.style.color = '#B7B7B7';
        deliveryButton.style.color = '#E7772E';
        //показываем тот блок, который нам нужен, и скрываем все остальные
        reviewsBlock.style.display = 'none';
        reviewsBlock.style.height = '0';

        characteristicsBlock.style.display = 'none';
        characteristicsBlock.style.height = '0';

        ourStoresBlock.style.display = 'none';
        ourStoresBlock.style.height = '0';

        deliveryBlock.style.display = 'block';
        deliveryBlock.style.height = '36%';
    };

    ourStoresButtonClick = () => {
        //находим все кнопки, по которым будет срабатывать скрипт
        let reviewsButton = document.getElementById('reviewsButton');
        let characteristicsButton = document.getElementById('characteristicsButton');
        let deliveryButton = document.getElementById('deliveryButton');
        let ourStoresButton = document.getElementById('ourStoresButton');
        //находим все блоки, которые будем менять
        let reviewsBlock = document.getElementById('reviewsBlock');
        let characteristicsBlock = document.getElementById('characteristicsBlock');
        let deliveryBlock = document.getElementById('deliveryBlock');
        let ourStoresBlock = document.getElementById('ourStoresBlock');
        //меняем цвет кнопок, когда произошло нажатие
        reviewsButton.style.color = '#B7B7B7';
        characteristicsButton.style.color = '#B7B7B7';
        deliveryButton.style.color = '#B7B7B7';
        ourStoresButton.style.color = '#E7772E';
        //показываем тот блок, который нам нужен, и скрываем все остальные
        reviewsBlock.style.display = 'none';
        reviewsBlock.style.height = '0';

        characteristicsBlock.style.display = 'none';
        characteristicsBlock.style.height = '0';

        deliveryBlock.style.display = 'none';
        deliveryBlock.style.height = '0';

        ourStoresBlock.style.display = 'block';
        ourStoresBlock.style.height = '36%';
    };
</script>
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
            <a class='navMenu__navMenuItem' href="/login">Личный кабинет</a>
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
    <img class="mainPhoto" src="https://static3.banki.ru/ugc/7e/13/bd/d7/10985681.jpg">
    <div class="services" id="services">
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Ремонт авто</h2>
                <p>Наш автосервис выполняет полный спектр ремонтных работ – от устранения мелких
                    неисправностей до капитального восстановления двигателя, коробки передач,
                    подвески и тормозной системы. Мы используем качественные запчасти и современное оборудование,
                    чтобы ваш автомобиль снова был в идеальном состоянии.</p>
            </div>
        </div>
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Замена жидкостей</h2>
                <p>Своевременная замена масла, тормозной жидкости,
                    антифриза и других технических жидкостей продлевает срок службы автомобиля.
                    Наши специалисты подберут подходящие составы и проведут замену быстро и аккуратно,
                    соблюдая рекомендации производителя.</p>
            </div>
        </div>
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Гарантийное обслуживание</h2>
                <p>Мы предлагаем профессиональное гарантийное обслуживание автомобилей в
                    соответствии с регламентом производителя. Все работы проводятся с использованием
                    оригинальных запчастей и материалов, что сохраняет заводскую гарантию и обеспечивает надежность.</p>
            </div>
        </div>
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Малярные работы</h2>
                <p>Восстановим внешний вид вашего авто после повреждений: устраним царапины, вмятины,
                    проведем локальную или полную покраску. Используем качественные материалы и профессиональное
                    оборудование, чтобы покрытие было ровным и долговечным.</p>
            </div>
        </div>
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Диагностика автомобиля</h2>
                <p>Компьютерная и механическая диагностика помогает выявить неисправности на ранней стадии.
                    Мы проверяем двигатель, электронику, ходовую часть и другие системы, чтобы вовремя предотвратить
                    серьезные поломки и сэкономить ваши деньги.</p>
            </div>
        </div>
        <div class="services__element">
            <img src="https://c0.klipartz.com/pngpicture/1008/830/gratis-png-automovil-taller-de-reparaciones-automotriz-diseno-automotriz-economia-de-automoviles-reparacion-de-automoviles.png">
            <div>
                <h2>Замена батареи</h2>
                <p>Если аккумулятор потерял заряд или вышел из строя, наши мастера быстро подберут подходящую
                    АКБ, установят её и проверят работу электросистемы. Также предлагаем услуги по зарядке и
                    диагностике старых батарей.</p>
            </div>
        </div>
    </div>
        <div class="advantages" id="advantages">
            <h2>Наши преимущества</h2>
            <div class="advantages__elems">
                <div class="advantages__elems__textBlock">
                    <div class='SectionsList'>
                        <div class='SectionsList__reviews'
                             id='reviewsButton'
                             onclick='reviewsButtonClick()'>
                                Оборудование
                        </div>
                        <div class='SectionsList__characteristics'
                             id='characteristicsButton'
                             onclick="characteristicsButtonClick()">
                                Опыт
                        </div>
                        <div class='SectionsList__delivery'
                             id='deliveryButton'
                             onclick='deliveryButtonClick()'>
                                Программа лояльности
                        </div>
                        <div class='SectionsList__ourStores'
                             id='ourStoresButton'
                             onclick="ourStoresButtonClick()">
                                Качество
                        </div>
                    </div>
                <div class='reviewsBlock'
                     id='reviewsBlock'>
                    <div class='reviewsBlock__reviewers'>
                        <p id="text">
                            Наш автосервис оснащен профессиональным оборудованием ведущих мировых брендов, что позволяет выполнять работы любой сложности с максимальной точностью и эффективностью. Мы используем компьютерные диагностические сканеры для выявления неисправностей, подъемники и стенды для ремонта ходовой части, стенды для развал-схождения, а также специализированное оборудование для обслуживания двигателей, АКПП и электронных систем. Для малярных работ применяются окрасочно-сушильные камеры и точные системы колеровки, гарантирующие идеальное совпадение цвета. Доверяя нам, вы можете быть уверены – ваш автомобиль в надежных руках!
                        </p>
                    </div>
                </div>
                <div class='characteristicsBlock'
                     id='characteristicsBlock'>
                    <div class='characteristicsBlock__characteristics'>
                        <p id="text">
                            Наш автосервис работает на рынке уже более 20 лет, и за это время мы собрали команду высококвалифицированных мастеров с многолетним опытом. Наши специалисты регулярно проходят обучение и сертификацию, чтобы быть в курсе последних технологий и стандартов ремонта. Мы успешно обслужили тысячи автомобилей – от бюджетных моделей до премиальных марок, и каждый клиент для нас важен. Наш опыт позволяет быстро и точно диагностировать неисправности, подбирать оптимальные решения и выполнять работы в срок без потери качества. Доверяйте профессионалам – ваш автомобиль заслуживает лучшего ухода!
                        </p>
                    </div>
                </div>
                <div class='deliveryBlock'
                     id='deliveryBlock'>
                    <div class='deliveryBlock__delivers'>
                        <p id="text">
                            Мы ценим ваше доверие и готовы вознаграждать за выбор нашего автосервиса! Участвуя в программе лояльности, вы получаете:

                            Накопительные скидки – за каждое посещение копите баллы и оплачивайте ими до 20% стоимости услуг

                            Специальные условия для владельцев автопарков и корпоративных клиентов

                            Привилегии – бесплатная диагностика, внеочередное обслуживание, скидки на дополнительные услуги

                            Подарки и акции – сезонные предложения, бесплатные мойки и техосмотры для постоянных клиентов

                            Регистрация в программе бесплатная – просто оформите карту лояльности при первом визите. Чем чаще вы обращаетесь к нам, тем больше выгод получаете!
                        </p>
                    </div>
                </div>
                <div class='ourStoresBlock'
                     id='ourStoresBlock'>
                    <div class='ourStoresBlock__ourStores'>
                        <p id="text">
                            В нашем автосервисе мы гарантируем высокий стандарт качества на каждом этапе обслуживания. Мы используем только проверенные оригинальные запчасти и сертифицированные аналоги, чтобы ваш автомобиль служил долго и безотказно. Все работы выполняются в строгом соответствии с техническими регламентами производителей, а наши мастера проходят регулярное обучение, чтобы быть в курсе современных технологий ремонта.

                            Мы настолько уверены в качестве наших услуг, что предоставляем гарантию на все виды работ — потому что для нас важно не просто выполнить заказ, а обеспечить ваш комфорт и безопасность на дороге.

                            Ваш автомобиль заслуживает лучшего — и мы это гарантируем!
                        </p>
                    </div>
                </div>
                <div class="advantages__elems__textBlock__3">
                    <a class="subscriptionPlans__flexBlocks__elem__link">
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

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>7999 ₽</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Проверка безопасности в Йошкар-Оле</li>
                    <li>Проверка выхлопных газов или воздушного фильтра</li>
                    <li>4 ремонта шин</li>
                    <li>4 замены шин</li>
                    <li>2 замены масла до 4000 рублей</li>
                    <li>Бесплатная диагностика двигателя</li>
                </ul>

                <a class="subscriptionPlans__flexBlocks__elem__link">
                    <button class="subscriptionPlans__flexBlocks__elem__button">
                        Приобрести
                    </button>
                </a>
            </div>
            <div class="subscriptionPlans__flexBlocks__elem">
                <h2>Премиум</h2>
                <h4>Продвинутая версия подписки</h4>

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>39999 ₽</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Проверка безопасности в Йошкар-Оле</li>
                    <li>Проверка выхлопных газов или воздушного фильтра</li>
                    <li>8 ремонта шин</li>
                    <li>8 замены шин</li>
                    <li>2 замены масла до 8000 рублей</li>
                    <li>Бесплатная диагностика двигателя</li>
                </ul>

                <a class="subscriptionPlans__flexBlocks__elem__link">
                    <button class="subscriptionPlans__flexBlocks__elem__button">
                        Приобрести
                    </button>
                </a>
            </div>
            <div class="subscriptionPlans__flexBlocks__elem">
                <h2>Эксклюзивная</h2>
                <h4>Вы можете сэкономить до 40%</h4>

                <div class="subscriptionPlans__flexBlocks__elem__price"><h1>95999 ₽</h1><p class="nostyles">/ за год</p></div>
                <ul class="subscriptionPlans__flexBlocks__elem__list">
                    <li>Проверка безопасности в Йошкар-Оле</li>
                    <li>Проверка выхлопных газов или воздушного фильтра</li>
                    <li>16 ремонта шин</li>
                    <li>16 замены шин</li>
                    <li>4 замены масла до 16000 рублей</li>
                    <li>Бесплатная диагностика двигателя</li>
                </ul>

                <a class="subscriptionPlans__flexBlocks__elem__link">
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
        <h2>Свяжитесь с нами</h2>
        <h2>+100 256 65 55</h2>
        <p>Ремонт без задержек – выезд без проблем!<p>
            <button class="footer__button">
                Обратная связь
            </button>
    </div>
</footer>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d140377.28154276972!2d47.82763922948704!3d56.65026699560467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0L7QvdC70LDQudC9INC60LDRgNGC0LAg0LDQstGC0L7RgdC10YDQstC40YHQvtCyINC50L7RiNC60LDRgCDQvtC70Ysg0LPRg9Cz0Lsg0LrQsNGA0YLRiw!5e0!3m2!1sru!2sru!4v1746019568518!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>
