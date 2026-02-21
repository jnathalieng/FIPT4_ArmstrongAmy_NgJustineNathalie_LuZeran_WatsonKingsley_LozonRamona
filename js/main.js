import { navbar_showhide } from "./modules/hamburger.js";
import { contactForm } from "./modules/contactForm.js";
import { mapScroll } from "./modules/mapScroll.js";
import { dossierOpen } from "./modules/dossierOpen.js";


navbar_showhide();

if(document.body.dataset.page === "home") {
    console.log('welcome home');
}
else if(document.body.dataset.page === "timeline") {
    console.log('a journey through time!');
}
else if(document.body.dataset.page === "trainingBases") {
    console.log('welcome to boot camp!');
    mapScroll();
}
else if(document.body.dataset.page === "BOB") {
    console.log('the battle for britain!');
    dossierOpen();
}
else if(document.body.dataset.page === "canteen") {
    console.log('drink up!');
}
else if(document.body.dataset.page === "commemmoration") {
    console.log('lest we forget');
}
else if(document.body.dataset.page === "events") {
    console.log('see whats happening!');
}
else if(document.body.dataset.page === "contact") {
    console.log('Contact us!');
    contactForm();
}