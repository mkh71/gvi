// window.addEventListener("load", () => {
//      autoSlide();
// })

// function autoSlide() {
//      const startSlide = setInterval(() => {
//           slide(getItemActiveIndex() + 1);
//      }, 2000);
// }


// SLIDER
let initInterval;

function slide(toIndex, section) {
     const slideSection = document.getElementById(section);
     const itemsArray = Array.from(slideSection.querySelectorAll(".slide_item"));
     const itemActive = slideSection.querySelector(".slide_item_active");
     const pagIcon = slideSection.querySelectorAll(".pagination_icon");

     if (toIndex >= itemsArray.length) {
          toIndex = 0;
     }

     if (toIndex > 0) {
          pagIcon[toIndex - 1].classList.remove("pagination_active")
     } else {
          pagIcon[pagIcon.length - 1].classList.remove("pagination_active")
     }

     pagIcon[toIndex].classList.add("pagination_active");

     const newItemActive = itemsArray[toIndex];
     newItemActive.classList.add("slide_item_pos_next");
     setTimeout(() => {
          newItemActive.classList.add("slide_item_next");
          itemActive.classList.add("slide_item_next");
     }, 20);

     newItemActive.addEventListener("transitionend", () => {
          itemActive.className = "slide_item";
          newItemActive.className = "slide_item slide_item_active";
     }, {
          once: true
     });
}

function getItemActiveIndex(section) {
     const slideSection = document.getElementById(section);
     const itemsArray = Array.from(slideSection.querySelectorAll(".slide_item"));
     const itemActive = slideSection.querySelector(".slide_item_active");
     const itemActiveIndex = itemsArray.indexOf(itemActive);
     return itemActiveIndex;
}

function pagination(section) {
     const slideSection = document.getElementById(section);
     const itemsArray = Array.from(slideSection.querySelectorAll(".slide_item"));
     const paginationDiv = slideSection.querySelector(".slider_pagination");

     paginationDiv.innerHTML = "";

     for (let y = 0; y < itemsArray.length; y++) {
          const newPagIcon = document.createElement("div");
          newPagIcon.className = "pagination_icon";
          paginationDiv.append(newPagIcon);
     }
}

function slider(section) {
     const sliderSection = document.getElementById(section);

     pagination(section);
     if (!initInterval) {
          initInterval = setInterval(() => {
               slide(getItemActiveIndex(section) + 1, section);
          }, 1500);
     }

     sliderSection.addEventListener('mouseleave', () => {
          clearInterval(initInterval);
          initInterval = null;
     })

}


// SCROLLER
function scroller(section) {
     const scrollSection = document.getElementById(section);
     const scrollContainer = scrollSection.querySelectorAll('.scroll_container');
     const scrollItem = scrollSection.querySelector('.scroll_item');
     const nxtBtn = scrollSection.querySelectorAll('.nxt_btn');
     const preBtn = scrollSection.querySelectorAll('.pre_btn');

     scrollContainer.forEach((item, i) => {
          let containerDimensions = scrollItem.getBoundingClientRect();
          let containerWidth = containerDimensions.width;

          nxtBtn[i].addEventListener('click', () => {
               item.scrollLeft += containerWidth;
          })

          preBtn[i].addEventListener('click', () => {
               item.scrollLeft -= containerWidth;
          })
     })
}
// SCROLLER INITIALIZATION
scroller("national-section");
scroller("annual-section");
scroller("ditf-section");