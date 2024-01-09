<html>
<head>
    <meta charset="UTF-8">
</head>
<table>
    <tbody>
        <body>
            <center>
                <br>
                <h1>สูตรคูณแม่ {{$myinput}}</h1>
                <div>
                    <?php
                    for ($i=1; $i <= 24; $i++) {
                        echo "{$myinput} x {$i} = " .($myinput*$i)."<br/>";
                    }
                    ?>
                </div>
            </center>
        </body>
    </tbody>
</table>
<style>
    body{
        background-image: url(https://image.slidesdocs.com/responsive-images/background/minimalist-flat-style-mathematics-subject-for-high-school-9th-grade-geometry-geometric-powerpoint-background_1e7eac9470__960_540.jpg);
        background-size: cover;
    }
    div {
        font-size: 25px;
        width: 180px;
        height: 380px;
        border: 1px solid black;
        overflow-y: scroll;
        padding: 20px;
        font-size: 18;
        background-color: white;
    }
</style>
</html>
