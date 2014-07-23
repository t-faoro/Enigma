<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>This is the Default template for my Enigma</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $this->getCurrentTemplatePath(); ?>css/style.css" />
</head>

<body>

<div class="wrapper">
    <div class="header"><?php $this->widgetOutput('logoPosition'); ?></div>
    <div class='clear'></div>
    <div class="sidebar">
        <?php $this->widgetOutput('sidebarPosition'); ?>
        <br><br><br><br><br><br><br>
    </div>
    <div class='content'>
        <?php echo $this->enigmaOutput(); ?>
        <br><br><br><br><br>
    </div>
    <div class='clear'></div>
    <div class="footer">
        this is footer text                
    </div>
</div>


</body>
</html>
