<?php

$comments = [];

$dir = __DIR__ . '/../../data';
foreach (scandir($dir) as $file) {
    if (in_array($file, ['.', '..', '.gitignore'])) {
        continue;
    }

    $content = file_get_contents("{$dir}/{$file}");
    $row = json_decode($content, true);
    $row['file'] = $file;
    $comments[] = $row;
}

$currentComment = [];
$saveAttr = '';
if (array_key_exists('file', $_GET)) {
    $currentContent = file_get_contents("{$dir}/{$_GET['file']}");
    $currentComment = json_decode($currentContent, true);
    $saveAttr = "?file={$_GET['file']}";
}

?>

<div class="row">
    <div class="col-lg-12 form-length">
        <h1 class="text-center">Contact form</h1>
        <form method="post" action="/contact_form-button_delete/save.php<?= $saveAttr ?>" class="text-center">
            <div class="form-group">
                <label class="big-label">Enter your name</label>
                <input
                    type="text"
                    name="username"
                    value="<?= ($currentComment ? $currentComment['name'] : null) ?>"
                    class="form-control input-lg">
            </div>
            <div class="form-group">
                <label class="big-label">Enter your comment</label>
                <textarea name="comment" class="form-control input-lg"><?= ($currentComment ? $currentComment['comment'] : null) ?></textarea>
            </div>

            <input type="submit" value="Submit" class="btn btn-success position">
            <a href="/contact_form-button_delete" class="btn btn-danger">Cancel</a>
        </form>

    </div>
</div>

<?php foreach ($comments as $comment) : ?>

    <div class="row">
        <div class="col-lg-12 comments">
            <p class="bg-danger pin"><b>Author:</b> <?= $comment['name'] ?></p>
            <p class="bg-danger pin"><b>Comment:</b><br> <?= nl2br($comment['comment']) ?></p>
            <a href="/contact_form-button_delete/?file=<?= $comment['file'] ?>" class="btn btn-xs btn-info">Edit</a>
            <a href="/contact_form-button_delete/delete.php?file=<?= $comment['file'] ?>" class="btn btn-xs btn-danger">Delete</a>
        </div>
    </div>

<?php endforeach; ?>
