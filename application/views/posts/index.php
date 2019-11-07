<h2><?= $title ?></h2>

<?php foreach($posts as $post) : ?>
<h3><?= $post['title']; ?></h3>
<div class="row">
    <div class="col-md-3">
        <img class="img-fluid" src="<?= base_url('assets/images/posts/' . $post['post_image']); ?>" alt="">
    </div>
    <div class="col-md-9">
        <small class="post-date">Posted on: <?= $post['created_at']; ?> in <strong><?= $post['name']; ?></strong></small>
        <br>
        <p><?= word_limiter($post['body'], 60); ?></p>
        <p><a class="btn btn-secondary" href="<?= site_url('posts/' . $post['slug']); ?>">Read More</a></p>
    </div>
</div>

<?php endforeach; ?>
