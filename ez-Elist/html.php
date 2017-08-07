<?php
include 'config.php';
include 'db.php';
?>
<!DOCTYPE html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style type='text/css'>
        body {
            background:     #000;
            font-family:    arial;
            font-size:      x-large;
        }
        td {
            background:     #FFF;
            border-style:   outset;
            border-width:   3px;
        }
        th {
            background:     #000;
            border-style:   inset;
            border-width:   3px;
            color:          #FFF;
            font-weight:    bold;
            letter-spacing: 5px;
            text-align:     center;
        }
        a:link {
            color:          #000;
        }
        a:visited {
            color:          #000;
        }
        a:hover {
            color:          #FF0000;
        }
        a:active {
            color:          #FFF;
        }
    </style>
    <title>
        <?php echo $pageId ?>
    </title>
</head>
<body onload='document.send.item.focus();'>
    <table width='100'>
        <tr>
            <th colspan='2'>
                ---<?php echo $pageId ?>---
            </th>
        </tr>
            <?php printItems(); ?>
        <tr>
            <td width='80'>
            <form action='add/' method='post' name='send'>
                <input size='15' type='text' name='item' />
            </td>
            <td style='text-align:right;' width='20'>
                &nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:document.send.submit();'>Add</a>
            </form>
            </td>
        </tr>
    </table>
</body>
</html>