<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:200,600" rel="stylesheet">

    <style>
        html,body {
            position: relative;
            width: 1440px;
            height: 1142px;

            background: #FFFFFF;
        }
        .NavBar{
            position: absolute;
            width: 1229px;
            height: 87px;
            left: 105px;
            top: 32px;
        }
        .logo_all{
            position: absolute;
            width: 284px;
            height: 87px;
            left: 0px;
            top: 0px;
        }
        .logo{
            position: absolute;
            width: 87px;
            height: 87px;
            left: 0px;
            top: 0px;
        }
        .logo_name{
            position: absolute;
            width: 197px;
            height: 32px;
            left: 87px;
            top: 0px;

            font-family: Appetite New, monospace;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 32px;

            color: #F46384;
        }
        .panel_contakt{
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;

            position: absolute;
            width: 451px;
            height: 21px;
            left: 778px;
            top: 36px;
        }
        .telephone{
            position: static;
            width: 168px;
            height: 21px;
            left: 0px;
            top: 0px;

            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 30px 0px;
        }
        .bouquets{
            position: static;
            width: 63px;
            height: 21px;
            left: 198px;
            top: 0px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            color: #415F77;

            flex: none;
            order: 1;
            flex-grow: 0;
            margin: 0px 10px;
        }
        .about_us{
            position: static;
            width: 48px;
            height: 21px;
            left: 291px;
            top: 0px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            color: #415F77;

            flex: none;
            order: 2;
            flex-grow: 0;
            margin: 0px 20px;
        }
        .delivery{
            position: static;
            width: 82px;
            height: 21px;
            left: 369px;
            top: 0px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            color: #415F77;

            flex: none;
            order: 3;
            flex-grow: 0;
            margin: 0px 20px;
        }
        .footer{
            position: absolute;
            width: 1443px;
            height: 107px;
            left: -3px;
            top: 1035px;

            background: #F4F4F4;
        }
        .footer1{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0px;

            position: absolute;
            width: 1226px;
            height: 41px;
            left: 110px;
            top: 33px;
        }
        .footer_telephone{
            position: static;
            width: 188px;
            height: 41px;
            left: 1037.5px;
            top: 0px;


            /* Inside Auto Layout */

            flex: none;
            order: 3;
            flex-grow: 0;
            margin: 143px 0px;
        }
        .footer_telephone1{
            position: absolute;
            width: 110px;
            height: 17px;
            left: 1078.5px;
            top: 0px;

            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */


            /* Gray 1 */

            color: #333333;
        }
        .footer_telephone2{
            position: absolute;
            width: 147px;
            height: 21px;
            left: 1078.5px;
            top: 20px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 1 */

            color: #333333;
        }
        .footer_delivert{
            position: static;
            width: 177px;
            height: 37px;
            left: 717.5px;
            top: 2px;


            /* Inside Auto Layout */

            flex: none;
            order: 2;
            flex-grow: 0;
            margin: 143px 0px;
        }
        .footer_delivert1{
            position: absolute;
            width: 106px;
            height: 17px;
            left: 755.5px;
            top: 2px;

            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */


            /* Gray 1 */

            color: #333333;
        }
        .footer_delivert2{
            position: absolute;
            width: 139px;
            height: 21px;
            left: 755.5px;
            top: 18px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 1 */

            color: #333333;
        }
        .footer_job{
            position: static;
            width: 181px;
            height: 38px;
            left: 393.5px;
            top: 1.5px;


            /* Inside Auto Layout */

            flex: none;
            order: 1;
            flex-grow: 0;
            margin: 143px 0px;
        }
        .footer_job1{
            position: absolute;
            width: 93px;
            height: 17px;
            left: 435.5px;
            top: 2.5px;

            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */


            /* Gray 1 */

            color: #333333;
        }
        .footer_job2{
            position: absolute;
            width: 139px;
            height: 21px;
            left: 435.5px;
            top: 18.5px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 1 */

            color: #333333;
        }
        .footer_addres{
            position: static;
            width: 250px;
            height: 38px;
            left: 0.5px;
            top: 1.5px;


            /* Inside Auto Layout */

            flex: none;
            order: 0;
            flex-grow: 0;
            margin: 143px 0px;
        }
        .footer_addres1{
            position: absolute;
            width: 110px;
            height: 17px;
            left: 41.5px;
            top: 1.5px;

            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */


            /* Gray 1 */

            color: #333333;
        }
        .footer_addres2{
            position: absolute;
            width: 209px;
            height: 21px;
            left: 41.5px;
            top: 18.5px;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 1 */

            color: #333333;
        }

        .button_add{
            position: absolute;
            width: 242px;
            height: 40px;
            left: 1093px;
            top: 160px;

            /* primary */

            background: #F46384;
            border-radius: 15px;
        }
        .add_product{
            position: absolute;
            width: 196px;
            height: 21px;
            left: 15%;
            top: -15%;



            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 6 */

            color: #F2F2F2;
        }
        .product_bouquet1{
            position: absolute;
            width: 706px;
            height: 224px;
            left: 104px;
            top: 225px;

        }
        .product_bouquet2{
            position: absolute;
            width: 706px;
            height: 224px;
            left: 104px;
            top: 479px;
        }
        .product_bouquet3{
            position: absolute;
            width: 706px;
            height: 224px;
            left: 104px;
            top: 733px;
        }
        .image1{
            position: absolute;
            width: 285px;
            height: 224px;
            left: 0px;
            top: 0px;

            background: url(images/.jpg);
            border-radius: 15px;
        }
        .bouquet_name{
            position: absolute;
            width: 140px;
            height: 32px;
            left: 316px;
            top: 10px;

            font-family: Appetite New;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 32px;
            /* identical to box height */


            /* primary */

            color: #F46384;
        }
        .bouquet_description{
            position: absolute;
            width: 390px;
            height: 56px;
            left: 316px;
            top: 54px;

            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 14px;
            line-height: 17px;

            /* Dark */

            color: #415F77;
        }
        .bouquet_prices{
            position: absolute;
            left: 44.76%;
            right: 17.71%;
            top: 45.09%;
            bottom: 43.3%;

            font-family: Appetite New;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 48px;
            display: flex;
            align-items: center;

            /* orange */

            color: #FFC84D;
        }
        .button_edit{
            position: absolute;
            width: 175px;
            height: 40px;
            left: 316px;
            top: 165px;

            /* orange */

            background: #FFC84D;
            border-radius: 15px;
        }
        .edit{
            position: absolute;
            width: 132px;
            height: 21px;
            left: 15%;
            top: -15%;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 6 */

            color: #F2F2F2;
        }
        .button_delite{
            position: absolute;
            width: 111px;
            height: 40px;
            left: 526px;
            top: 165px;

            /* primary */

            background: #F46384;
            border-radius: 15px;
        }
        .delite{
            position: absolute;
            width: 71px;
            height: 21px;
            left: 20%;
            top: -15%;

            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 21px;

            /* Gray 6 */

            color: #F2F2F2;
        }
    </style>
