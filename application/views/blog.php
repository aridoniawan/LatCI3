<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>

    <a href="<?php echo site_url('blog/add');?>">Tambah Artikel</a>

    <?php foreach ($blogs as $key => $blog): ?>
        <div class="blog">
            <h2>
                <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>"><?php echo $blog['title'];?></a>
            </h2>
        </div>
        <a href="<?php echo site_url('blog/edit/'.$blog['id']);?>">Edit</a>
        <a href="<?php echo site_url('blog/delete/'.$blog['id']);?>">Delete</a>
        <p><?php echo $blog['content'];?></p>
    <?php endforeach; ?>
</body>
</html>