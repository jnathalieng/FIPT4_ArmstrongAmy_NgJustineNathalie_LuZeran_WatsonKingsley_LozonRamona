import { navbar_showhide } from "./modules/hamburger.js";
import { contactForm } from "./modules/contactForm.js";
import { mapScroll } from "./modules/mapScroll.js";
import { dossierOpen } from "./modules/dossierOpen.js";
import { typeWriter } from "./modules/typeWriter.js";
import { tlShowHide } from "./modules/tlShowHide.js";
import { commShowHide } from "./modules/commShowHide.js";

import { tlShowSticky } from "./modules/tlShowSticky.js";

navbar_showhide();

if(document.body.dataset.page === "home") {
    console.log('welcome home');
}
else if(document.body.dataset.page === "timeline") {
    console.log('a journey through time!');
    tlShowHide();
}
else if(document.body.dataset.page === "TIMELINE-RECON") {
    console.log('recon page');
    tlShowSticky();
}
else if(document.body.dataset.page === "trainingBases") {
    console.log('welcome to boot camp!');
    mapScroll();
}
else if(document.body.dataset.page === "BOB") {
    console.log('the battle for britain!');
    typeWriter();
    dossierOpen();
}
else if(document.body.dataset.page === "canteen") {
    console.log('drink up!');
}
else if(document.body.dataset.page === "commemmoration") {
    console.log('lest we forget');
    commShowHide();
}
else if(document.body.dataset.page === "events") {
    console.log('see whats happening!');
}
else if(document.body.dataset.page === "contact") {
    console.log('Contact us!');
    contactForm();
}