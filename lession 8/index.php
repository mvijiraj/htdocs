<html>
    <head>
        <title> Demo Full Name</title>
    </head>
    <body>
        <form action="index.php" method="$_POST">
           Enter First Name <input type="text" name = $fname> <br>
           Enter Last Name <input type="text" name = $lname><br>
           <input type ="submit" name="btnsubmit">    
        </form>

        <?php
        //if(isset($_POST['btnbutton'])){
        $tr=isset($_POST['btnsubmit']);
        if($tr){
            $fname=$_POST['$fname'];
            $lname=$_POST['$lname'];
                $full=getfullname($fname,$lname);
                echo $full;
        }
        function getfullname($fn,$ln)
        {
            $fullname=$fn.' ' .$ln;
            return $fullname;

        }
       // }
         ?>

    </body>
</html>