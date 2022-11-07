<?php
if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['store']) && !empty($_REQUEST['store']))
    {
        setcookie("store", htmlspecialchars($_REQUEST['store']), time() + 5184000, "/"); // 60 døgn (60*60*24*60)
        header("Location: ov1.php"); exit();
    }
    else
    {
        echo "Du må velge butikk";
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>Halloweenbutikken</h1>

<p>Velg din favorittbutikk i listen nedenfor.</p>

<form method="post" action="">
  <label for="store">Velg butikk:</label>
  <select name="store" id="store">
    <option value="">Velg butikk</option>
    <option value="Halloween Sørlandsparken">Halloween Sørlandsparken</option>
    <option value="Halloween UIA">Halloween UIA</option>
    <option value="Halloween Vennesla">Halloween Vennesla</option>
    <option value="Halloween Birkeland">Halloween Birkeland</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Velg">
</form>

<p><?php echo 'Din valgte favorittbutikk er: <strong>'.(isset($_COOKIE['store']) ? $_COOKIE['store'] : 'Du har ikke valgt favorittbutikk') . '</strong>'; ?></p>

</body>
</html>