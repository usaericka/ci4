<?= $this->extend('layouts/frontend.php') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">

            <?php
                if(session()->getFlashdata('status'))
                {
                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?=session()->getFlashdata('status');?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" alert-label="Close"></button>
                        </div>
                    <?php
                }
            ?>
            
            <div class="card">
                <div class="card-header">
                    <h5>Users Data</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-dark table-hover" id="users-list">
                        <thead>
                            <tr class="text-center">
                                <th scope = "col">ID</th>
                                <th scope = "col">Name</th>
                                <th scope = "col">Email</th>
                                <th scope = "col">Message</th>
                                <th colspan ="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($feedbacks):?>
                                <?php foreach($feedbacks as $row) :?>
                                <tr class="text-center">
                                    <td><?= $row['id'];?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['message']; ?></td>
                                   
                                    <td><a href="<?=base_url('view_details/'.$row['id']) ?>" class="btn btn-primary btn-sm">VIEW</a></td>
                                    <td><a href="<?=base_url('contact/edit/'.$row['id']) ?>" class="btn btn-success btn-sm">EDIT</a></td>
                                    <td><a href="<?=base_url('contact/delete/'.$row['id']) ?>" class="btn btn-danger btn-sm">DELETE</a></td>
                                    
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    

<?= $this->endSection() ?>