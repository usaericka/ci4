<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/styles/bootstrap.min.css'); ?>" rel="stylesheet" >
    <link href="<?= base_url('assets/styles/style.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('assets/scripts/bootstrap.bundle.min.js'); ?>"></script>
</head>
<body>
    
    <div class="app">
        <?= $this->include('layouts/inc/formnav.php') ?>
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>