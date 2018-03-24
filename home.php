<?php
    $fname=$lname=$email=$bdays=$pass=$word="";
    $rfname=$rlname=$remail=$rform=$rbdays=$rpass=$rword="";
    if(isset($_GET['signup']) )
        {
            $fname=$_GET['fname'];
            $lname=$_GET['lname'];
            $email=$_GET['email'];
            $bdays=$_GET['bdays'];
            $pass=$_GET['pass'];
            $word=$_GET['word'];
            $signup=$_GET['signup'];  
            if(empty($fname))
                $rfname="Please enter first name.<br>";
            if(empty($lname))
                $rlname="Please enter last name.<br>";
            if(empty($email))
                $remail="Please enter email.<br>";
            elseif(!FILTER_VAR($email,FILTER_VALIDATE_EMAIL))
                $remail="INVALID EMAIL.<br>";
            if(empty($bdays))
                $rbdays="Please enter birthday.<br>";                    
            if(empty($pass))
                $rpass="Please enter password.<br>";
            if(empty($word))
                $rword="Please enter confirm password.<br>";

        }
?>
<html>
   <head>
            <TITLE>Welcome to Friendsbook,Login or signup</title>
<style>
 a{  
             font:20px Ariel,Helvetica,sans-serif;
             padding:15px;
             color:white;
             text-decoration:none;
			 border: 0 5px solid;
             background-color:062548;			 
}


 a:hover{ 
                    background-color:062578;
					transition:0.5s;
}	   
.size   {
            height: 30px;
            border-radius: 10px;
            padding: 5px;
            color: blue;
            background-color:white;
            font-weight: bold;
            border-color: aqua;
			
            
         }
.gap	{
		line-height:350%;
}
		   </style>
             <link rel=stylesheet type="text/css" href="fstyle.css">
   </head>
   <header>
<h1 align="center" style=" color:white; font:50px Ariel,Helvertica,sans-serif; float:right; margin: 39px 10px 0 0;"><p>FriendsZone</p>
</header>
   <body style="background-color:f4f5f9;">
        <form action="" method="">
            <div class="problem">
               
                <br><br>
                <div class="box">
			
				<legend><h1 align="center"> Create an account</h1></legend><br>
               <table> 
				<div class="table">
                <tr class="gap">
				<td><label for="fname"><b>First Name:</b></label></td>  
                <td><input type="text" id="fname" name="fname" size="40" class="size" placeholder="first name" style="padding:10px; border-radius:10px;" value="<?php echo $fname ?>" >
                <?php echo $rfname ?></td>
				</tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><label for="lname"><b>Last Name:</b></label></td>
                <td><input type="text" id="lname" name="lname" size="40" class="size" placeholder="last name" style="padding:10px; border-radius:10px;" value="<?php echo $lname ?>">
                <?php echo $rlname ?></td>
				</tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><label for="email"><b> Email Address:</b> </label></td>
                <td><input type="email" id="email" name="email" size="40" class="size" placeholder="Email or phone" style="padding:10px; border-radius:10px;" value="<?php echo $email ?>">
                <?php echo $remail ?></td>
				</tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><b>Gender</b></td> </tr>
				<tr >
                <td align="right"><input type="radio" name="form"  value=""> 
                <b>Female</b></td>
                <td align="center"><input type="radio" name="form" value="">
                <b>Male</b></td>                                  
                </tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><label for="bdays"><b>Date of Birth:</b></label></td> 
                <td><input type="date" id="bdays" name="bdays" class="size" style="padding:10px; border-radius:10px;" size="25" value="<?php echo $bdays ?>">
                <?php echo $rbdays ?></td>
				</tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><label for="pass"><b>User Password:</b> </label></td>
                <td><input type="password" id="pass" name="pass" class="size"  size="25" value="<?php echo $pass ?>">
                <?php echo $rpass ?></td></tr>
				</div>
				<div class="table">
				<tr class="gap">
                <td><label for="word"><b>Confirm Password:</b> </label></td>
                <td><input type="password" id="word" name="word" class="size" size="25" value="<?php echo $word ?>">
                <?php echo $rword ?></td></tr></div>
                
				<tr align="center" class="gap"><td></td><td><input type="SUBMIT" name="signup" class="size" value="SIGN UP" align="center" ></td></tr>
				</table>
                
				</div>
				
            </div>
        </form>  
           
   </body> 
</html>       