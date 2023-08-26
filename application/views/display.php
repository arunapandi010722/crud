<html>
    <head>
        <title>display</title>
        <style>
            .result,.result td,.result th{
                border: 2px solid black;
                border-collapse: collapse;
                padding: 10px;
                margin:auto;
                background-color:lightblue;
            }
            .result th{
                background-color:lightskyblue ;
            }
        </style>
    </head>
    <body>
    <a href="<?= base_url('register/student')?>"> Go to register</a>
    <?php if(isset($data)){ 
        ?>
        <form action="<?=base_url('register/update')?>" method="post">
            <table>
                <tr>
                    <td>Id</td>
                    <td><input name="stid" value="<?=$data[0]->student_id?>"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="stname" value="<?=$data[0]->student_name?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input name="stemail" value="<?=$data[0]->student_email?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input name="stmobile" value="<?=$data[0]->student_mobile?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input name="stgender" value="<?=$data[0]->student_gender?>"></td>
                </tr>
                <tr>
                    <td><button>Update</button></td>
                    <td></td>
                </tr>
            </table>
        </form>
        <?php
    }
else{
    ?>
    
    <table class="result">
    <tr>
        <th>Action</th>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
        
    </tr>
<?php 
if(isset($table)){
foreach($table as $row){
    ?>
  <tr>
   <td> <a href="<?=base_url('register/edit/'.$row->student_id)?>">Edit</a></td>
    <td><?=$row->student_id?></td> 
    <td><?=$row->student_name?></td> 
    <td><?=$row->student_email?></td> 
    <td><?=$row->student_mobile?></td> 
    <td><?=$row->student_gender?></td> 
    <td> <a href="<?=base_url('register/deletedata/'.$row->student_id)?>"> delete</a></td>    
  </tr>
  <?php
}
}
?> 
</table>
<?php
}

     ?>
      
    
    </body>
</html>