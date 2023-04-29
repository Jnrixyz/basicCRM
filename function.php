<?php
 function addToDo(){
    $todo = $_POST('new-todo');
    $sql = "INSERT INTO `tableName`  (`todo`) VALUES ('$todo)";

    mysqli_query($sql,);
 }

?>