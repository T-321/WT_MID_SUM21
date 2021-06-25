<?php
	$employeename="";
	$err_employeename="";
	$employeeid="";
	$err_employeeid="";
	$email = "";
    $err_email = "";
	$code = "";
    $phoneNumber = "";
    $err_phoneNumber = "";
	$address = "";
    $city = "";
    $state = "";
    $zipCode = "";
    $err_address = "";
	$day = "";
    $month = "";
    $year = "";
    $err_birthDay = "";
	$gender="";
	$err_gender="";
	$workfields=[];
	$err_workfields="";
	$bio="";
	$err_bio="";
	$professionalexprience="";
	$err_professionalexprience="";
	$day = "";
    $month = "";
    $year = "";
    $err_joinDate= "";
	$bloodgroup="";
	$err_bloodgroup="";
	$religion="";
	$err_religion="";
	
	
	$hasError=false;
	
	
	$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
	
	
	
	function workfieldsExist($workfields){
		global $workfields;
		foreach($workfields as $w){
			if($w == $workfields) return true;
		}
		return false;
	}
	
	if(isset($_POST["submit"])){
		if(empty($_POST["employeename"])){
			$hasError = true;
			$err_employeename="Name Required";
		}
		else if(strlen($_POST["employeename"]) <= 2){
			$hasError = true;
			$err_name="Name must contain >2 character";
		}
		else{
			$name = $_POST["employeename"];
		}
		if(empty($_POST["employeeid"])){
			$hasError = true;
			$err_employeeid="Id Required";
		}
		else if(strlen($_POST["employeeid"]) <= 6){
			$hasError = true;
			$err_employeeid="Id must contain >8 character";
		}
		else{
			$id = $_POST["employeeid"];
		}
		if(empty($_POST["email"])){
            $hasError = true;
            $err_email = "Email Required.";
        }
        else if(!strpos($_POST["email"],"@")){
            $hasError = true;
            $err_email = "Contain '@' .";

        }
        else if(!strpos($_POST["email"],".",strpos($_POST["email"],"@")+1)){
            $hasError = true;
            $err_email = "contain '.' after '@' .";

        }
        else{
            $email = $_POST["email"];
        }
		if(empty($_POST["code"])){
            $hasError = true;
            $err_phoneNumber = "Code Required.";

        }
        else if(!is_numeric($_POST["code"])){
            $hasError = true;
            $err_phoneNumber = "Code Must be a number";
        }
        else{
            $code = $_POST["code"];
        }

        if(empty($_POST["phoneNumber"])){
            $hasError = true;
            $err_phoneNumber = "Phone Number Required.";
        }
        else if(!is_numeric($_POST["phoneNumber"])){
            $hasError = true;
            $err_phoneNumber = "Phone Number Must be a number";
        }
        else{
            $phoneNumber = $_POST["phoneNumber"];
        }
		if(empty($_POST["address"])){
            $hasError = true;
            $err_address = "Street Address Required.";
        }
        else{
            $address = $_POST["address"];
        }

        if(empty($_POST["city"])){
            $hasError = true;
            $err_address = "City Required.";
        }
        else{
            $city = $_POST["city"];
        }

        if(empty($_POST["state"])){
            $hasError = true;
            $err_address = "State Required.";
        }
        else{
            $state = $_POST["state"];
        }

        if(empty($_POST["zipCode"])){
            $hasError = true;
            $err_address = "Zip Code Required.";
        }
        else{
            $zipCode = $_POST["zipCode"];
        }
		 if (!isset($_POST["day"])){
			$hasError = true;
			$err_birthDay = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_birthDay = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_birthDay = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["workfields"])){
			$hasError = true;
			$err_workfields="workfields Required";
		}
		else{
			$workfields = $_POST["workfields"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		if(empty($_POST["professionalexprience"])){
			$hasError = true;
			$err_professionalexprience = "";
		}
		else{
			$professionalexprience = $_POST["professionalexprience"];
		}
		if (!isset($_POST["day"])){
			$hasError = true;
			$err_joinDate = "Select A Day.";
		}
		else{
			$day = $_POST["day"];
		}

        if (!isset($_POST["month"])){
			$hasError = true;
			$err_joinDate = "Select A Month.";
		}
		else{
			$month = $_POST["month"];
		}

        if (!isset($_POST["year"])){
			$hasError = true;
			$err_joinDate = "Select A Year.";
		}
		else{
			$year = $_POST["year"];
		}
		
		if(!isset($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="bloodgroup Required";
		}
		else{
			$bloodgroup = $_POST["bloodgroup"];
		}
		if (!isset($_POST["religion"])){
			$hasError = true;
			$err_religion="Religion Required";
		}
		else{
			$religion = $_POST["religion"];
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["employeename"]."<br>";
			echo $_POST["employeeid"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["code"].$_POST["phoneNumber"]."<br>";
			echo $_POST["address"]." ".$_POST["city"]." ".$_POST["state"]." ".$_POST["zipCode"]."<br>";
		    echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
		    echo $_POST["professionalexprience"]."<br>";
			$arr = $_POST["workfields"];

			foreach($arr as $i){
				echo "$i<br>";
			}
			echo $day." ".$month." ".$year." "."<br>";	
			echo $_POST["bloodgroup"]."<br>";
			echo $_POST["religion"]."<br>";
			
		}
		
		
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Employee Name</td>
					<td>: <input type="text" name="employeename" value="<?php echo $employeename; ?>" placeholder="Enter Employee Name "> </td>
					<td><span> <?php echo $err_employeename;?> </span></td>
				</tr>
				<tr>
					<td>Employee Id</td>
					<td>: <input type="text" name="employeeid" placeholder="Enter Employee Id">  </td>
					<td><span> <?php echo $err_employeeid;?> </span></td>
				</tr>
				<tr>
                        <td>Email</td>
                        <td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
                        <td><span><?php echo $err_email; ?> </span></td>
                    </tr>
					 <tr>
                        <td>Phone</td>
                        <td>
                            : <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code">
                            - <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" placeholder="Number">
                        </td>
                        <td><span><?php echo $err_phoneNumber; ?> </span></td>
                    </tr><br>
					 <tr>
                        <td>Adderss</td>
                        <td>
                            : <input type="text" name="address" value="<?php echo $address; ?>" placeholder="Street Address">
                            - <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City"><br>  
							: <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State">
                            - <input type="text" name="zipCode" value="<?php echo $zipCode; ?>" placeholder="Postal/Zip Code">
                        </td>
                        <td><span><?php echo $err_address; ?> </span></td>
                    </tr>
					<tr>
                        <td>Birth Date</td>
                        <td>
                            : <select name="day">
                                <option disabled selected>Day</option>
                                <?php
                                    for($i = 1; $i<=31; $i++){
                                       if($day == $i){
                                        echo "<option selected>$i</option>";
                                       }else{
                                            echo "<option>$i</option>";
                                       }
                                    }
                                ?>
                            </select>
                            <select name="month">
                                <option disabled selected>Month</option>
                                <?php
                                   foreach($months as $m){
                                    if($month == $m){
                                        echo "<option selected>$m</option>";
                                       }
                                       else{
                                            echo "<option>$m</option>";
                                       }
                                   }
                                ?>
                            </select>
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=1970; $i--){
                                        if($year == $i){
                                                echo "<option selected>$i</option>";
                                           }
                                           else{
                                                echo "<option>$i</option>";
                                           }
                                    }
                                ?>
                            </select>
                        </td>
                        <td><span><?php echo $err_birthDay; ?> </span></td>
                    </tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Workfields</td>
					<td>: <input type="checkbox" name="workfields[]" <?php if(workfieldsExist("Technician")) echo "checked";?> value="Technician"> Technician 
					<input type="checkbox" name="workfields[]" <?php if(workfieldsExist("Security Guard")) echo "checked";?> value="Security Guard"> Security Guard<br>
					: <input type="checkbox" name="workfields[]" <?php if(workfieldsExist("Peon")) echo "checked";?> value="Peon"> Peon
					  <input type="checkbox" name="workfields[]" <?php if(workfieldsExist("Cleaner")) echo "checked";?> value="Cleaner"> Cleaner
					</td>
					<td><span> <?php echo $err_workfields;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td>Professional Exprience</td>
					<td>: <textarea name="professionalexprience" ><?php echo $professionalexprience; ?></textarea>
					<td><span> <?php echo $err_professionalexprience;?> </span></td>
					</td>
				</tr>
				<tr>
                        <td>Join Date</td>
                        <td>
                            : <select name="day">
                                <option disabled selected>Day</option>
                                <?php
                                    for($i = 1; $i<=31; $i++){
                                       if($day == $i){
                                        echo "<option selected>$i</option>";
                                       }else{
                                            echo "<option>$i</option>";
                                       }
                                    }
                                ?>
                            </select>
                            <select name="month">
                                <option disabled selected>Month</option>
                                <?php
                                   foreach($months as $m){
                                    if($month == $m){
                                        echo "<option selected>$m</option>";
                                       }
                                       else{
                                            echo "<option>$m</option>";
                                       }
                                   }
                                ?>
                            </select>
                            <select name="year">
                                <option disabled selected>Year</option>
                                <?php
                                    for($i = 2021; $i>=2020; $i--){
                                        if($year == $i){
                                                echo "<option selected>$i</option>";
                                           }
                                           else{
                                                echo "<option>$i</option>";
                                           }
                                    }
                                ?>
                            </select>
                        </td>
                        <td><span><?php echo $err_joinDate; ?> </span></td>
                    </tr>
					
				<tr>
					<td>Blood Group</td>
					<td>: <input type="radio" value="A+" <?php if($bloodgroup=="A+") echo "checked"; ?> name="bloodgroup"> A+ <input name="bloodgroup" <?php if($bloodgroup=="B+") echo "checked"; ?> value="B+" type="radio"> B+ <input name="bloodgroup" <?php if($bloodgroup=="O+") echo "checked"; ?> value="O+" type="radio"> O+<input name="bloodgroup" <?php if($bloodgroup=="AB+") echo "checked"; ?> value="AB+" type="radio"> AB+ </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Religion</td>
					<td>: <input type="radio" value="Islam" <?php if($religion=="Islam") echo "checked"; ?> name="religion"> Islam <input name="religion" <?php if($religion=="Hinduism") echo "checked"; ?> value="Hinduism" type="radio"> Hinduism <input name="religion" <?php if($religion=="Christianity") echo "checked"; ?> value="Chistianity" type="radio"> Chistianity <input name="religion" <?php if($religion=="Buddhism") echo "checked"; ?> value="Budhism" type="radio"> Buddhism </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>