<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ontdek heerlijke visgerechten en andere culinaire hoogstandjes op ons menu.">
    <meta name="author" content="Kevin van Ooijen">
    <meta name="keywords" content="vis, gerechten, eten, restaurant, menu">
    <title>Eat-Fish | Official Website</title>
    <link rel="stylesheet" type="text/css" href="assets/base.css">
    <style>
        @media only screen and (max-width: 768px) {
            #menukaart {
                margin-top: 50px;
                max-width: 150px;
                display: flex;
                flex-wrap: wrap;
            }

            .cola {
                display: flex;
                max-width: 250px;
                align-items: center;
                flex-direction: column-reverse;
            }

            .cola h1 {
                display: flex;
                margin-right: 10px;
                flex-direction: row;
                display: inline-flex;
            }

            .cola p {
                margin-top: 10px;
            }

            body {
                overflow-x: hidden;
            }

            .price {
                display: flex;
                justify-content: space-between;
                border-bottom: 2px solid black;
            }
        }

        #menukaart {
            margin-top: 50px;
            margin-left: 250px;
        }

        .drink {
            border-bottom: 5px solid black;
        }

        .cola h1 {
            display: flex;
            margin-right: 10px;
            flex-direction: row;
            display: inline-flex;
        }

        .cola p {
            margin-top: 10px;
        }

        .cola img {
            max-width: 200px;
            margin-left: 400px;
        }




        .cola {
            display: flex;
            margin-right: 500px;
            justify-content: space-between;
        }



        .price {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <main id="menukaart">

        <div>
            <h1 class="drink">DRINKS</h1>


            <div class="cola">
                <h1>Coca-cola</h1>
                <img class="cola" src="assets/img/cola-original.jpg">

            </div>
            <div>
                <div class="price">
                    <p> incl 0,15 statiegeld </p>
                    <p>€3,00 </p>

                </div>
                <div class="cola">
                    <h1>Coca-Cola Zero</h1>
                    <img class="cola" src="assets/img/cola-zero.webp">
                </div>
            </div>
            <div>
                <div class="price">
                    <p> incl 0,15 statiegeld </p>
                    <p>€3,00 </p>

                </div>
                <div>
                    <div class="cola">
                        <h1>Fanta</h1>
                        <img class="cola" src="assets/img/Fanta-original.png">
                    </div>
                    <div>
                        <div class="price">
                            <p> incl 0,15 statiegeld </p>
                            <p>€3,00 </p>

                        </div>
                        <div class="cola">
                            <h1>Fanta Zero</h1>
                            <img class="cola" src="assets/img/fanta-zero.jpg">
                        </div>
                        <div>
                            <div class="price">
                                <p> incl 0,15 statiegeld </p>
                                <p>€3,00 </p>
                            </div>
                        </div>



    </main>

</body>

</html>