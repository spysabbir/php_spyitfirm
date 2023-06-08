<?php
function connect_to_db(){
//database connection
$hostname = "localhost";
$username = ""; 
$password = "";
$database_name = "php_spy_it_firm";
return $db_connect = mysqli_connect($hostname, $username, $password, $database_name);
}

// Select Funtion
function spy_sabbir_all($table_name) {
    $select_query = "SELECT * FROM $table_name";
    return $result_from_db = mysqli_query(connect_to_db(), $select_query);
}
// Select Single Funtion
function spy_sabbir_single_select($table_name, $id) {
    $single_select_query = "SELECT * FROM $table_name WHERE id=$id";
    return $result_from_db = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $single_select_query));
}
// Some Select Funtion
function spy_sabbir_number_of($table_name, $how_many) {
    $select_query = "SELECT * FROM $table_name ORDER BY id DESC LIMIT $how_many";
    return $result_from_db = mysqli_query(connect_to_db(), $select_query);
}

// Insert Funtion
function spy_sabbir_insert($table_name, $field_name, $field_valus) {
    $insert_query = "INSERT INTO $table_name ($field_name) VALUES ($field_valus)";
    return mysqli_query(connect_to_db(), $insert_query);
}
// Delete Funtion
function spy_sabbir_delete($table_name, $field_name, $field_valus) {
    $delete_query = "DELETE FROM $table_name WHERE $field_name = $field_valus";
    return mysqli_query(connect_to_db(), $delete_query);
}
// Delete Funtion With Single Photo
function spy_sabbir_delete_with_photo($table_name, $field_name, $field_valus, $folder, $photo_field_name) {
    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_valus";
    $result_from_db = mysqli_query(connect_to_db(), $select_query);
    $photo_name = mysqli_fetch_assoc($result_from_db)[$photo_field_name];
    $link = __DIR__."/../assets/images/$folder/$photo_name";
    unlink($link);
    $delete_query = "DELETE FROM $table_name WHERE $field_name = $field_valus";
    return mysqli_query(connect_to_db(), $delete_query);
}
// Delete Funtion With Dubble Photo
function spy_sabbir_delete_with_dubble_photo($table_name, $field_name, $field_valus, $folder, $photo_field_name1, $photo_field_name2) {
    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_valus";
    $result_from_db = mysqli_query(connect_to_db(), $select_query);
    $photo_name1 = mysqli_fetch_assoc($result_from_db)[$photo_field_name1];
    $link1 = __DIR__."/../assets/images/$folder/$photo_name1";
    unlink($link1);

    $select_query = "SELECT * FROM $table_name WHERE $field_name = $field_valus";
    $result_from_db = mysqli_query(connect_to_db(), $select_query);
    $photo_name2 = mysqli_fetch_assoc($result_from_db)[$photo_field_name2];
    $link2 = __DIR__."/../assets/images/$folder/$photo_name2";
    unlink($link2);

    $delete_query = "DELETE FROM $table_name WHERE $field_name = $field_valus";
    return mysqli_query(connect_to_db(), $delete_query);
}
// Update Funtion
function spy_sabbir_update($table_name, $update_name){
    $query = "SELECT default_item_value FROM $table_name WHERE default_item_name = '$update_name'";
    return mysqli_fetch_assoc(mysqli_query(connect_to_db(), $query))['default_item_value'];
}

?>