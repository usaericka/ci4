<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<section>
    <div class="background-image mt-1">
        <div class="display-6">Hi I'm</div>
        <div class="display-1 text-uppercase">Ericka!</div>
    
        <div class="py-1 mt-5">
            <figure class="text-center text-white">
                <blockquote class="blockquote">
                  <p>"Work Hard in Silence, Let Success Make the Noise."</p>
                </blockquote>
                <figcaption class="blockquote-footer text-white fw-bold">
                  <cite title="Source Title">Frank Ocean</cite>
                </figcaption>
              </figure>
        </div>
    </div>
</section>

<div class="container-fluid bg-footer mt-1 text-end">
        <a href="/contact/create" class="btn text-light fw-bold text-uppercase fs-4">Contact Me</a>
</div>

<?= $this->endSection() ?>