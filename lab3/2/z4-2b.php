<!DOCTYPE html>
<html> 
    <head>
        <title> Листинг 10-1. Простая HTML-форма </title>
        <meta charset="UTF-8">
    </head> 
    <body>
        <?php
            if (!isset($_GET["align"])) {
                $align = "left";
            } else {
                $align = $_GET["align"];
            }

            if (!isset($_GET["valign"])) {
                $valign = "top";
            } else {
                $valign = $_GET["valign"];
            }

            print "<table border=\"1px\" width=\"100px\" height=\"100px\" text-align=\"$align\" align=\"center\">\n";
            print "<tr><td align=\"$align\" valign=\"$valign\">Текст</td></tr></table>\n";
            print "<form action='{$_SERVER['PHP_SELF']}' method='get' align=\"center\">"
        ?>
            <p><b>Выберите горизонтальное расположение:</b></p>
            <p><input type="radio" name="align" value="left">слева</p>
            <p><input type="radio" name="align" value="center">по центру</p>
            <p><input type="radio" name="align" value="right">справа</p>

            <p><b>Выберите вертикальное расположение:</b></p>
            <p><input type="checkbox" name="valign" value="top">сверху</p>
            <p><input type="checkbox" name="valign" value="middle">посередине</p>
            <p><input type="checkbox" name="valign" value="bottom">внизу</p>
            <p><input type="submit" value="Выполнить"></p>
        </form>
    </body> 
</html>