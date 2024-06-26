<?php
    require('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container">
    <section>
        <h2>Galéria</h2>
        <form action="inc/portfolio/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Názov">
            <input type="text" name="image" id="image" placeholder="Cesta">
            <input type="submit" value="Pridať" name="add_portfolio">
        </form>
        <?php
            $portfolio = $Portfolio->get_portfolio();
            echo '<table class="admin-table">';
                foreach($portfolio as $p){
                    echo '<tr>';
                    echo '<td>'.$p->name;'</td>';
                    echo '<td>'.'<img width="150" src = "'.$p->image.'">';
                    echo '<td><button class="edit">Editovať</button>';
                    echo '<td>
                            <form action="inc/portfolio/delete.php" method="post">
                                <button type = "submit" name="delete_portfolio" value="'.$p->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    
</body>
</html>