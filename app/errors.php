<?php if(count($errors) > 0): ?>
<div>
    <?php for($i = 0; $i < count($errors); $i++): ?>
    <p><?= $errors[$i] ?></p>
    <?php endfor ?>
</div>
<?php endif ?>