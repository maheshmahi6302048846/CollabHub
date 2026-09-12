<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-light">
  <div class="container container-sm py-2">
    <div class="card p-4 p-md-5 border-0 shadow-sm rounded-4">
      <span class="badge badge-primary me-auto mb-2">WE ARE HERE TO HELP</span>
      <h1 class="display-6 fw-bold mb-2">Contact CollabHub Support</h1>
      <p class="text-secondary mb-4">Have questions about brand campaigns, creator onboarding, or payments? Drop us a message.</p>

      <form onsubmit="event.preventDefault(); showToast('Message sent successfully! We will get back to you shortly.');">
        <div class="row g-3 mb-3">
          <div class="col-12 col-sm-6">
            <div class="form-group mb-0">
              <label class="form-label fw-semibold small text-dark">Full Name</label>
              <input type="text" class="form-control" placeholder="Jane Doe" required>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group mb-0">
              <label class="form-label fw-semibold small text-dark">Email Address</label>
              <input type="email" class="form-control" placeholder="jane@example.com" required>
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <label class="form-label fw-semibold small text-dark">Account Role</label>
          <select class="form-select">
            <option>Creator / Influencer</option>
            <option>Brand / Business Owner</option>
            <option>Agency Partner</option>
            <option>General Inquiry</option>
          </select>
        </div>

        <div class="form-group mb-4">
          <label class="form-label fw-semibold small text-dark">Message</label>
          <textarea class="form-control" rows="4" placeholder="How can our team help you?" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-100 py-3">Send Message &rarr;</button>
      </form>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
