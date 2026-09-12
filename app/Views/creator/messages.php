<?= $this->extend('layouts/app_creator') ?>

<?= $this->section('content') ?>

<div class="chat-wrapper">
  
  <!-- LEFT: CONVERSATION LIST -->
  <div class="chat-sidebar">
    <div class="chat-search-bar">
      <input type="text" class="form-control" placeholder="Search conversations..." style="font-size:0.85rem;">
    </div>

    <div class="chat-list">
      <div class="chat-item active">
        <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
        <div style="flex:1; min-width:0;">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="font-weight:700; font-size:0.9rem; color:var(--gray-900);">Reshe Clinic</div>
            <span style="font-size:0.7rem; color:var(--gray-400);">10:42 AM</span>
          </div>
          <div style="font-size:0.8rem; color:var(--gray-600); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">We reviewed your reel draft!</div>
        </div>
      </div>

      <div class="chat-item">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
        <div style="flex:1; min-width:0;">
          <div style="display:flex; justify-content:space-between; align-items:center;">
            <div style="font-weight:700; font-size:0.9rem; color:var(--gray-900);">FitLife Nutrition</div>
            <span style="font-size:0.7rem; color:var(--gray-400);">Yesterday</span>
          </div>
          <div style="font-size:0.8rem; color:var(--gray-500); white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Payment disbursed to account</div>
        </div>
      </div>
    </div>
  </div>

  <!-- RIGHT: ACTIVE CONVERSATION -->
  <div class="chat-main">
    <div class="chat-header">
      <div style="display:flex; align-items:center; gap:0.75rem;">
        <button type="button" class="btn btn-sm btn-outline d-lg-none py-1 px-2 me-1" onclick="toggleMobileChat(false)" title="Back to Messages">&larr; Back</button>
        <img src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?auto=format&fit=crop&w=80&q=80" class="avatar avatar-sm">
        <div>
          <div style="font-weight:700; font-size:0.95rem; color:var(--gray-900);">Reshe Clinic</div>
          <div style="font-size:0.75rem; color:var(--success-main); font-weight:600;">● Online &bull; Weight Loss Awareness Campaign</div>
        </div>
      </div>

      <div>
        <button onclick="showToast('Calling brand representative...')" class="btn btn-icon btn-outline" title="Call">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        </button>
      </div>
    </div>

    <!-- MESSAGES AREA -->
    <div class="chat-messages" id="chatMessages">
      <div class="message-bubble message-received">
        <p>Hi Priya! Welcome to the Weight Loss Awareness campaign. We sent your appointment voucher to your registered email.</p>
        <div style="font-size:0.7rem; color:var(--gray-500); margin-top:4px;">10:30 AM</div>
      </div>

      <div class="message-bubble message-sent">
        <p>Thank you! I received the voucher and scheduled my visit for Thursday. I will share the video script outline tomorrow morning.</p>
        <div style="font-size:0.7rem; opacity:0.8; text-align:right; margin-top:4px;">10:35 AM</div>
      </div>

      <div class="message-bubble message-received">
        <p>We reviewed your reel draft! The tone and visuals look fantastic. Please go ahead and publish on Instagram.</p>
        <div style="font-size:0.7rem; color:var(--gray-500); margin-top:4px;">10:42 AM</div>
      </div>
    </div>

    <!-- CHAT COMPOSER -->
    <form class="chat-composer" id="chatForm">
      <button type="button" onclick="showToast('Attachment uploaded')" class="btn btn-icon btn-outline" title="Attach file">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
      </button>
      <input type="text" id="chatInput" class="form-control" placeholder="Type your message..." required style="flex:1;">
      <button type="submit" class="btn btn-primary">Send &rarr;</button>
    </form>
  </div>

</div>

<?= $this->endSection() ?>
