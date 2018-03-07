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
    <div class="col-lg-12">
        <h3>Contact form</h3>
        <form method="post" action="/contact/save.php<?= $saveAttr ?>">
            <div class="form-group">
                <label>Your name</label>
                <input
                    type="text"
                    name="username"
                    value="<?= ($currentComment ? $currentComment['name'] : null) ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label>Your comment</label>
                <textarea name="comment" class="form-control"><?= ($currentComment ? $currentComment['comment'] : null) ?></textarea>
            </div>

            <input type="submit" value="Submit" class="btn btn-success">
            <a href="/contact" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>

<?php foreach ($comments as $comment) : ?>

    <div class="row">
        <div class="col-lg-12">
            <p><b>Author:</b> <?= $comment['name'] ?></p>
            <p><b>Comment:</b><br> <?= nl2br($comment['comment']) ?></p>
            <a href="/contact?file=<?= $comment['file'] ?>" class="btn btn-xs btn-info">Edit</a>
        </div>
    </div>
    <hr>

<?php endforeach; ?>
