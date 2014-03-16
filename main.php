<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meet.php #Raspi</title>
        <link href="css/main.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>NFC history</h1>

        <div id="nfc-history">
            <table>
                <thead>
                <th>Czas</th> <th>ID karty</th>
                </thead>
                <tbody data-bind="foreach: allItems">
                <td> <span data-bind="text: addTime"> </span> </td>
                <td> <span data-bind="text: cardid"> </span> </td>
                </tbody>
            </table>
        </div>

        <script src="js/libs/jquery/jquery.js"></script>
        <script src="js/libs/knockout/knockout-min.js"></script>
        <script src="main.js"></script>
    </body>
</html>