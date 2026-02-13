new WOW().init();

// 1. Select the elements
const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const num = document.querySelector(".num");

// 2. Wrap the logic in an IF check to see if 'num' exists
if (num) {
    window.addEventListener("load", () => {
        if (localStorage["num"]) {
            num.innerText = localStorage.getItem("num");
        } else {
            let a = "01";
            num.innerText = a;
        }
    });
}

// 3. Check for plus/minus buttons before adding listeners
if (plus && num) {
    plus.addEventListener("click", () => {
        let a = num.innerText; // Use 'let' to avoid global scope errors
        a++;
        a = (a < 10) ? "0" + a : a;
        localStorage.setItem("num", a);
        num.innerText = localStorage.getItem("num");
    });
}

if (minus && num) {
    minus.addEventListener("click", () => {
        let a = num.innerText;
        if (a > 1) {
            a--;
            a = (a < 10) ? "0" + a : a;
            localStorage.setItem("num", a);
            num.innerText = localStorage.getItem("num");
        }
    });
}

// jQuery Sub-menu logic (jQuery handles 'null' automatically, so this is safe)
$(".sub-menu ul").hide();
$(".sub-menu a").click(function () {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-angle-up fa-angle-down");
});

// Back to Top Logic
let mybutton = document.getElementById("myBtn");

window.onscroll = function () {
    if (mybutton) { // Safety check
        scrollFunction();
    }
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'}); // Modern smooth scroll
}

// Meanmenu
if ($.isFunction($.fn.meanmenu)) {
    $('.mean-menulist').meanmenu({
        meanMenuContainer: '.mobile-menu',
    });
}