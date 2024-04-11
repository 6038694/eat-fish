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

<style>

</style>

<body>
    <?php include 'header.php' ?>
    <main class="reserven">
        <h2>Reserveren</h2>
        <div class="field">
            <h3>Aantal mensen</h3>
            <div class="grid_container">
                <label class="selection">
                    <input type="radio" name="guests" value="1">
                    1 Persoon
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="2">
                    2 Mensen
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="3">
                    3 Mensen
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="4">
                    4 Mensen
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="5">
                    5 Mensen
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="6">
                    6 Mensen
                </label>
                <label class="selection">
                    <input type="radio" name="guests" value="6+">
                    Meer dan 6
                </label>
            </div>
        </div>

        <div class="field grid_column">
            <h3>Wanneer je komt?</h3>
            <input id="datepicker" type="datetime-local" value="" name="wanneer" />
        </div>


        <div class="field">
            <h3>Persoonlijke informatie</h3>
            <div class="personalinfos">
                <div class="grid_column">
                    <label for="first_name">Voornaam</label>
                    <input type="text" value="" name="first_name" />
                </div>
                <div class="grid_column">
                    <label for="last_name">Achternaam</label>
                    <input type="text" value="" name="last_name" />
                </div>
                <div class="grid_column">
                    <label for="address">Adres</label>
                    <input type="text" value="" name="address" />
                </div>
                <div class="grid_column">
                    <label for="postcode">Postcode</label>
                    <input type="text" value="" name="postcode" />
                </div>
                <div class="grid_column">
                    <label for="mail">E-Mail</label>
                    <input type="text" value="" name="mail" />
                </div>
                <div class="grid_column">
                    <label for="phone">Phone</label>
                    <input type="text" value="" name="phone" />
                </div>
            </div>

        </div>

        <div class="submitting">
            <button id="submitButton">Reservering indienen</button>
            <p class="privacy">Door een Reservering te maken, accepteert u het <a href="Privacybeleid.php">Privacybeleid</a></p>
        </div>
    </main>

    <script>
        document.getElementById("submitButton").addEventListener("click", function() {
            alert("Uw reservering is succesvol ingediend!");
        });
    </script>

    <?php include 'footer.php' ?>
</body>

</html>