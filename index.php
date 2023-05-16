<!DOCTYPE html>
<html lang="ru">
<html>
 <head>
  <meta charset="utf-8">
  <title>TASK_11.7.1</title>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>

 <body>
 <main>
    <h1>11.7. Практика</h1>
        <h2>Таблица истинности.</h2>

        <?php $a1 = !0 ?>
        <?php $a2 = 0 || 0 ?>
        <?php $a4 = 0 && 0 ?> 
        <?php $a5 = 0 xor 0 ?>
        <?php $a6 = 0 || 1 ?>
        <?php $a7 = 0 && 1 ?>
        <?php $a8 = 0 xor 1 ?>
        <?php $a9 = !1 ?>
        <?php $a10 = 1 || 0 ?>
        <?php $a11 = 1 && 0 ?>
        <?php $a12 = 1 xor 0 ?>
        <?php $a13 = 1 || 1 ?>
        <?php $a14 = 1 && 1 ?>
        <?php $a15 = 1 xor 1 ?>

    <table>
    <tr id="st">
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        <tr> 
                <th>0</th>
                <th>0</th>
                <th><?php echo $a1 ?> </th>
                <th><?php echo $a2 ?>0</th>
                <th><?php echo $a4 ?>0</th>
                <th><?php echo $a5 ?></th> 
        </tr>
        <tr> 
                <th>0</th>
                <th>1</th>
                <th><?php echo $a1 ?></th>
                <th><?php echo $a6 ?></th>
                <th><?php echo $a7 ?>0</th>
                <th><?php echo $a8 ?></th> 
        </tr>
        <tr> 
                <th>1</th>
                <th>0</th>
                <th><?php echo $a9 ?>0</th>
                <th><?php echo $a10 ?></th>
                <th><?php echo $a11 ?>0</th>
                <th><?php echo $a12 ?></th> 
        </tr>
        <tr> 
                <th>1</th>
                <th>1</th>
                <th><?php echo $a9 ?>0</th>
                <th><?php echo $a13 ?></th>
                <th><?php echo $a14 ?></th>
                <th><?php echo $a15 ?></th> 
        </tr>
    </table>
    <br>
    <br>

    <h2>Гибкое сравнение.</h2>

    <table>

    <tr id="st">
        <th></th>
        <th>true</th>
        <th>false </th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    
    <tr>
        <td id="stb">true</td>
            <td><?php echo(true == true) ?></td>
            <td><?php echo(true == false) ?>0</td>
            <td><?php echo(true == 1) ?></td>
            <td><?php echo(true == 0) ?>0</td>
            <td><?php echo(true == -1) ?></td>
            <td><?php echo(true == "1") ?></td>
            <td><?php echo(true == null) ?>0</td>
            <td><?php echo(true == "php") ?></td>
    </tr>

    <tr>
        <td id="stb">false</td>
            <td><?php echo(false == true) ?>0</td>
            <td><?php echo(false == false) ?></td>
            <td><?php echo(false == 1) ?>0</td>
            <td><?php echo(false == 0) ?></td>
            <td><?php echo(false == -1) ?>0</td>
            <td><?php echo(false == "1") ?>0</td>
            <td><?php echo(false == null) ?></td>
            <td><?php echo(false == "php") ?>0</td>
    </tr>

    <tr>
        <td id="stb" >1</td>
            <td><?php echo(1 == true) ?></td>
            <td><?php echo(1 == false) ?>0</td>
            <td><?php echo(1 == 1) ?></td>
            <td><?php echo(1 == 0) ?>0</td>
            <td><?php echo(1 == -1) ?>0</td>
            <td><?php echo(1 == "1") ?></td>
            <td><?php echo(1 == null) ?>0</td>
            <td><?php echo(1 == "php") ?>0</td>
    </tr>

    <tr>
        <td id="stb"> 0</td>
            <td><?php echo(0 == true) ?>0</td>
            <td><?php echo(0 == false) ?></td>
            <td><?php echo(0 == 1) ?>0</td>
            <td><?php echo(0 == 0) ?></td>
            <td><?php echo(0 == -1) ?>0</td>
            <td><?php echo(0 == "1") ?>0</td>
            <td><?php echo(0 == null) ?></td>
            <td><?php echo(0 == "php") ?> 0 </td>
    </tr>

    <tr>
        <td id="stb"> -1 </td>
            <td><?php echo(-1 == true) ?></td>
            <td><?php echo(-1 == false) ?>0</td>
            <td><?php echo(-1 == 1) ?>0</td>
            <td><?php echo(-1 == 0) ?>0</td>
            <td><?php echo(-1 == -1) ?></td>
            <td><?php echo(-1 == "1") ?>0</td>
            <td><?php echo(-1 == null) ?>0</td>
            <td><?php echo(-1 == "php") ?>0</td>
    </tr>

    <tr>
        <td id="stb" > "1"</td>
            <td><?php echo("1" == true) ?></td>
            <td><?php echo("1" == false) ?>0</td>
            <td><?php echo("1" == 1) ?></td>
            <td><?php echo("1" == 0) ?>0</td>
            <td><?php echo("1" == -1) ?>0</td>
            <td><?php echo("1" == "1") ?></td>
            <td><?php echo("1" == null) ?>0</td>
            <td><?php echo("1" == "php") ?>0</td>
    </tr>

    <tr>
        <td id="stb"> null</td>
            <td><?php echo(null == true) ?>0</td>
            <td><?php echo("null" == false) ?>0</td>
            <td><?php echo("null" == 1) ?>0</td>
            <td><?php echo("null" == 0) ?>0</td>
            <td><?php echo("null" == -1) ?>0</td>
            <td><?php echo("null" == "1") ?>0</td>
            <td><?php echo("null" == null) ?>0</td>
            <td><?php echo("null" == "php") ?>0</td>
    </tr>

    <tr>
        <td id="stb"> "php"</td>
            <td><?php echo("php" == true) ?></td>
            <td><?php echo("php" == false) ?>0</td>
            <td><?php echo("php" == 1) ?>0</td>
            <td><?php echo("php" == 0) ?>0</td>
            <td><?php echo("php" == -1) ?>0</td>
            <td><?php echo("php" == "1") ?>0</td>
            <td><?php echo("php" == null) ?>0</td>
            <td><?php echo("php" == "php") ?></td>
    </tr>
    </table>
    <br>
    <br>

    <h2>Жёсткое сравнение.</h2>
    
    <table>

    <tr id="st">
    <th></th>
    <th>true</th>
    <th>false </th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
    </tr>

    <tr>
    <td id="stb">true</td>
        <td><?php echo(true === true) ?></td>
        <td><?php echo(true === false) ?>0</td>
        <td><?php echo(true === 1) ?>0</td>
        <td><?php echo(true === 0) ?>0</td>
        <td><?php echo(true === -1) ?>0</td>
        <td><?php echo(true === "1") ?>0</td>
        <td><?php echo(true === null) ?>0</td>
        <td><?php echo(true === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb">false</td>
        <td><?php echo(false === true) ?>0</td>
        <td><?php echo(false === false) ?></td>
        <td><?php echo(false === 1) ?>0</td>
        <td><?php echo(false === 0) ?>0</td>
        <td><?php echo(false === -1) ?>0</td>
        <td><?php echo(false === "1") ?>0</td>
        <td><?php echo(false === null) ?>0</td>
        <td><?php echo(false === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb" >1</td>
        <td><?php echo(1 === true) ?>0</td>
        <td><?php echo(1 === false) ?>0</td>
        <td><?php echo(1 === 1) ?></td>
        <td><?php echo(1 === 0) ?>0</td>
        <td><?php echo(1 === -1) ?>0</td>
        <td><?php echo(1 === "1") ?>0</td>
        <td><?php echo(1 === null) ?>0</td>
        <td><?php echo(1 === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb"> 0</td>
        <td><?php echo(0 === true) ?>0</td>
        <td><?php echo(0 === false) ?>0</td>
        <td><?php echo(0 === 1) ?>0</td>
        <td><?php echo(0 === 0) ?></td>
        <td><?php echo(0 === -1) ?>0</td>
        <td><?php echo(0 === "1") ?>0</td>
        <td><?php echo(0 === null) ?>0</td>
        <td><?php echo(0 === "php") ?> 0 </td>
    </tr>

    <tr>
    <td id="stb"> -1 </td>
        <td><?php echo(-1 === true) ?>0</td>
        <td><?php echo(-1 === false) ?>0</td>
        <td><?php echo(-1 === 1) ?>0</td>
        <td><?php echo(-1 === 0) ?>0</td>
        <td><?php echo(-1 === -1) ?></td>
        <td><?php echo(-1 === "1") ?>0</td>
        <td><?php echo(-1 === null) ?>0</td>
        <td><?php echo(-1 === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb" > "1"</td>
        <td><?php echo("1" === true) ?>0</td>
        <td><?php echo("1" === false) ?>0</td>
        <td><?php echo("1" === 1) ?>0</td>
        <td><?php echo("1" === 0) ?>0</td>
        <td><?php echo("1" === -1) ?>0</td>
        <td><?php echo("1" === "1") ?></td>
        <td><?php echo("1" === null) ?>0</td>
        <td><?php echo("1" === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb"> null</td>
        <td><?php echo("null" === true) ?>0</td>
        <td><?php echo("null" === false) ?>0</td>
        <td><?php echo("null" === 1) ?>0</td>
        <td><?php echo("null" === 0) ?>0</td>
        <td><?php echo("null" === -1) ?>0</td>
        <td><?php echo("null" === "1") ?>0</td>
        <td><?php echo("null" === null) ?>0</td>
        <td><?php echo("null" === "php") ?>0</td>
    </tr>

    <tr>
    <td id="stb"> "php"</td>
        <td><?php echo("php" === true) ?>0</td>
        <td><?php echo("php" === false) ?>0</td>
        <td><?php echo("php" === 1) ?>0</td>
        <td><?php echo("php" === 0) ?>0</td>
        <td><?php echo("php" === -1) ?>0</td>
        <td><?php echo("php" === "1") ?>0</td>
        <td><?php echo("php" === null) ?>0</td>
        <td><?php echo("php" === "php") ?></td>
    </tr>
    </table>
    <br>
    <br>
</div>
</main>
</body>
</html>