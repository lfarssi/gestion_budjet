<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            margin-bottom: 20px; /* Added margin bottom for separation */
        }
        .logo {
            float: left;
        }
        .header-info {
            float: right;
            text-align: right;
        }
        .title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px; /* Added margin bottom for separation */
        }
        .field {
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
        }
        .value {
            font-size: 14px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            margin-bottom: 20px; /* Added margin bottom for separation */
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        .total {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
        }
        .approval {
            text-align: right;
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
        }
        hr {
            margin-top: 20px; /* Added margin top for separation */
            margin-bottom: 20px; /* Added margin bottom for separation */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo">
            <img src="{{$logo}}" alt="Logo" width="100">
        </div>
        <div class="header-info">
            <p class="title">ROYAUME DU MAROC</p>
            <p class="title">Ministère de l'Educatin Nationale<br>du Préscolaire & des Sports</p>
            <p class="title">Académie Régionale d'Education et de Formation Région de<br>l'oriental</p>
            <p class="title">Direction de Berkane</p>
            <p class="field">Exercice:</p>
            <div class="value">2023</div>
            <p class="field">Imputation :</p>
            <div class="value">6136</div>
        </div>
    </div>

    <div class="container">
        <p class="field">Etat des sommes dues pour frais de correction n° :</p>
        <div class="value">
            Application de l'arrêté du 3 juin 1950 (16 chaabane 1364) relatif aux vacations allouées au membres du jury des concours<br>
            et examens organisés par le Ministère de l'Education Nationale et de l'arrêté du 10 juin 1952 (17 Ramadane 1371) modifié par le decret n°<br>
            2.95.834 du 5 juin 1996 (18 Moharrem 1417) fixant le taux de correction des épreuves écrites des examens du Baccalauréat à<br>
            4,00 Dhs la copie corrigée.
        </div>
    </div>

    <div class="container">
        <hr/>
        <h1>Décompte des sommes dues</h1>
        <table>
            <tr>
                <td>Copies x 4,00</td>
                <td>324,00 Dirhams</td>
            </tr>
            <tr>
                <td>2</td>
                <td>38%</td>
                <td>123.12 Dirhams</td>
            </tr>
            <tr>
                <td colspan="2" class="total">Net =</td>
                <td class="total">200,88 Dirhams</td>
            </tr>
        </table>

        <div class="approval">
            Arrêté par nous, Sous-Ordonnateur à la somme de :<br>
            <span class="total">Deux cent Dirhams et quatre-vingt huit Centimes</span><br>
            Berkane le :
            Le Sous-Ordonnateur
        </div>
    </div>
</body>
</html>
