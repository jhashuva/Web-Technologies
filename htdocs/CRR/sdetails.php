<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <!link rel="stylesheet" href="css1.css">
    </head>
    <body>
        
        <form action="displayData.php" method="post">
                <div>
                    <table border='1' >   
                        <tr>
                        <td>Roll Number:</td>
                    
                        <td> <input type='text' name="number" required value="<?php if(isset($_POST['number'])){ echo htmlspecialchars($_POST['number']); } ?>">
                    
                        </td>
                <tr>
                    <td>SSC Percentage :</td>
                    <td><input type='number' name="sscp" required></td>
                </tr>
                <tr>
                    <td>SSC Passing year :</td>
                    <td><input type="number" name="sscy" required maxlength="4"></td>
                </tr>
                <tr>
                    <td>
                        Inter Percentage :
                    </td>
                    <td><input type='number' name="interp" required>
                    </td>
                </tr>
                <tr>
                <td>Inter Passing year :</td>
                <td><input type="number" name="intery" required="">
                </td>
                </tr>
                <tr>
                <td>Year of admission into B.Tech :</td>
                <td>     <select name='yoa' required>
                         <option>2010</option>
                         <option>2011</option>
                         <option>2012</option>
                         <option>2013</option>
                     </select>
                </td>
                </tr>
                <tr>
                    <td>I sem Percentage :</td>
                    <td><input type="number" name="IP" required></td>
                </tr>
                <tr>
                    <td>II sem Percentage :</td>
                    <td><input type="number" name="IIP" required></td>
                </tr>
                <tr>
                    <td>III sem Percentage :</td>
                    <td><input type="number" name="IIIP" required></td>
                </tr>
                <tr>
                    <td>IV sem Percentage :</td>
                    <td><input type="number" name="IVP" required></td>
                </tr>
                <tr>
                    <td>V sem Percentage :</td>
                    <td><input type="number" name="VP" required></td>
                </tr>
                <tr>
                     <td>VI sem Percentage :</td>
                     <td><input type="number" name="VIP" required></td>
                </tr>
                <tr>
                     <td>VII sem Percentage :</td>
                     <td><input type="number" name="VIIP" required></td>
                </tr>
                <tr>
                     <td>VIII sem Percentage :</td>
                     <td><input type="number" name="VIIIP"></td>
                </tr>
                <tr>
                    <td>All semisters percentage :</td>
                    <td><input type="number" name="BP"></td>
                </tr>
                <tr>
                    <td>have you any backlogs :</td>
                    <td>
                     <input type="radio" name="backlogs" value="no"> NO
                     <input type="radio" name="backlogs" value="yes">YES
                    </td>
                </tr>
                <tr>
                
                    <td>  AMCAT Score :</td>
                    <td><input type="number" name="amcat"></td>
                </tr>
                <tr>
                    <td> TOFEL/GRE/GMAT Score :</td>
                    <td><input type="number" name="gre"></td>
                </tr>
                <tr>
                    <td> GATE Score :</td>
                    <td><input type="number" name="gate"></td>
                </tr>
                 <tr>
                     <td>DId you won any coding competitions :</td>
                     <td><input type="radio" name="competitions" value="no"> NO
                         <input type="radio" name="competitions" value="yes">YES</td>
                 </tr>
                 <tr>
                     <td> Personal Phone number :</td>
                     <td><input type="number" name="phone" required></td>
                 </tr>
                 <tr>
                     <td>Email Id :</td>
                     <td><input type="email" name="email" required></td>
                 </tr>
                  <tr>
                      <td colspan="1">Photo</td><td> <input type="file" name="photo"></td>
                     </tr>
                
                 <tr>
                     <td colspan="1"> <input type="submit" value="Submit Details"></td>
                     </tr>
                    </table> 
                 </div>
            </form>
        
    </body>
</html>
