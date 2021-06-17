let controller = new  ScrollMagic.Controller();
let timeline = new TimelineMax();

timeline
   
    .fromTo(".bg", 3, {y: -50 }, { y:0, duration: 3 }, "-=3")
    .to(".content", 3, {top: "0%" }, "-=3")
    .fromTo(".content-images", {opacity:0}, {opacity:1, duration: 3})
    .fromTo(".text", {opacity:0}, {opacity:1, duration:3})
    .fromTo(".carousel-container", {opacity:0}, {opacity:1, duration:3});

    
    let scene = new ScrollMagic.Scene({
        triggerElement: "section",
        duration: "200%",
        triggerHook: 0,
    })
        .setTween(timeline)
        .setPin("section")
        .addTo(controller);


       
       
        // Image Gallery


const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");


//Button

const prevBtn = document.querySelector("#prevBtn");
const nextBtn = document.querySelector("#nextBtn");


//Counter

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";

//button listners

nextBtn.addEventListener("click", () => {

    if(counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});


prevBtn.addEventListener("click", () => {

    if (counter <= 0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});

carouselSlide.addEventListener("transitionend", () => {
    
    if (carouselImages[counter].id === "lastclone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -2 ;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";

    }

    if (carouselImages[counter].id === "firstclone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - counter;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
});