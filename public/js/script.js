var submenu_pro = document.getElementById("pro-submenu");
var show_submenu_pro = document.getElementById("show-pro-submenu");

// Variable to keep track of the menu visibility
var isVisible = false;

submenu_pro.addEventListener("click", function() {
    // Toggle between show and hide on a single click
    if (!isVisible) {
        show_submenu_pro.style.display = 'flex';
        isVisible = true;
    } else {
        show_submenu_pro.style.display = 'none';
        isVisible = false;
    }
});

// Optional: If you still want to add a double-click event
// submenu_pro.addEventListener("dblclick", function() {
//     show_submenu_pro.style.display = 'none';
//     isVisible = false; // Ensure the visibility state is reset
// });


// var link_hover = document.querySelectorAll(".link-hover-animation");
// var product_details = document.querySelectorAll(".product-details");

// for(var i= 0; i <= 11; i++){
//     link_hover[i].addEventListener('mouseenter', function(){
//         product_details[i].classList.remove('d-none');
//     })
// }

var link_hover = document.querySelectorAll(".link-hover-animation");
var product_details = document.querySelectorAll(".product-details");

link_hover.forEach((hoverElement, index) => {
    hoverElement.addEventListener('mouseenter', function() {
        product_details.forEach(detail => detail.classList.add('d-none'));  // Hide all product details
        product_details[index].classList.remove('d-none');  // Show the relevant product detail
    });

    hoverElement.addEventListener('mouseleave', function() {
        product_details[index].classList.add('d-none');  // Optionally hide the detail again when mouse leaves
    });
});

// about us banner swiper start

// var swiper = new Swiper(".mybannerSwiper", {
//     spaceBetween: 30,
//     effect: "fade",
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//   });

  // about us banner swiper end