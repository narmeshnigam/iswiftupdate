/*
 * iSwift Website JavaScript
 *
 * Currently responsible for toggling the mobile navigation menu on
 * smaller screens. Additional interactive behaviours (e.g. form
 * validation, accordions) can be added here in future versions.
 */
document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.querySelector('.hamburger');
  var nav = document.querySelector('header nav');
  if (hamburger && nav) {
    hamburger.addEventListener('click', function () {
      nav.classList.toggle('open');
      hamburger.classList.toggle('active');
    });
  }
});