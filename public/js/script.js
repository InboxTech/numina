
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
        caretIcon.classList.remove('fa-caret-up'); // Remove the up caret
        caretIcon.classList.add('fa-caret-down'); 
        isVisible = false;
    }
});

//main page swiper
var swiper = new Swiper(".section2Swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1.6,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 1.9,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 2.5,
      spaceBetween: 60,
    },
    1440: {
      slidesPerView: 4,
      // spaceBetween: 70,
    },
  },
});

var swiper = new Swiper(".section3Swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1.6,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 1.9,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 2.5,
      spaceBetween: 60,
    },
    1440: {
      slidesPerView: 4,
      spaceBetween: 70,
    },
  },
});

var swiper = new Swiper(".section4Swiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  // pagination: {
  //   el: ".swiper-pagination",
  //   type: "progressbar",
  // },
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev",
  // },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
  },
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
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
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



  
  const viewMoreLinks = document.querySelectorAll('.view-more');
const moreTexts = document.querySelectorAll('.more-text');
const proCategories = document.querySelectorAll('.products .product-categories');

// Iterate over each link and corresponding "More Text" element
viewMoreLinks.forEach((viewMore, index) => {
  const moreText = moreTexts[index]; // Get the corresponding moreText element for this index
  const productCategory = proCategories[index]; // Get the corresponding product category container for this index
  
  viewMore.addEventListener('click', function() {
    // Toggle the visibility of the extra text
    moreText.classList.toggle('show');

    // Change the link text based on whether it's shown or not
    if (moreText.classList.contains('show')) {
      viewMore.textContent = 'View Less';
      
      // Increase the height of the product category container when expanded
      productCategory.style.height = '62vh';  // Allow it to expand based on content height
    } else {
      viewMore.textContent = 'View More';
      
      // Set the height back to the initial value (you can adjust this as needed)
      productCategory.style.height = '30vh';  // Restore the original height
    }
  });
});

  

$(".formValidate").validate({
  rules: {
    firstname: {
      required: true
    },
    lastname: {
      required: true
    },
    email: {
      required: true
    },
    phone: {
      required: true
    },
    msg: {
      required: true
    }
  },
  messages: {
    firstname: {
      required: "please enter firstname"
    },
    lastname: {
      required: "Please enter lastname"
    },
    email: {
      required: "Please enter email"
    },
    phone: {
      required: "Please enter phone"
    },
    msg: {
      required: "Please enter comment"
    }
  }
})