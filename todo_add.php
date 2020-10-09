<?php
require_once("functions.php");

$task = (string)filter_input(INPUT_POST,"task");

if ($task === ""){
    // die(MESSAGE_TASK_EMPTY .PHP_EOL);
    redirect_with_message("todo_list.php",MESSAGE_TASK_EMPTY);

}
if (mb_strlen($task)>140){
    // die(MESSAGE_TASK_MAX_LENGTH .PHP_EOL);
    redirect_with_message("todo_list.php",MESSAGE_TASK_MAX_LENGTH);
}

$id = get_new_todo_id();
$date = date('Y-m-d H:i:s');
$status = STATUS_OPENED;
$todo = [$id,$task,$date,$status];
add_todo_list($todo);

header('Location: todo_list.php');
