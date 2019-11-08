<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart(site_url('categories/create')); ?>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
</div>
<button type="submit" class="btn btn-secondary">Submit</button>

<?= form_close(); ?>
