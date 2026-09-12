<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5 bg-app d-flex align-items-center" style="min-height: calc(100vh - 180px);">
  <div class="container container-sm">
    <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5">
      
      <div class="text-center max-w-500 mx-auto mb-4">
        <span class="badge badge-primary mb-2">JOIN COLLABHUB</span>
        <h1 class="h3 fw-bold text-dark mb-1">Create Your Account</h1>
        <p class="text-muted small">Join thousands of creators and brands growing together.</p>
      </div>

      <form id="regForm" action="<?= base_url('creator/onboarding') ?>" method="get">
        
        <!-- ACCOUNT TYPE VISUAL SELECTION -->
        <div class="mb-4">
          <label class="form-label text-center d-block mb-3 fw-bold small text-dark">I am joining as a:</label>
          <div class="row g-3">
            
            <div class="col-12 col-sm-6">
              <div id="roleCreator" class="card card-interactive p-4 text-center cursor-pointer border border-2 border-primary bg-primary-subtle h-100" onclick="selectRole('creator')">
                <div class="fs-1 mb-2">📱</div>
                <h3 class="h6 fw-bold text-dark mb-1">Creator / Influencer</h3>
                <p class="small text-muted mb-0">I create content and want to collaborate with top brands</p>
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <div id="roleBrand" class="card card-interactive p-4 text-center cursor-pointer border border-2 border-light-subtle h-100" onclick="selectRole('brand')">
                <div class="fs-1 mb-2">🏢</div>
                <h3 class="h6 fw-bold text-dark mb-1">Brand / Business</h3>
                <p class="small text-muted mb-0">I want to promote my brand and work with creators</p>
              </div>
            </div>

          </div>
          <input type="hidden" id="selectedRole" name="role" value="creator">
        </div>

        <div class="row g-3 mb-3">
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Full Name</label>
            <input type="text" class="form-control" placeholder="Priya Sharma" required>
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Email Address</label>
            <input type="email" class="form-control" placeholder="you@example.com" required>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Password</label>
            <input type="password" class="form-control" placeholder="••••••••" required>
          </div>

          <div class="col-12 col-md-6">
            <label class="form-label fw-bold small text-dark">Confirm Password</label>
            <input type="password" class="form-control" placeholder="••••••••" required>
          </div>
        </div>

        <button type="submit" id="submitRegBtn" class="btn btn-primary btn-lg w-100 mt-2">
          Continue to Setup &rarr;
        </button>

        <div class="text-center small text-muted mt-4">
          Already have an account? <a href="<?= base_url('login') ?>" class="fw-bold text-primary text-decoration-none">Log In</a>
        </div>
      </form>

    </div>
  </div>
</section>

<script>
function selectRole(role) {
  const form = document.getElementById('regForm');
  const roleCreator = document.getElementById('roleCreator');
  const roleBrand = document.getElementById('roleBrand');
  const selectedRole = document.getElementById('selectedRole');

  if (role === 'creator') {
    selectedRole.value = 'creator';
    form.action = "<?= base_url('creator/onboarding') ?>";
    roleCreator.style.borderColor = "var(--primary-600)";
    roleCreator.style.background = "var(--primary-50)";
    roleBrand.style.borderColor = "var(--gray-200)";
    roleBrand.style.background = "white";
  } else {
    selectedRole.value = 'brand';
    form.action = "<?= base_url('brand/onboarding') ?>";
    roleBrand.style.borderColor = "var(--primary-600)";
    roleBrand.style.background = "var(--primary-50)";
    roleCreator.style.borderColor = "var(--gray-200)";
    roleCreator.style.background = "white";
  }
}
</script>

<?= $this->endSection() ?>
