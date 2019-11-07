<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open(site_url('posts/create')); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label for="editor">Body</label>
        <textarea class="form-control" id="editor" name="body" placeholder="Add Body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
