<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$meta_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/styles/bootstrap.min.css'); ?>" rel="stylesheet" >
    <link href="<?= base_url('assets/styles/style.css'); ?>" rel="stylesheet" >
</head>
<body>

    <div class="app">
        <?= $this->include('layouts/inc/navbar.php') ?>
        <?= $this->renderSection('content') ?>
    </div>

<script src="<?= base_url('assets/scripts/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>