import './bootstrap';
import '../sass/app.scss'
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'tippy.js/dist/tippy.css';

import tippy from 'tippy.js';

// Import the styles for tooltips


// Initialize tooltips
document.addEventListener('DOMContentLoaded', () => {
  tippy('[data-tippy-content]', {
    // Customize the tooltip options here
  });
});