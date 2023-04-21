<div class="container-fluid bg-footer mt-1 py-5 text-white">
      <h1 class="text-center fs-4 fw-bold text-uppercase mb-5">Contact Me</h1>
      <form action="" class="text-start mx-5" method="POST">
         <div class="modal-body">
            <div class="row mb-5">
               <label class="col-sm-2 col-form-label" for="validationDefaultName">Name</label>
               <div class="col-sm-10">
                  <input type="form-text" class="form-control " name="name" id="validationDefaultName" value="" required>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-sm-2 col-form-label" for="validationDefaultEmail">Email Address</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="" required>
                  <div id="validationDefaultEmail" class="form-text text-white">We'll never share your email with anyone else.</div>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-sm-2 col-form-label">Message</label>
               <div class="col-sm-10">
                  <textarea type="form-text" name="message" class="form-control" id="message"> </textarea>
               </div>
            </div>
            <div class="text-center py-3">
               <button type="submit" name="submit_btn" class="btn border-light text-light mx-1">SUBMIT</button>
               <a href="/home" class="btn border-light text-light mx-1">BACK</a>
            </div>
         </div>
      </form>
   </div>
   <div class="container-fluid bg-footer mt-1 py-3"></div>