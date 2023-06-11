<html>
    <head>
        <title>Demo for</title>
    </head>
    <body>
        <h1>Demo for loop</h1>
<form action="Demo-for.php" method="Post">
    <label>Enter Your Name;</label>
    <input type="text" name="Stname"/>
    <br>
    <label>count</label>
    <input type="number" name="count">
    <input type="submit" value="print name" name="btnsubmit">


</form>

        <?php 
        if(isset($_POST["btnsubmit"])){
            $nm=$_POST['Stname'];
            $cnt=$_POST['count'];
            for($i=1;$i<=$cnt;$i++){
                echo $i .'.' .$nm;
                echo '<br>';
            }
        }
        //for($i=0;$i<10;$i++){
           // echo $i." This is loop body"."<br>";
            
        //}
        
        
        
        ?>
    </body>
</html>