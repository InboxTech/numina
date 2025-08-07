// home page Journey section
var swiper = new Swiper(".journeySwiper", {
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

// home page Comunity section
var swiper = new Swiper(".comunitySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  // centeredSlides: true,
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
  hoverElement.addEventListener("mouseenter", function () {
    product_details.forEach((detail) => (detail.style.display = "none")); // Hide all product details
    product_details[index].style.display = "block"; // Show the relevant product detail
  });

  hoverElement.addEventListener("mouseleave", function () {
    product_details[index].style.display = "none"; // Optionally hide the detail again when mouse leaves
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

const viewMoreLinks = document.querySelectorAll(".view-more");
const moreTexts = document.querySelectorAll(".more-text");
const proCategories = document.querySelectorAll(
  ".products .product-categories"
);

// Iterate over each link and corresponding "More Text" element
viewMoreLinks.forEach((viewMore, index) => {
  const moreText = moreTexts[index]; // Get the corresponding moreText element for this index
  const productCategory = proCategories[index]; // Get the corresponding product category container for this index

  viewMore.addEventListener("click", function () {
    // Toggle the visibility of the extra text
    moreText.classList.toggle("show");

    // Change the link text based on whether it's shown or not
    if (moreText.classList.contains("show")) {
      viewMore.textContent = "View Less";

      // Increase the height of the product category container when expanded
      productCategory.style.height = "62vh"; // Allow it to expand based on content height
    } else {
      viewMore.textContent = "View More";

      // Set the height back to the initial value (you can adjust this as needed)
      productCategory.style.height = "30vh"; // Restore the original height
    }
  });
});

// contact us page form validation
$(".formValidate").validate({
  rules: {
    firstname: {
      required: true,
    },
    lastname: {
      required: true,
    },
    email: {
      required: true,
    },
    phone: {
      required: true,
    },
    msg: {
      required: true,
    },
  },
  messages: {
    firstname: {
      required: "please enter firstname",
    },
    lastname: {
      required: "Please enter lastname",
    },
    email: {
      required: "Please enter email",
    },
    phone: {
      required: "Please enter phone",
    },
    msg: {
      required: "Please enter comment",
    },
  },
});

var swiper = new Swiper(".medicineSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
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

    425: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1200:{
      slidesPerView: 4,
      spaceBetween: 20,
    },
    
  },
});