<div class="post item" style="220px">
    <div class="well">
        <h4>
            <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
        </h4>
        <div class="info">
            <span class="badge">
                <?php echo implode(', ', $data->tagLinks); ?>
            </span>
        </div>
        Posted by <?php echo $data->author->username; ?>
    </div>
</div>
