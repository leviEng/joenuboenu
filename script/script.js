// JavaScript to display word when image is clicked
document.querySelectorAll('.image-grid img').forEach(image => {
    image.addEventListener('click', function() {
      alert(this.getAttribute('data-word'));
    });
  });