// Show or hide the "Back to Top" link based on scroll position
window.addEventListener('scroll', function () {
  const backToTop = document.getElementById('link_to_top_div');
  if (window.scrollY >= 1) { 
    backToTop.style.display = 'flex';
  } else {
    backToTop.style.display = 'none';
  }
});