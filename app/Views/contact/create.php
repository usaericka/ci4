<?= $this->extend('layouts/formbase.php') ?>
<?= $this->section('content') ?>


<div class="container-fluid bg-bottom mt-1 py-4"></div>

<div class="container-fluid bg-bottom py-3 text-white">
      <h1 class="text-center fs-4 fw-bold text-uppercase mb-5">Contact Me</h1>
      <form action="<?=base_url('contact/add')?>" class="text-start mx-5" method="POST">
         <div class="modal-body">
            <div class="row mb-5">
               <label class="col-sm-2 col-form-label">Name</label>
               <div class="col-sm-10">
                  <input type="form-text" class="form-control " name="name" required>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-sm-2 col-form-label">Email Address</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                  <div class="form-text text-white">We'll never share your email with anyone else.</div>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-sm-2 col-form-label">Message</label>
               <div class="col-sm-10">
                  <textarea type="form-text" name="message" class="form-control" required> </textarea>
               </div>
            </div>
            <div class="text-center mt-5 py-1">
               <button type="submit" class="btn border-white fw-bold text-white mx-1">SUBMIT</button>
            </div>
         </div>
      </form>
   </div>
   <div class="container-fluid bg-bottom py-3"></div>

<?= $this->endSection() ?>
  