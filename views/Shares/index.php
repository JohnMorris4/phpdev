<div>
<?php if(isset($_SESSION['is_logged_in']))  : ?>
<a href="<?php echo ROOT_PATH; ?>Shares/add" class="btn btn-success btn-lg btn-share">Share Something</a>
<?php endif;?>
<?php foreach ($viewmodel as $item) : ?>
<div class="well">
    <h3><?php echo $item['title']; ?> </h3>
    <small><?php echo $item['create_date']; ?></small>
    <hr>
    <p><?php echo $item['body']; ?></p>
    <a href="<?php echo $item['link']; ?>" class="btn btn-primary" target="_blank">Go to Website</a>
</div>
<?php endforeach; ?>

</div>
