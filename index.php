<html>
<meta charset="utf-8">
    <style>
        div {
            width: 180px;
            height: 380px;
            border: 1px solid black;
            overflow: scroll;
            padding: 20px;
            font-size: 18;
            background-color: white;
            }
    </style>
    <center>
    <body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6Nbznvx-42F3KGaMzSEBWYSucfGtuuq7MnA&usqp=CAU">
        <?php $multix = 2; ?>
        <h1>ตารางสูตรคูณแม่ <?php echo $multix ?></h1>
        <div> 
            <?php for($i = 1; $i <= 24; $i++) {?>
                <?php echo $multix ?> x <?php echo $i ?> = <?php echo $multix*$i ?><br>
            <?php } ?>
        </div>
    </body>
    </center>
</html>