<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart(site_url('posts/create')); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label for="editor">Body</label>
        <textarea class="form-control" id="editor" name="body" placeholder="Add Body" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id" id="category_id">
            <?php foreach($categories as $category) : ?>
            <option value="<?= $category["id"]; ?>"><?= $category["name"]; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="postimage">Upload Image</label>
        <input class="form-control" type="file" name="userfile" id="postimage" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>
