var submenu_pro = document.getElementById("pro-submenu");
var show_submenu_pro = document.getElementById("show-pro-submenu");
var hideTimeout;  // Variable to store the timeout

// Show submenu when hovering over "Our product" link
submenu_pro.addEventListener("mouseenter", function() {
    clearTimeout(hideTimeout);  // Clear any previous hide timeout
    show_submenu_pro.style.display = 'flex';
});

// Hide submenu with a slight delay to smooth the hover effect
submenu_pro.addEventListener("mouseleave", function() {
    hideTimeout = setTimeout(function() {
        show_submenu_pro.style.display = 'none';
    }, 200);  // Delay of 200ms
});

// Keep submenu visible when hovering over the submenu itself
show_submenu_pro.addEventListener("mouseenter", function() {
    clearTimeout(hideTimeout);  // Prevent hiding when hovering over the submenu
    show_submenu_pro.style.display = 'flex';
});

// Hide submenu when mouse leaves the submenu, with the same delay
show_submenu_pro.addEventListener("mouseleave", function() {
    hideTimeout = setTimeout(function() {
        show_submenu_pro.style.display = 'none';
    }, 200);  // Delay of 200ms
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
