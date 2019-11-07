<h2><?= $title; ?></h2>

<small class="post-date">Posted on: <?= $post['created_at']; ?></small>
<img src="<?= base_url('assets/images/posts/' . $post['post_image']); ?>" alt="">
<div class="post-body">
    <?= $post['body']; ?>
</div>

<hr>

<div class="float-left"><a href="<?= site_url('posts/edit/' . $post['slug']); ?>" class="btn btn-secondary">Edit</a></div>

<?= form_open(site_url('posts/delete')); ?>
    <input type="hidden" name="id" value="<?= $post['id']; ?>">
    <input type="submit" value="Delete" class="btn btn-danger"></input>
<?= form_close(); ?>
