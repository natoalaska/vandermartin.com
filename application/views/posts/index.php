<h2><?= $title ?></h2>

<?php foreach($posts as $post) : ?>
<h3><?= $post['title']; ?></h3>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small>
<br>
<p><?= $post['body']; ?></p>
<p><a class="btn btn-secondary" href="<?= site_url('posts/' . $post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>
