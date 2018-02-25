<?php

/**
 * @var \models\Category $category
 */

?>

<form method="post" action="/categories/update?id=<?= $category->id ?>">
    <div class="form-group">
        <label>Category name</label>
        <input type="text" name="title" class="form-control" value="<?= $category->title ?>">
    </div>

    <input type="submit" value="Save" class="btn btn-success">
</form>