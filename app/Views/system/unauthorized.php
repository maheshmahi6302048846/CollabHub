<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 6rem 0; text-align:center; min-height: calc(100vh - 250px); display:flex; align-items:center;">
  <div class="container container-sm">
    <div style="font-size:4rem; margin-bottom:1rem;">🚫</div>
    <h1 style="font-size:2.4rem; margin-bottom:1rem;">Unauthorized Access</h1>
    <p style="color:var(--gray-600); font-size:1.1rem; max-width:480px; margin:0 auto 2rem;">
      You do not have permission to view this brand dashboard or creator workspace. Please log in with an authorized account.
    </p>
    <a href="<?= base_url('login') ?>" class="btn btn-primary btn-lg">Log In &rarr;</a>
  </div>
</section>

<?= $this->endSection() ?>
