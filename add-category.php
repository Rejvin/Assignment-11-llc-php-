<?php
    $message = "";
    if(isset($_POST['button'])){
        require_once'./Category.php';
        $category = new Category();
        
        $message = $category->saveAllCategoryInfo($_POST);
    }
?>

<hr>
<a href="add-category.php">Add Category</a>
<a href="view-category.php">View Category</a>
<hr>


<h1><?php echo $message; ?></h1>
<form action="" method="POST">
    <table>
        <tr>
            <td>Category Name</td>
            <td>
                <input type="text" name="category_name">
            </td>
        </tr>
        <tr>
            <td>Category Description</td>
            <td>
                <textarea name="category_description" cols="30" rows="10"></textarea>
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
                <input type="submit" value="Save Category Information" name="button">
            </td>
        </tr>
    </table>
</form>

