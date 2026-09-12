/**
 * COLLABHUB INTERACTIVE JAVASCRIPT ENGINE
 * Handles Modals, Tabs, Multi-step Wizards, Chat simulation, Notifications, and Filters.
 */

document.addEventListener('DOMContentLoaded', () => {
  initModals();
  initTabs();
  initDropdowns();
  initWizards();
  initChat();
  initCharts();
  initSidebarToggle();
});

/* GLOBAL MOBILE SIDEBAR DRAWER CONTROLLERS */
function openMobileSidebar(e) {
  if (e && e.stopPropagation) e.stopPropagation();
  const sidebar = document.querySelector('.app-sidebar');
  let overlay = document.querySelector('.sidebar-overlay');
  if (!overlay) {
    overlay = document.createElement('div');
    overlay.className = 'sidebar-overlay';
    document.body.appendChild(overlay);
    overlay.addEventListener('click', closeMobileSidebar);
  }
  if (sidebar) sidebar.classList.add('show');
  if (overlay) overlay.classList.add('active');
}

function closeMobileSidebar(e) {
  if (e && e.stopPropagation) e.stopPropagation();
  const sidebar = document.querySelector('.app-sidebar');
  const overlay = document.querySelector('.sidebar-overlay');
  if (sidebar) sidebar.classList.remove('show');
  if (overlay) overlay.classList.remove('active');
}

function initSidebarToggle() {
  const toggleBtns = document.querySelectorAll('.sidebar-toggle-btn');
  const closeBtns = document.querySelectorAll('.sidebar-close-btn');
  const sidebarLinks = document.querySelectorAll('.sidebar-link');

  toggleBtns.forEach(btn => {
    btn.onclick = openMobileSidebar;
  });

  closeBtns.forEach(btn => {
    btn.onclick = closeMobileSidebar;
  });

  sidebarLinks.forEach(link => {
    link.addEventListener('click', closeMobileSidebar);
  });
}

/* MODAL SYSTEM */
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = 'auto';
  }
}

function initModals() {
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        overlay.classList.remove('active');
        document.body.style.overflow = 'auto';
      }
    });
  });
}

/* TAB NAVIGATION SYSTEM */
function initTabs() {
  document.querySelectorAll('.tab-container').forEach(container => {
    const tabs = container.querySelectorAll('.tab-link');
    const panes = container.querySelectorAll('.tab-pane');

    tabs.forEach(tab => {
      tab.addEventListener('click', (e) => {
        e.preventDefault();
        const target = tab.dataset.tab;

        tabs.forEach(t => {
          t.classList.remove('active');
          if (t.classList.contains('btn')) {
            t.classList.remove('btn-primary');
            t.classList.add('btn-outline');
          }
        });

        panes.forEach(p => p.classList.remove('active'));

        tab.classList.add('active');
        if (tab.classList.contains('btn')) {
          tab.classList.remove('btn-outline');
          tab.classList.add('btn-primary');
        }

        const targetPane = container.querySelector('#' + target);
        if (targetPane) targetPane.classList.add('active');
      });
    });
  });
}

/* DROPDOWNS & NOTIFICATIONS */
function initDropdowns() {
  document.querySelectorAll('[data-toggle="dropdown"]').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.stopPropagation();
      const targetId = trigger.dataset.target;
      const menu = document.getElementById(targetId);
      if (menu) {
        menu.classList.toggle('active');
      }
    });
  });

  document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-menu.active').forEach(m => m.classList.remove('active'));
  });
}

/* MULTI-STEP WIZARD ENGINE */
let currentWizardStep = 1;

function goToWizardStep(stepNumber) {
  const steps = document.querySelectorAll('.wizard-step-content');
  const indicators = document.querySelectorAll('.wizard-step');

  steps.forEach((step, idx) => {
    if (idx + 1 === stepNumber) {
      step.style.display = 'block';
    } else {
      step.style.display = 'none';
    }
  });

  indicators.forEach((ind, idx) => {
    if (idx + 1 === stepNumber) {
      ind.classList.add('active');
    } else if (idx + 1 < stepNumber) {
      ind.classList.remove('active');
      ind.classList.add('completed');
    } else {
      ind.classList.remove('active', 'completed');
    }
  });

  currentWizardStep = stepNumber;
}

function nextWizardStep() {
  goToWizardStep(currentWizardStep + 1);
}

function prevWizardStep() {
  if (currentWizardStep > 1) {
    goToWizardStep(currentWizardStep - 1);
  }
}

function initWizards() {
  if (document.querySelector('.wizard-steps')) {
    goToWizardStep(1);
  }
}

