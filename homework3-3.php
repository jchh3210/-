<!DOCTYPE html>
<html>
<head>
    <title> Fibonacci </title>
<body>
    <form method="post">
        <label>PHP homework3 : Fibonacci </label>
        <br>
        <br>
        <label>100 이하의 정수를 입력하십시오. </label>
        <input type="number" name="n" min="1" max="100" required>
        <input type="submit" name="submit" value="출력">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n=$_POST['n'];

        $before = 1;
        $now = 1;
        echo $before . " ";
        echo $now . " <br>";

        for ($i = 3; $i <= $n; $i++) {
            $next = $before + $now;
            echo $next . " ";
            echo $now . " ";
            $ratio = $now != 0 ? $next / $now : 0;
            echo "(" . $next . "/" . $now . " = " . round($ratio, 2) . ")" . " <br>";
            $before = $now;
            $now = $next;
        }
    }
    ?>
</body>
</html>
