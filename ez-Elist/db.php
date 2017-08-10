<?php
//Variables
$db = new PDO("sqlite:db.sqlite3");
//$me = $_SERVER['PHP_SELF'];
//Functions
function strip($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = str_replace("'","`",$data);
    $data = htmlspecialchars($data);
//  $data = rtrim($data);
//  $data = str_replace("+"," plus ",$data);
//  $data = str_replace("&"," and ",$data);
    return $data;
}
function printItems()
{
    global $db;
    //global $pageId;
    $sql = "SELECT id, item FROM ezelist";
    foreach($db->query($sql) as $row)
    {
        $getItem = str_replace("`","'",$row["item"]);
        $getId = $row["id"];
        echo "<tr>
        <td width='80'>
            <b>".$getItem."</b>
        </td>
        <td width='20'>
            <a href='del/?id=$getId'>Delete</a>
        </td>
    </tr>";
   }
}
function doItem($action)
{
    global $db;
    //global $pageId;
    $id = strip($_GET['id']);
    $item = strip($_POST['item']);
    switch($action)
    {
        case 0:
            $db->exec("DELETE FROM ezelist WHERE id = '$id'");
            break;
        case 1:
            if (!$item){break;}
            $db->query("INSERT INTO ezelist (item) VALUES ('$item')");
            break;
    }
}
