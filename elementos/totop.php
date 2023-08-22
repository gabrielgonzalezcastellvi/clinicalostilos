<button onclick="topFunction()" id="scrollToTop" title="Subir"><i class="bi bi-chevron-up"></i></button>

<script>
  let mybutton = document.getElementById("scrollToTop");

  // Show the button after the user scrolls down 20px from the top of the document
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  //clic
  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
</script>