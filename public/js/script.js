var submenu_pro = document.getElementById("pro-submenu");
var show_submenu_pro = document.getElementById("show-pro-submenu");

// Variable to keep track of the menu visibility
var isVisible = false;

// Toggle the submenu on clicking the "Our product" link
submenu_pro.addEventListener("click", function(event) {
    event.stopPropagation(); // Prevents the click from bubbling up to the document
    if (!isVisible) {
        show_submenu_pro.style.display = 'flex';
        isVisible = true;
    } else {
        show_submenu_pro.style.display = 'none';
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
