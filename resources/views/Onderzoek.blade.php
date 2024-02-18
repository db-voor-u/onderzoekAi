<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI-Technologie Enquête</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert {
            padding: 20px;
            background-color: #f44336;
            /* Rode achtergrond */
            color: white;
            /* Witte tekst */
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #4CAF50;
            /* Groene achtergrond voor succesberichten */
        }

        .alert a {
            color: gold;
            /* Gouden kleur voor links */
            font-weight: bold;
            text-decoration: none;
        }

        .alert a:hover {
            text-decoration: underline;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            color: #f44336;
        }
    </style>
</head>

<body>


    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <br><br>
            <br>
            <a href="{{ url('Contact') }}">Klik hier om contact met ons op te nemen.</a>
            <br>
            <br>
            <a href="{{ url('https://www.google.com/') }}">Afsluiten</a>
        </div>
        @endif

        <h2>AI-Technologie Enquête voor Installatiebedrijven</h2>
        <form action="/send-survey" method="POST">
            @csrf
            <!-- Sectie 1: Algemene Informatie -->
            <label for="bedrijfsnaam">Wat is de naam van uw bedrijf?</label>
            <input type="text" id="bedrijfsnaam" name="bedrijfsnaam">

            <label for="sector">In welke sector bent u actief?</label>
            <select id="sector" name="sector">
                <option value="beveiliging">Beveiliging</option>
                <option value="loodgieterij">Loodgieterij</option>
                <option value="elektra">Elektra</option>
                <option value="arco">Arco/Warmtpomp</option>
               
                <!-- Voeg hier meer opties toe indien nodig -->
            </select>

            <label for="grootte">Hoe groot is uw bedrijf? (Aantal werknemers)</label>
            <input type="text" id="grootte" name="grootte">

            <label for="regio">Welke regio/gebied bedient uw bedrijf?</label>
            <input type="text" id="regio" name="regio">

            <!-- Sectie 2: Huidige Uitdagingen en Behoeften -->
            <label for="uitdagingen">Welke dagelijkse uitdagingen ervaart u in uw werk?</label>
            <textarea id="uitdagingen" name="uitdagingen"></textarea>

            <label for="technologieGebruik">Hoe gebruikt u op dit moment technologie in uw bedrijf?</label>
            <textarea id="technologieGebruik" name="technologieGebruik"></textarea>

            <label for="verbeteringTechnologie">Zijn er specifieke taken die u denkt te kunnen verbeteren met behulp van technologie?</label>
            <textarea id="verbeteringTechnologie" name="verbeteringTechnologie"></textarea>

            <!-- Sectie 3: Kennis en Houding ten opzichte van AI -->
            <label for="bekendAI">Bent u bekend met AI-technologieën?</label>
            <select id="bekendAI" name="bekendAI">
                <option value="ja">Ja</option>
                <option value="nee">Nee</option>
            </select>

            <label for="hulpAI">Hoe denkt u dat AI uw bedrijf kan helpen?</label>
            <textarea id="hulpAI" name="hulpAI"></textarea>

            <label for="zorgenAI">Heeft u enige terughoudendheid of zorgen met betrekking tot het gebruik van AI in uw bedrijf?</label>
            <textarea id="zorgenAI" name="zorgenAI"></textarea>

            <!-- Sectie 4: Potentiële Toepassingen van AI -->
            <label for="automatiseringAI">Welke taken binnen uw bedrijf zou u willen automatiseren of ondersteunen met AI?</label>
            <textarea id="automatiseringAI" name="automatiseringAI"></textarea>

            <label for="klantenserviceAI">Zou u geïnteresseerd zijn in AI-gestuurde klantenservicetools?</label>
            <select id="klantenserviceAI" name="klantenserviceAI">
                <option value="ja">Ja</option>
                <option value="nee">Nee</option>
            </select>

            <label for="planningAI">Zou u AI willen gebruiken voor het plannen en beheren van werkopdrachten?</label>
            <select id="planningAI" name="planningAI">
                <option value="ja">Ja</option>
                <option value="nee">Nee</option>
            </select>

            <!-- Sectie 5: Investering en Betalingsbereidheid -->
            <label for="investeringAI">Hoeveel bent u bereid te investeren in AI-technologie voor uw bedrijf?</label>
            <select id="investeringAI" name="investeringAI">
                <option value="onder1000">Onder €1000 excl. BTW</option>
                <option value="1000tot2500">€1000 tot €2500 excl. BTW</option>
                <option value="2500tot5000">€2500 tot €5000 excl. BTW</option>
                <option value="meer5000">Meer dan €5000 excl. BTW</option>
            </select>

            <label for="aankoopType">Zoekt u naar een eenmalige aankoop of een abonnementsservice voor technologische hulpmiddelen?</label>
            <select id="aankoopType" name="aankoopType">
                <option value="eenmaligeAankoop">Eenmalige aankoop</option>
                <option value="abonnement">Abonnementsservice</option>
            </select>

            <label for="belangrijkeFactoren">Welke factoren zijn voor u het belangrijkst bij het kiezen van een technologische oplossing?</label>
            <textarea id="belangrijkeFactoren" name="belangrijkeFactoren"></textarea>

            <!-- Sectie 6: Slotvragen -->
            <label for="suggesties">Heeft u suggesties of specifieke wensen voor AI-oplossingen in uw branche?</label>
            <textarea id="suggesties" name="suggesties"></textarea>

            <label for="interesseVervolgonderzoek">Zou u geïnteresseerd zijn in deelname aan een vervolgonderzoek of een demo van AI-oplossingen voor uw bedrijf?</label>
            <select id="interesseVervolgonderzoek" name="interesseVervolgonderzoek">
                <option value="ja">Ja</option>
                <option value="nee">Nee</option>
            </select>

            <input type="submit" value="Verzenden">
        </form>
    </div>

</body>

</html>
