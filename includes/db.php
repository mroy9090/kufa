<?php
class Database{
    function dbConnect($db_name){
         return mysqli_connect("localhost", "root", "", "$db_name");
    }
    function selectLogCountQuery($db_name,$table_name,$name,$password1){
        $db_select = "SELECT COUNT(*) as count FROM $table_name WHERE email='$name' AND password='$password1'";
        $db_query = mysqli_query($this->dbConnect($db_name), $db_select);
        $after_assoc = mysqli_fetch_assoc($db_query);
        return $after_assoc;
    }
    function dashBoardSelectQuery($db_name, $table_name, $email){
        $db_select = "SELECT * FROM $table_name WHERE email='$email'";
        $db_query = mysqli_query($this->dbConnect($db_name), $db_select);
        $after_assoc = mysqli_fetch_assoc($db_query);
        return $after_assoc;
    }
    function selectQuery($table_name, $db_name){
        $db_select = "SELECT * FROM $table_name";
        $db_query = mysqli_query($this->dbConnect($db_name), $db_select);
        $after_assoc = mysqli_fetch_assoc($db_query);
        return $db_query;
    }
    function updateVisibilityQuery($db_name, $table_name,$visibility_name,$id){
        $update_query= "UPDATE $table_name SET visibility='$visibility_name' WHERE id='$id'";
        $db_query = mysqli_query($this->dbConnect($db_name), $update_query);
        return $db_query;
    }
    function insertEducationDetails($db_name, $table_name, $joining_date, $leaving_date, $institution_name, $degree_name, $about_degree){
        $insert_query="INSERT INTO $table_name(joining_date, leaving_date, institution_name, degree_name, about_degree) VALUES ('$joining_date','$leaving_date','$institution_name','$degree_name','$about_degree')";
        $db_query = mysqli_query($this->dbConnect($db_name), $insert_query);
        $after_assos=mysqli_fetch_assoc($db_query);
        print_r($after_assos);
        return $db_query;
    }
    function selectDataQuery($db_name,$table_name,$setting_value,$owner_info){
        $db_select = "SELECT $setting_value FROM $table_name WHERE setting_name='$owner_info'";
        $db_query = mysqli_query($this->dbConnect($db_name), $db_select);
        $after_assoc = mysqli_fetch_assoc($db_query);
        return $after_assoc;
    }
    function selectAboutDataQuery($db_name, $table_name, $owner_info)
    {
        $db_select = "SELECT $owner_info FROM $table_name";
        $db_query = mysqli_query($this->dbConnect($db_name), $db_select);
        $after_assoc = mysqli_fetch_assoc($db_query);
        return $after_assoc;
    }
}

?>