<?= $this->extend('layouts/formbase.php') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mb-2">
                    <a href="<?= base_url('/contact');?>" class="btn btn-danger float-end text-white">X</a>
                    <h5>View Users Data</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid bg-bottom mt-1 py-4 mb-1 text-white">
                        <div class="row mb-4 mt-4">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <p class="form-control">
                                    <?=$feedback['name']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Email Address</label>
                            <div class="col-sm-10">
                                <p class="form-control">
                                    <?=$feedback['email']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Message</label>
                            <div class="col-sm-10">
                                <p class="form-control">
                                    <?=$feedback['message']; ?>
                                </p>
                            </div>
                        </div>
                        <div class="container-fluid bg-bottom py-1"></div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
  


   <?= $this->endSection() ?>
  