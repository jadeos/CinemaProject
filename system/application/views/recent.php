<!DOCTYPE html>
<head>

</head>
<body>
<?php
        if(isset($users)):foreach ($users as $row): ;?>
<h1> My Recent Films</h1>
<?php echo $row->recent;?>
        <?php endforeach; ?>
        <?php else : ?>
                <h3>No results found</h3>
        <?php endif; ?>

</body>
</html>