<?php
include 'config.php';
include 'db.php';
?>
<!DOCTYPE html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style.css">
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
