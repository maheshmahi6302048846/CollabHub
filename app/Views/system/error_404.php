<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 6rem 0; text-align:center; min-height: calc(100vh - 250px); display:flex; align-items:center;">
  <div class="container container-sm">
    <div style="font-size:6rem; font-weight:800; font-family:var(--font-heading); color:var(--primary-600); line-height:1; margin-bottom:1rem;">404</div>
    <h1 style="font-size:2.4rem; margin-bottom:1rem;">Page Not Found</h1>
    <p style="color:var(--gray-600); font-size:1.1rem; max-width:480px; margin:0 auto 2rem;">
      Oops! The campaign page or profile you are looking for has been moved or doesn't exist.
    </p>
    <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg">&larr; Back to Homepage</a>
  </div>
</section>

<?= $this->endSection() ?>
