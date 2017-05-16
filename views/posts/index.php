<?php
/**
 * Created by @author Zbyněk Mlčák
 * Date: 16.05.2017
 */
?>

<p>Here is a list of all posts:</p>

<?php foreach ($posts as $post) { ?>
    <p>
        <?php echo $post->author; ?>
        <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>See content</a>
    </p>
<?php } ?>
