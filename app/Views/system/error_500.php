<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 6rem 0; text-align:center; min-height: calc(100vh - 250px); display:flex; align-items:center;">
  <div class="container container-sm">
    <div style="font-size:6rem; font-weight:800; font-family:var(--font-heading); color:var(--danger-main); line-height:1; margin-bottom:1rem;">500</div>
    <h1 style="font-size:2.4rem; margin-bottom:1rem;">Internal Server Error</h1>
    <p style="color:var(--gray-600); font-size:1.1rem; max-width:480px; margin:0 auto 2rem;">
      We encountered an unexpected technical issue. Our engineering team has been notified.
    </p>
    <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg">&larr; Return to Safety</a>
  </div>
</section>

<?= $this->endSection() ?>
