<h1>Blog Posts</h1>
<div class="row">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
    <div class="post-box">
        <div class="post-content">
            <div class="caption">
                <h4><a href="javascript:void(0);"><?php echo $post->title; ?></a></h4>
                <p><?php echo $post->description; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
    <p class="no-record">No post(s) found......</p>
    <?php endif; ?>
</div>