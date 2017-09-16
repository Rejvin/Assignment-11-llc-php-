<?php
require_once './Category.php';
$category = new Category();
$query_result = $category->getAllCategoryInfo();

if(isset($_GET['id'])){
    $id = $_GET['id'];
  $category->deleteCategoryInfoById($id);  
}
?>

<table border="1" colspadding="30" rowspadding="10">
    <tr>
        <td>Publication Id</td>
        <td>Publication Name</td>
        <td>Publication Description</td>
        <td>Publication Status</td>
        <td>Action</td>
    </tr>
    <?php while($categoryInfo = mysqli_fetch_assoc($query_result)){ ?>
    <tr>
        <td><?php echo $categoryInfo['id']; ?></td>
        <td><?php echo $categoryInfo['category_name']; ?></td>
        <td><?php echo $categoryInfo['category_description']; ?></td>
        <td><?php echo $categoryInfo['publication_status']==1 ? 'Published':'Unpublished'; ?></td>
        <td>
            <a href="edit-category.php?id=<?php echo $categoryInfo['id'];  ?>">EDIT</a> ||
            <a href="?id=<?php echo $categoryInfo['id']; ?>" onclick="return confirm('Are you sure to delete this row!!');">DELETE</a>
        </td>
    </tr>
    <?php } ?>
</table>