</head>
        <body class="antialiased">
        <div class="NavBar">
            <div class="logo_all">
                <p class="logo">

                </p>
                <p class="logo_name">
                    Всемцветы.рф
                </p>
            </div>
            <div class="panel_contakt">
                <div class="telephone">
                    +7 (4712) 777-777
                </div>
                <p class="bouquets">
                    Букеты
                </p>
                <p class="about_us">
                    О нас
                </p>
                <p class="delivery">
                    Доставка
                </p>
            </div>
        </div>

            <div class="button_add">
                <p class="add_product">Добавить новый букет</p>
            </div>
            <div class="product_bouquet1">
                <div class="image1"></div>
                <p class="bouquet_name"> Букет1</p>
                <p class="bouquet_description"> Описание букетаОписание букетаОписание букетаОписание букетаОписание букетаОписание букета</p>
                <p class="bouquet_prices">1689 рублей</p>
                <div class="button_edit">
                    <p class="edit">Редактировать</p>
                </div>
                <div class="button_delite">
                    <p class="delite">Удалить</p>
                </div>
            </div>
            <div class="product_bouquet2">
                <div class="image1"></div>
                <p class="bouquet_name"> Букет2</p>
                <p class="bouquet_description"> Описание букетаОписание букетаОписание букетаОписание букетаОписание букетаОписание букета</p>
                <p class="bouquet_prices">1689 рублей</p>
                <div class="button_edit">
                    <p class="edit">Редактировать</p>
                </div>
                <div class="button_delite">
                    <p class="delite">Удалить</p>
                </div>
            </div>
            <div class="product_bouquet3">
                <div class="image1"></div>
                <p class="bouquet_name"> Букет3</p>
                <p class="bouquet_description"> Описание букетаОписание букетаОписание букетаОписание букетаОписание букетаОписание букета</p>
                <p class="bouquet_prices">1689 рублей</p>
                <div class="button_edit">
                    <p class="edit">Редактировать</p>
                </div>
                <div class="button_delite">
                    <p class="delite">Удалить</p>
                </div>
            </div>

        <div class="footer">
            <div class="footer1">
                <div class="footer_addres">
                    <p class="footer_addres1">Адрес магазина</p>
                    <p class="footer_addres2">г. Сургут, ул. Ленина, 38</p>
                </div>
                <div class="footer_job">
                    <p class="footer_job1">Время работы</p>
                    <p class="footer_job2">с 12:00 до 23:00</p>
                </div>
                <div class="footer_delivert">
                    <p class="footer_delivert1">Время доставки</p>
                    <p class="footer_delivert2">с 12:00 до 23:00</p>
                </div>
                <div class="footer_telephone">
                    <p class="footer_telephone1">Номер телефона</p>
                    <p class="footer_telephone2">+7(3462) 777-777</p>
                </div>

            </div>
        </div>
        </body>
</html>
