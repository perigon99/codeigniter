<h2><?php $post['title']; ?></h2>
<small class="post-date">Posted on : <?php echo $post['created_at']; ?> </small>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-primary pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/' .$post['id']); ?>

    <input type="submit" value="Delete" class="btn btn-danger">
</form>


