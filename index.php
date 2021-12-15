<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php     
     if(isset($_POST['butt'])) {
         if(isset($_POST['radio'])) {
            $wartosc = $_POST['number'];
            for($i=0; $i<10; $i++) {
                $losowa[$i] = rand(1,$wartosc);
            }
            $nag = $_POST['nags'];
            if($_POST['radio']==1) {
                print_r($losowa);
            }
            if($_POST['radio']==2) {
                echo "<ul>";
                    for($i=0; $i<10; $i++) {
                        echo "<li>$losowa[$i]</li>";
                    }
                echo "</ul>";
            }
            if($_POST['radio']==3) {
                for($i=0; $i<10; $i++) {
                    echo "<h$nag>$losowa[$i]</h$nag>";
                }
            }
         }
     }
?>
    <h1>Wybierz przedział losowania</h1>
    <h2>10 liczb</h2>
    <form action="" method="post">
        <label for="numbers"></label>
        <select id="numbers" name="number">
            <option value="100">1-100</option>
            <option value="1000">1-1000</option>
            <option value="10000">1-10000</option>
            <option value="100000">1-100000</option>
        </select><br>
        Do tablicy: <input type="radio" name="radio" id="radio" value="1"><br>
        W liście porządkowej <input type="radio" name="radio" id="radio" value="2"><br>
        W nagłówku poziomu
        <label for="nag"></label>
        <select id="nag" name="nags">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="radio" name="radio" id="radio" value="3">
        <br>
        <input type="submit" value="Wyślij" name="butt">
    </form>
</body>
</html>
