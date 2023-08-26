<?php
    if (isset($status)){
        echo $status;
        echo '<br>'.$test;
    }
    if (isset($msg)){
        echo '<h2>'.$msg.'<h2>';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Registeration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form action="<?=base_url('register/savedata/')?>" method="post">
        <table cellspacing="20">
        <tr>
                <td>Id</td>
                <td>
                <input type="number" name="stid">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                <input type="text" name="stname">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                <input type="email" name="stemail">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                <input type="number" name="stmobile">
                </td>
            </tr>
            
                <tr>
                <td>Gender</td>
                <td>
                <label>Male</label>
                <input  type="radio"  name="stgender" value="male">
            </td>
            <td>
                <label>Female</label>
                <input  type="radio"  name="stgender" value="female">
            </td> 
    </tr>
                 
            
            <tr>
                <td></td>
                <td>
                <input type="submit" name="submit" value="Register">
                <a href="<?= base_url('register/fetchdata')?>"> View Record</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>