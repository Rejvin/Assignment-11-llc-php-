<?php
   $id = $_GET['id'];
   require_once './Category.php';
   $category = new Category();
   $query_result = $category->getCategoryInfoById($id);
   $categoryInfo = mysqli_fetch_assoc($query_result);
   
   if(isset($_POST['button'])){
      $category->updateCategoryInfo($_POST,$id); 
   }
?>

<hr>
<a href="add-category.php">Add Category</a>
<a href="view-category.php">View Category</a>
<hr>


<form action="" method="POST" name="editCategoryForm">
    <table>
        <tr>
            <td>Category Name</td>
            <td>
                <input type="text" name="category_name" value="<?php echo $categoryInfo['category_name']; ?>">
            </td>
        </tr>
        <tr>
            <td>Category Description</td>
            <td>
                <textarea name="category_description" cols="30" rows="10"><?php echo $categoryInfo['category_description']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Publication Status</td>
            <td>
                <select name="publication_status">
                    <option>---Select Category Name---</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Submit Here</td>
            <td>
                <input type="submit" value="Update Category Information" name="button">
            </td>
        </tr>
    </table>
</form>

<script>
    document.forms['editCategoryForm'].elements['publication_status'].value='<?php $categoryInfo['publication_status']; ?>';
</script>

