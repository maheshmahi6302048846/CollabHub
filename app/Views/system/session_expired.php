<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 6rem 0; text-align:center; min-height: calc(100vh - 250px); display:flex; align-items:center;">
  <div class="container container-sm">
    <div style="font-size:4rem; margin-bottom:1rem;">⏳</div>
    <h1 style="font-size:2.4rem; margin-bottom:1rem;">Session Expired</h1>
    <p style="color:var(--gray-600); font-size:1.1rem; max-width:480px; margin:0 auto 2rem;">
      Your active session timed out due to inactivity. Please log back in to resume your campaign activity.
    </p>
    <a href="<?= base_url('login') ?>" class="btn btn-primary btn-lg">Sign In Again &rarr;</a>
  </div>
</section>

<?= $this->endSection() ?>
