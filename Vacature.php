<!DOCTYPE html>
<html lang="en">

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

    <main class="vacature">
        <h2>Vacature</h2>
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

            <div class="aboutyou">
                <h4>About you</h4>
                <textarea name="" id="" cols="30" rows="10" placeholder="Vertel me wat over jezelf"></textarea>
            </div>

        </div>

        <div class="submitting">
            <button id="submitButton">Solliciteren</button>
        </div>
        <script>
            document.getElementById("submitButton").addEventListener("click", function() {
                alert("Bedankt voor het soliciteren. Wij nemen zo snel mogelijk contact met u op");
            });
        </script>
    </main>
    <?php include 'footer.php' ?>


</body>

</html>