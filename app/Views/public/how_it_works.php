<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light text-center">
  <div class="container py-2">
    <span class="badge badge-primary mb-2">SIMPLE 5-STEP WORKFLOW</span>
    <h1 class="display-5 fw-bold mb-3">How CollabHub Works</h1>
    <p class="lead text-secondary mx-auto" style="max-width:600px;">
      A transparent, streamlined collaboration process built for creators and business owners.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container tab-container py-2">
    <div class="d-flex justify-content-center gap-3 mb-5">
      <a href="#" class="btn btn-primary btn-lg tab-link active px-4" data-tab="creatorWorkflow">For Creators</a>
      <a href="#" class="btn btn-outline btn-lg tab-link px-4" data-tab="brandWorkflow">For Brands</a>
    </div>

    <!-- CREATOR WORKFLOW -->
    <div id="creatorWorkflow" class="tab-pane active">
      <div class="row g-4 justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-primary mb-2">01</div>
            <h4 class="h5 fw-bold mb-2">Create Profile</h4>
            <p class="small text-secondary mb-0">Connect your social accounts (Instagram, TikTok, YouTube) and set your niches.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-primary mb-2">02</div>
            <h4 class="h5 fw-bold mb-2">Discover Deals</h4>
            <p class="small text-secondary mb-0">Browse live campaign opportunities from top verified brands.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-primary mb-2">03</div>
            <h4 class="h5 fw-bold mb-2">Apply to Campaigns</h4>
            <p class="small text-secondary mb-0">Submit your application pitch and fee requirement with 1-click.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-primary mb-2">04</div>
            <h4 class="h5 fw-bold mb-2">Collaborate</h4>
            <p class="small text-secondary mb-0">Chat with brands, submit content drafts, and upload final posts.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-primary mb-2">05</div>
            <h4 class="h5 fw-bold mb-2">Earn &amp; Grow</h4>
            <p class="small text-secondary mb-0">Receive guaranteed payments and build long-term brand relationships.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- BRAND WORKFLOW -->
    <div id="brandWorkflow" class="tab-pane" style="display:none;">
      <div class="row g-4 justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-info mb-2">01</div>
            <h4 class="h5 fw-bold mb-2">Create Brand Profile</h4>
            <p class="small text-secondary mb-0">Add your business information, website, logo, and industry.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-info mb-2">02</div>
            <h4 class="h5 fw-bold mb-2">Create Campaign</h4>
            <p class="small text-secondary mb-0">Specify goals, budget, platforms, and deliverable format requirements.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-info mb-2">03</div>
            <h4 class="h5 fw-bold mb-2">Discover Creators</h4>
            <p class="small text-secondary mb-0">Review applicant profiles or send direct collaboration invitations.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-info mb-2">04</div>
            <h4 class="h5 fw-bold mb-2">Collaborate</h4>
            <p class="small text-secondary mb-0">Review content submissions, approve deliverables, and manage chat.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg">
          <div class="card h-100 text-center p-4 border-0 shadow-sm rounded-4">
            <div class="display-6 fw-extrabold text-info mb-2">05</div>
            <h4 class="h5 fw-bold mb-2">Track Results</h4>
            <p class="small text-secondary mb-0">Measure total reach, engagement rates, and ROI metrics with analytics.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
