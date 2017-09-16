<?php

class Category {
   public function saveAllCategoryInfo($data){
       $link = mysqli_connect('localhost','root','','bitm-php-65');
       $sql = "INSERT INTO category(category_name,category_description,publication_status)VALUES('$data[category_name]','$data[category_description]','$data[publication_status]')";
       if(mysqli_query($link,$sql)){
           $message = "Category Information Save Successfully.";
           return $message;
       }else{
           die('Query Problem'. mysqli_error($link));
       }   
   } 
   
   public function getAllCategoryInfo(){
       $link = mysqli_connect('localhost','root','','bitm-php-65');
       $sql = "SELECT * FROM category";
       if(mysqli_query($link,$sql)){
          $query_result = mysqli_query($link,$sql);
          return $query_result;
       }else{
          die('Query Problem'. query_error($link)); 
       }
   }
   
   public function getCategoryInfoById($id){
       $link = mysqli_connect('localhost','root','','bitm-php-65');
       $sql = "SELECT * FROM category WHERE $id='$id' ";
       if(mysqli_query($link,$sql)){
          $query_result = mysqli_query($link,$sql);
          return $query_result;
       }else{
          die('Query Problem'. query_error($link)); 
       }
   }
   
    public function updateCategoryInfo($data,$id){
       $link = mysqli_connect('localhost','root','','bitm-php-65');
       $sql = "UPDATE category SET category_name='$data[category_name]',category_description='$data[category_description]',publication_status='$data[publication_status]' WHERE id='$id' ";
       if(mysqli_query($link,$sql)){
           header('Location:view-category.php');
       }else{
          die('Query Problem'. query_error($link)); 
       }
    } 
    
    public function deleteCategoryInfoById($id) {
       $link = mysqli_connect('localhost','root','','bitm-php-65');
       $sql = "DELETE FROM category WHERE id='$id' ";
       if(mysqli_query($link,$sql)){
           header('Location:view-category.php');
       }else{
          die('Query Problem'. query_error($link)); 
       }
    }
    
}
