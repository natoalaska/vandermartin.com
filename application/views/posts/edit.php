<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open(site_url('posts/update')); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label for="editor">Body</label>
        <textarea class="form-control" id="editor" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
    </div>
    <input type="hidden" name="id" value="<?= $post['id']; ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
