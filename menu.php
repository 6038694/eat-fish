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
</head>


<body>
    <?php include 'header.php' ?>

    <?php
    $items = array(
        array(
            "img" => "assets/img/fish.jpg",
            "title" => "Fishhmix vanaf 2",
            "description" => "Stel je voor: een gastronomisch avontuur waarbij je niet langer hoeft te kiezen tussen verschillende visgerechten. Bij Eat-Fish hebben we de perfecte oplossing voor jou - onze heerlijke vismix! Geniet van een smaakvolle selectie van de beste vissoorten, perfect bereid en samengebracht op één bord.",
            "price" => "55€",
            "vega" => "no"
        ),
        array(
            "img" => "assets/img/shrimp.jpg",
            "title" => "Gernalen",
            "description" => "Verlies jezelf in de rijke smaken van onze smeuïge garnaalcurry. Sappige garnalen, doordrenkt met kruiden en langzaam gekookt in een romige saus van kokosmelk en exotische specerijen. Elke hap is een verrukking voor de zintuigen, een culinaire reis naar de kusten van het Verre Oosten. Serveer met rijst voor een onvergetelijke smaakbeleving.",
            "price" => "25€",
            "vega" => "no"
        ),
        array(
            "img" => "assets/img/indische-vis-2.webp",
            "title" => "Indische Vis met rijst",
            "description" => "Ontdek de betoverende smaken van onze Indiase vis curry, verrijkt met exotische specerijen en verse vis, geserveerd met geurige basmati rijst. Een culinaire reis naar verre oorden, waar elke hap een explosie van smaken is.",
            "price" => "18€",
            "vega" => "no"
        ),
        array(
            "img" => "assets/img/Zee-Schotel.webp",
            "title" => "Vis Schotel",
            "description" => "Een hemelse combinatie van sappige garnalen, mollige mosselen en delicate krab, badend in een romige saus van knoflook, witte wijn en citroen, geserveerd met al dente pasta. Een smaakvolle reis naar de zee in één hap.",
            "price" => "28€",
            "vega" => "optional"
        ),
        array(
            "img" => "assets/img/Garnalenspiesjes.jpg",
            "title" => "Gernalen spies",
            "description" => "Laat je verleiden door onze sappige garnaalspiesjes, perfect gegrild en doordrenkt met een geheime marinade. Een heerlijke traktatie voor elke gelegenheid, waarbij elke hap een explosie van smaak belooft.",
            "price" => "20€",
            "vega" => "optional"
        )
    );

    echo '<script>';
    echo 'const items = ' . json_encode($items);
    echo '</script>';
    ?>

    <div class="slideshow">

    </div>
    <div class="featured">
        <h1>Menu</h1>
        <?php
        $index = 0;
        foreach ($items as $item) {
            $class = ($index % 2 == 0) ? "reversed" : "";
            echo '<div id="' . $item['title'] . '" class="item ' . $class . '">';
            echo '<img src="' . $item["img"] . '">';
            echo '<div class="spacer">';
            echo '<p> Is vegan:' . $item['vega'] . '</p>';
            echo '<h2>' . $item["title"] . '</h2>';
            echo '<p>' . $item["description"] . '</p>';
            echo '<h4>' . $item["price"] . '</h4>';
            echo '</div>';
            echo '</div>';
            $index++;
        }
        ?>
    </div>

</body>
<script>
    const slideshow = document.getElementsByClassName("slideshow")[0];
    let slideIndex = 0;

    update();

    function update() {
        const currentItem = document.getElementById(items[slideIndex].title);
        console.log(items[slideIndex].title)
        console.log("Current Item: ", currentItem);
        slideshow.innerHTML = currentItem.innerHTML;
        slideIndex = (slideIndex + 1) % items.length;
        console.log(slideIndex);
        setTimeout(update, 6000);
    }
</script>

</html>



<?php
include 'footer.php'
?>