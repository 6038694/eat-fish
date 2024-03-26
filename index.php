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

    <main>
        <div class="place-content-center greeter">
            <h1>EAT FISH</h1>
            <p>Proef de zee bij Eat-Fish: waar elke hap een onderwateravontuur is</p>
        </div>


        <div class="slideshow">
            <img class="slidepic" src="assets/img/raw_salmon.jpg">
            <img class="slidepic" src="assets/img/fish.jpg">
            <img class="slidepic" src="assets/img/salmon2.jpg">
        </div>

        <div class="featured">
            <div class="item">
                <img src="assets/img/group_table.jpg" loading="lazy">
                <div>
                    <p>Kom je eten met een grote groep eten?
                        Reserveer dan van tevoren, zodat je zeker weet dat je terecht kan komen.
                        Of reserveer een van onze leuke groep activiteiten op onze locatie.</p>
                </div>
            </div>

            <div class="item reversed">
                <img src="assets/img/colleagues.jpg" loading="lazy">
                <p>Werken bij ons! Wil jij een leuke baan met leuke collega’s? Dan is dit de perfecte plek voor jouw. Wij zijn altijd opzoek naar nieuwe collega’s!</p>
            </div>

            <div class="item">
                <img src="assets/img/sushi_plate.jpg" loading="lazy">
                <p>Stel je voor: een gastronomisch avontuur waarbij je niet langer hoeft te kiezen tussen verschillende visgerechten. Bij Eat-Fish hebben we de perfecte oplossing voor jou - onze heerlijke vismix! Geniet van een smaakvolle selectie van de beste vissoorten, perfect bereid en samengebracht op één bord.</p>
            </div>

            <div class="item">
                <img src="assets/img/Giftcard.png" loading="lazy">
                <p>Onze eigen Cadeau kaart! Ontdek het perfecte cadeau voor elke gelegenheid - onze eigen cadeaukaart! Of je nu op zoek bent naar het ideale geschenk voor een vriend, familielid of zelfs voor jezelf, onze cadeaukaart biedt eindeloze mogelijkheden en een wereld van keuze.</p>
            </div>
        </div>

    </main>

    <?php include 'footer.php' ?>

    <script>
        const slides = document.getElementsByClassName("slidepic");
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 6000);
        }
    </script>
</body>

</html>