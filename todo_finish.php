<?php
require_once("functions.php");

$id = (int)filter_input(INPUT_GET,"id");

if ($id <= 0){
    redirect_with_message("todo_list.php",MESSAGE_ID_INVALID);
}

// for($i = 0; $i < count($todo_list); $i++){
//     $todo = $todo_list[$i];
//     if ((int)$todo[0] === $id){
//        $todo[3] = STATUS_CLOSED;
//     break;
//     }
// }

$todo_list = read_todo_list();
foreach ($todo_list as &$todo) {
    if ((int)$todo[0] === $id){
        $todo[3] = STATUS_CLOSED;
    break;
        }
}

write_todo_list($todo_list);

redirect("todo_list.php");