/* CHAT SIMULATION & MOBILE RESPONSIVE TOGGLE */
function toggleMobileChat(showMain = true) {
  const wrapper = document.querySelector('.chat-wrapper');
  if (wrapper) {
    if (showMain) {
      wrapper.classList.add('active-chat');
    } else {
      wrapper.classList.remove('active-chat');
    }
  }
}

function initChat() {
  const chatItems = document.querySelectorAll('.chat-item');
  chatItems.forEach(item => {
    item.addEventListener('click', () => {
      chatItems.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      toggleMobileChat(true);
    });
  });

  const composerForm = document.getElementById('chatForm');
  if (composerForm) {
    composerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = document.getElementById('chatInput');
      const text = input.value.trim();
      if (!text) return;

      const chatMessages = document.getElementById('chatMessages');
      const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

      const msgHtml = `
        <div class="message-bubble message-sent">
          <p>${escapeHtml(text)}</p>
          <div style="font-size:0.7rem; opacity:0.8; text-align:right; margin-top:4px;">${time}</div>
        </div>
      `;
      chatMessages.insertAdjacentHTML('beforeend', msgHtml);
      input.value = '';
      chatMessages.scrollTop = chatMessages.scrollHeight;

      // Simulated auto reply after 1.2s
      setTimeout(() => {
        const replyHtml = `
          <div class="message-bubble message-received">
            <p>Thanks for the update! We are currently reviewing your deliverable submission.</p>
            <div style="font-size:0.7rem; color:#64748B; margin-top:4px;">${time}</div>
          </div>
        `;
        chatMessages.insertAdjacentHTML('beforeend', replyHtml);
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 1200);
    });
  }
}

/* SEARCH FILTER SIMULATOR */
function filterMarketplaceCards(query, category) {
  const cards = document.querySelectorAll('.marketplace-card');
  cards.forEach(card => {
    const title = card.getAttribute('data-title') || '';
    const cat = card.getAttribute('data-category') || '';
    const matchQuery = !query || title.toLowerCase().includes(query.toLowerCase());
    const matchCat = !category || category === 'all' || cat === category;

    if (matchQuery && matchCat) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}

/* SIMPLE SVG / CANVAS CHARTS */
function initCharts() {
  const canvas = document.getElementById('analyticsChart');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  const width = canvas.parentElement.clientWidth || 600;
  canvas.width = width;
  canvas.height = 240;

  // Render smooth line chart
  const points = [15, 28, 42, 38, 65, 80, 72, 95, 110, 105, 140, 160];
  const step = width / (points.length - 1);

  ctx.clearRect(0, 0, width, 240);

  // Grid lines
  ctx.strokeStyle = '#F1F5F9';
  ctx.lineWidth = 1;
  for (let i = 0; i <= 4; i++) {
    const y = 20 + i * 45;
    ctx.beginPath();
    ctx.moveTo(0, y);
    ctx.lineTo(width, y);
    ctx.stroke();
  }

  // Gradient fill
  const gradient = ctx.createLinearGradient(0, 0, 0, 240);
  gradient.addColorStop(0, 'rgba(124, 58, 237, 0.25)');
  gradient.addColorStop(1, 'rgba(124, 58, 237, 0.0)');

  ctx.beginPath();
  ctx.moveTo(0, 200 - points[0]);
  for (let i = 1; i < points.length; i++) {
    const x = i * step;
    const y = 200 - points[i];
    ctx.lineTo(x, y);
  }
  ctx.lineTo(width, 240);
  ctx.lineTo(0, 240);
  ctx.closePath();
  ctx.fillStyle = gradient;
  ctx.fill();

  // Draw stroke
  ctx.beginPath();
  ctx.moveTo(0, 200 - points[0]);
  for (let i = 1; i < points.length; i++) {
    const x = i * step;
    const y = 200 - points[i];
    ctx.lineTo(x, y);
  }
  ctx.strokeStyle = '#7C3AED';
  ctx.lineWidth = 3;
  ctx.stroke();
}

/* HELPER UTILS */
function escapeHtml(text) {
  return text.replace(/&/g, "&amp;")
             .replace(/</g, "&lt;")
             .replace(/>/g, "&gt;")
             .replace(/"/g, "&quot;");
}

function showToast(message, type = 'success') {
  const toast = document.createElement('div');
  toast.className = `toast toast-${type}`;
  toast.style.cssText = `
    position: fixed; bottom: 24px; right: 24px; z-index: 300;
    padding: 12px 20px; border-radius: 12px; background: #0F172A; color: white;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2); font-weight: 500; font-size: 0.9rem;
    display: flex; align-items: center; gap: 8px; animation: modalSlideUp 0.2s ease;
  `;
  toast.innerHTML = `<span>✓</span> <div>${message}</div>`;
  document.body.appendChild(toast);
  setTimeout(() => {
    toast.remove();
  }, 3500);
}
