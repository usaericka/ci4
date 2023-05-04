
<?= $this->extend('layouts/formbase.php') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>View Users Data</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid bg-bottom mt-1 py-4"></div>

                    <div class="container-fluid bg-bottom py-3 text-white">
                        <h2 class="text-center fs-4 fw-bold mb-5">View Users Data
                            <a href="/contact" class="btn btn-danger text-light">CANCEL</a>
                        </h2>
                            <div class="modal-body">
                                <div class="row mb-5">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <p class="form-control">
                                            <?=$row['name']; ?>">
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                        <p class="form-control">
                                            <?=$row['email']; ?>" >
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
                                        <p class="form-control">
                                             <?=$row['message']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="container-fluid bg-bottom py-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>


   <?= $this->endSection() ?>
  