<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $marks=array('rahul'=>array(
            'math'=>45,'it'=>40
        ),'yatin'=>array(
            'math'=>44,'it'=>41
        ),'vijay'=>array(
            'math'=>44,'it'=>44
        )
            );
        
        foreach ($marks as $key=>$value){
            echo "Marks of".$key['math'].$value['math']."<br>";
        }
        
     
        ?>
    </body>
</html>
