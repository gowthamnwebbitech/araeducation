// Horizontal scroll with arrow buttons
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");
const menu = document.querySelector(".horizontal-menu");

// 1. Arrow Button Listeners - ONLY run if arrows and menu exist
if (leftArrow && rightArrow && menu) {
    leftArrow.addEventListener("click", () => {
        menu.scrollBy({ left: -100, behavior: "smooth" });
    });

    rightArrow.addEventListener("click", () => {
        menu.scrollBy({ left: 100, behavior: "smooth" });
    });

    // Show/hide arrows based on scroll position
    menu.addEventListener("scroll", () => {
        leftArrow.style.display = menu.scrollLeft === 0 ? "none" : "block";
        
        if (menu.scrollLeft + menu.clientWidth >= menu.scrollWidth - 1) {
            rightArrow.style.display = "none";
        } else {
            rightArrow.style.display = "block";
        }
    });

    // Initial check for arrows visibility on load
    window.addEventListener("load", () => {
        if (menu.scrollWidth <= menu.clientWidth) {
            leftArrow.style.display = "none";
            rightArrow.style.display = "none";
        } else {
            leftArrow.style.display = "none"; // Start at 0, so left is hidden
            rightArrow.style.display = "block";
        }
    });
}

// 2. Smooth scroll to section - ONLY run if menu items exist
document.querySelectorAll(".menu-item").forEach((item) => {
    item.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        const target = document.querySelector(href);
        
        if (target) { // Safety check for the target section
            e.preventDefault();
            window.scrollTo({
                top: target.offsetTop - 200,
                behavior: "smooth",
            });
        }
    });
});

// 3. Change active menu item on scroll
window.addEventListener("scroll", function () {
    let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    const sections = document.querySelectorAll(".section-tab");

    if (sections.length > 0) {
        sections.forEach((section) => {
            if (
                scrollPosition >= section.offsetTop - 205 &&
                scrollPosition < section.offsetTop + section.offsetHeight
            ) {
                document.querySelectorAll(".menu-item").forEach((item) => item.classList.remove("active"));
                
                const activeItem = document.querySelector(`.menu-item[href="#${section.id}"]`);
                if (activeItem) {
                    activeItem.classList.add("active");
                    scrollToActiveMenuItem(activeItem);
                }
            }
        });
    }
});

// 4. Function to scroll the menu to ensure the active item is visible
function scrollToActiveMenuItem(activeItem) {
    const menu = document.querySelector(".horizontal-menu");
    if (!menu || !activeItem) return; // Safety check

    const menuRect = menu.getBoundingClientRect();
    const activeItemRect = activeItem.getBoundingClientRect();

    if (activeItemRect.left < menuRect.left || activeItemRect.right > menuRect.right) {
        const offset = activeItemRect.left - menuRect.left;
        menu.scrollBy({ left: offset, behavior: "smooth" });
    }
}

// 5. Horizontal scroll with arrow keys
window.addEventListener("keydown", function (e) {
    const menu = document.querySelector(".horizontal-menu");
    if (!menu) return; // Safety check

    if (e.key === "ArrowRight") {
        menu.scrollBy({ left: 100, behavior: "smooth" });
    } else if (e.key === "ArrowLeft") {
        menu.scrollBy({ left: -100, behavior: "smooth" });
    }
});