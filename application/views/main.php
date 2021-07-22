<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title;?></title>

    <?php
    if(!empty($fonts)) {
        foreach ($fonts as $font): ?>
            <link href="<?php echo $font; ?>" rel="stylesheet" type="text/css" />
        <?php endforeach;
    }

    if(!empty($boostrapLink)){?>
        <link rel="stylesheet" href="<?php echo $boostrapLink[0]; ?>" integrity="<?php echo $boostrapLink[1]; ?>" crossorigin="anonymous">

    <?php  }


    if(!empty($styles)){
         foreach($styles as $style): ?>
             <link href="<?php echo URL::base(). $style; ?>.css"
                   rel="stylesheet" type="text/css" />
         <?php endforeach;
    }
    ?>
</head>
<?= $content;?>
<?php
if(!empty($scripts)) {
        foreach ($scripts as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach;
    }
?>
</html>
