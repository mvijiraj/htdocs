<html>
    <head>
        <title>Demo do while</title>
    </head>
    <body>
        <h1>Demo do while loop</h1>
<form action="Demo-dowhile.php" method="Post">
    <label>Enter Your Name;</label>
    <input type="text" name="Stname"/>
    <br>
    <label>count</label>
    <input type="number" name="count">
    <input type="submit" value="print name" name="btnsubmit">
    <br>
    <?php
    if(isset($_POST['btnsubmit'])){
        $nm=$_POST['Stname'];
        $cnt=$_POST['count'];
        
        $i=1;
        do{
            // echo   $i.' This is do while Demo'.'<br>';//
            echo $i.' '.$nm .'<br>';
            $i++;
        }
            while($i<=$cnt);
        }
    
    // $i= 0;
    //while($i<10){
       // echo 'This is while loop segment <br>';
       // $i++;
        
    //}
    //echo 'program is contuining';
    ?>

</form>

    </body>
</html>