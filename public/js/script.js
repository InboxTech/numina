
var submenu_pro = document.getElementById("pro-submenu");
var show_submenu_pro = document.getElementById("show-pro-submenu");
var caretIcon = document.getElementById("caret-icon"); // Get the caret icon element
// Variable to keep track of the menu visibility
var isVisible = false;

// Toggle the submenu on clicking the "Our product" link
submenu_pro.addEventListener("click", function(event) {
    event.stopPropagation(); // Prevents the click from bubbling up to the document
    if (!isVisible) {
        show_submenu_pro.style.display = 'flex';
        caretIcon.classList.remove('fa-caret-down'); // Remove the down caret
        caretIcon.classList.add('fa-caret-up'); // Add the up caret
        isVisible = true;
    } else {
        show_submenu_pro.style.display = 'none';
        caretIcon.classList.remove('fa-caret-up'); // Remove the up caret
        caretIcon.classList.add('fa-caret-down'); // Add the down caret
        isVisible = false;
    }

});

// Function to hide the submenu when clicking outside of it
document.addEventListener("click", function(event) {
    var isClickInside = submenu_pro.contains(event.target) || show_submenu_pro.contains(event.target);

    if (!isClickInside && isVisible) {
        show_submenu_pro.style.display = 'none';
        isVisible = false;
    }
});

// Handling hover events for showing product details
var link_hover = document.querySelectorAll(".link-hover-animation");
var product_details = document.querySelectorAll(".product-details");

link_hover.forEach((hoverElement, index) => {
    hoverElement.addEventListener('mouseenter', function() {
        product_details.forEach(detail => detail.style.display = 'none');  // Hide all product details
        product_details[index].style.display = 'block';  // Show the relevant product detail
    });

    hoverElement.addEventListener('mouseleave', function() {
        product_details[index].style.display = 'none';  // Optionally hide the detail again when mouse leaves
    });
});

// swiper of product page
var swiper = new Swiper(".myProductSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });

  // Animation On Scroll library 
  AOS.init({
    duration: 2000,
  });