<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light text-center">
  <div class="container py-2">
    <span class="badge badge-primary mb-2">TRANSPARENT PLANS</span>
    <h1 class="display-5 fw-bold mb-3">Simple, Scalable Pricing</h1>
    <p class="lead text-secondary mx-auto" style="max-width:600px;">
      Creators join &amp; collaborate 100% free. Brands pay simple monthly tiers for campaign management &amp; discovery.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container py-2">
    <div class="row g-4 align-items-stretch">
      <!-- STARTER -->
      <div class="col-12 col-md-4">
        <div class="card h-100 p-4 p-lg-5 text-center border-0 shadow-sm rounded-4">
          <h3 class="h4 fw-bold mb-1">Creator Free</h3>
          <p class="small text-muted mb-4">For influencers &amp; content creators</p>
          <div class="display-4 fw-extrabold text-primary mb-4">₹0<span class="fs-6 text-muted fw-normal">/forever</span></div>
          <ul class="list-unstyled text-start text-dark fw-medium d-flex flex-column gap-2 mb-4">
            <li>✓ Unlimited campaign discovery</li>
            <li>✓ Product &amp; Paid collaborations</li>
            <li>✓ Media kit profile page</li>
            <li>✓ Direct brand messaging</li>
            <li>✓ 0% commission on earnings</li>
          </ul>
          <div class="mt-auto">
            <a href="<?= base_url('register?type=creator') ?>" class="btn btn-outline w-100">Create Creator Account</a>
          </div>
        </div>
      </div>

      <!-- BRAND PRO -->
      <div class="col-12 col-md-4">
        <div class="card card-gradient h-100 p-4 p-lg-5 text-center border border-2 border-primary position-relative shadow-lg rounded-4">
          <span class="badge badge-primary position-absolute top-0 start-50 translate-middle">MOST POPULAR</span>
          <h3 class="h4 fw-bold mb-1">Brand Growth</h3>
          <p class="small text-muted mb-4">For scaling D2C brands &amp; businesses</p>
          <div class="display-4 fw-extrabold text-primary mb-4">₹4,999<span class="fs-6 text-muted fw-normal">/mo</span></div>
          <ul class="list-unstyled text-start text-dark fw-medium d-flex flex-column gap-2 mb-4">
            <li>✓ Up to 10 Active Campaigns</li>
            <li>✓ Unlimited Creator Applicants</li>
            <li>✓ Advanced Creator Search &amp; Filters</li>
            <li>✓ Real-Time Analytics &amp; PDF Exports</li>
            <li>✓ Dedicated Campaign Support</li>
          </ul>
          <div class="mt-auto">
            <a href="<?= base_url('register?type=brand') ?>" class="btn btn-primary w-100">Start 14-Day Free Trial</a>
          </div>
        </div>
      </div>

      <!-- ENTERPRISE -->
      <div class="col-12 col-md-4">
        <div class="card h-100 p-4 p-lg-5 text-center border-0 shadow-sm rounded-4">
          <h3 class="h4 fw-bold mb-1">Agency &amp; Enterprise</h3>
          <p class="small text-muted mb-4">For large brands &amp; marketing agencies</p>
          <div class="display-4 fw-extrabold text-primary mb-4">₹14,999<span class="fs-6 text-muted fw-normal">/mo</span></div>
          <ul class="list-unstyled text-start text-dark fw-medium d-flex flex-column gap-2 mb-4">
            <li>✓ Unlimited Active Campaigns</li>
            <li>✓ Multi-User Team Roles</li>
            <li>✓ API &amp; CRM Integrations</li>
            <li>✓ Managed Influencer Outreach</li>
            <li>✓ Custom SLA &amp; Dedicated Manager</li>
          </ul>
          <div class="mt-auto">
            <a href="<?= base_url('contact') ?>" class="btn btn-outline w-100">Contact Sales</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
