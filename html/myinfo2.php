<?php 
$fname="Sriskantharaja";
$lname="Mithushan";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            color:blue;
            background-color: greenyellow;        
        }
        b{
            color:green;

        }
        i{
            color:yellowgreen;
        }
        .cs-cls{
            color:tomato;
            
        }
        #cs-id{
            color: darkgoldenrod;
        }


    </style>

</head>
<body>
    <h1 style="color:blue;">My info</h1>
    <hr color="red">
    <b style="color:green">First name : </b> <i style="color:green"> <?php echo $fname; ?> </i>
    <br>
    <b style="color:green">Last name : </b> <i style="color:#ff0123" > <?php echo $lname; ?> </i> 
    <hr>
    <!-- css selectors
    1 - Class Selector 
    2 - Id Selector 
    3 - Tag Selector
    -->
    <!-- Class Selector-->
    <h1 class="cs-cls">Student Info</h1>
    <!-- ID Selector-->
    <h1 id="cs-id">Student Info</h1>
    <!-- ID > Class Selector-->
    <h1 id="cs-id" class="cs-cls">Student Info</h1>

    <h1 id="cs-id" class="cs-cls" style="color:darkred;">Student Info</h1>

    <!-- multiple color in one line-->
    <h1> <span id="cs-id">Student</span> <span class="cs-cls"> Info</span> </h1>

    <!-- div-->
    <h1> <div class="cs-cls">Student</div> <div id="cs-id"> Info</div> </h1>

</body>
</html>


