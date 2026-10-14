<!DOCTYPE html>
<html>
    <body>
        <form method="Get" action="">
            <input type="text" name="q" placeholder="Cari...">
            <button type="submit">Cari</button>
        </form>

<?php 
    if (isset($_GET['q'])) {
        $keywoard = htmlspecialchars($_GET['q']);
        echo "Kamu mencari: $keywoard";
    }

?>

</body>
</html>
