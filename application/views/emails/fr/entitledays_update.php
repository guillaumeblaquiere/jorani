<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2016 Benjamin BALET
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bbalet/jorani
 * @since         0.1.0
 */
?>
<html lang="fr">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        <p>Bonjour,</p>
        <p>Un crédit de congés a été mis à jour. Voici les détails :</p>
        <table>
            <tr>
                <td>Du &nbsp;</td><td>{StartDate}</td>
            </tr>
            <tr>
                <td>Au &nbsp;</td><td>{EndDate}</td>
            </tr>
            <tr>
                <td>Type &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Total &nbsp;</td><td>{Day}&nbsp;jours (les jours déjà pris ne sont pas décomptés dans cet email)</td>
            </tr>
            <tr>
                <td>Description &nbsp;</td><td>{Description}</td>
            </tr>
        </table>
        <hr>
        <h5>*** Ceci est un message généré automatiquement, veuillez ne pas répondre à ce message ***</h5>
    </body>
</html>