<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light text-center">
  <div class="container container-sm py-2">
    <span class="badge badge-primary mb-2">FREQUENTLY ASKED QUESTIONS</span>
    <h1 class="display-5 fw-bold mb-3">Got Questions? We've Got Answers.</h1>
    <p class="lead text-secondary mx-auto">Find everything you need to know about CollabHub creator &amp; brand workflows.</p>
  </div>
</section>

<section class="py-5">
  <div class="container container-sm py-2">
    <div class="d-flex flex-column gap-3">
      <div class="card p-4 border-0 shadow-sm rounded-4">
        <h3 class="h5 fw-bold mb-2 text-primary">Is CollabHub free for influencers and content creators?</h3>
        <p class="text-secondary mb-0">Yes! CollabHub is 100% free for content creators. You retain 100% of your monetary earnings with zero hidden platform cuts.</p>
      </div>

      <div class="card p-4 border-0 shadow-sm rounded-4">
        <h3 class="h5 fw-bold mb-2 text-primary">How do brand payments work?</h3>
        <p class="text-secondary mb-0">When a brand accepts a creator's monetary proposal, the campaign funds are deposited into an escrow account. Payments are automatically disbursed once content deliverables are approved.</p>
      </div>

      <div class="card p-4 border-0 shadow-sm rounded-4">
        <h3 class="h5 fw-bold mb-2 text-primary">What types of collaborations can I host?</h3>
        <p class="text-secondary mb-0">CollabHub supports three primary collaboration options: Free Product Seeding (product only), Free Service / Experience (spa, dining, hotel stays), and Paid Service (monetary payments).</p>
      </div>

      <div class="card p-4 border-0 shadow-sm rounded-4">
        <h3 class="h5 fw-bold mb-2 text-primary">Can brands message creators directly?</h3>
        <p class="text-secondary mb-0">Yes! Once a collaboration request is initiated or accepted, both parties can communicate via the built-in real-time chat workspace, send file attachments, script drafts, and campaign guidelines.</p>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
