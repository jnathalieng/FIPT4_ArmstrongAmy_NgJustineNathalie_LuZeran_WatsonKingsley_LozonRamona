import { navbar_showhide } from "./modules/hamburger.js";
import contactForm from "./modules/contactForm.js";
import commForm from "./modules/comm.js";
import commThree from "./modules/comm-three.js";
import commFour from "./modules/comm-four.js";
import { createApp } from 'vue';
import { mapScroll } from "./modules/mapScroll.js";
import { dossierOpen } from "./modules/dossierOpen.js";
import { typeWriter } from "./modules/typeWriter.js";

import { commShowHide } from "./modules/commShowHide.js";
import { parallaxObj } from "./modules/tlParallaxObj.js";
import { tlImgTextReveal } from "./modules/tlImgTextReveal.js";
import { tlShowSticky } from "./modules/tlShowSticky.js";
import { tlScrollProgress } from "./modules/tlScrollProgress.js";
import { tlMarkerScaling } from "./modules/tlMarkerScaling.js";

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
    parallaxObj();
    tlImgTextReveal();
    tlShowSticky();
    tlMarkerScaling();
    tlScrollProgress();
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
else if(document.body.dataset.page === "comm") {
    console.log('lest we forget');
    commShowHide();
    
    const appComm = createApp(commForm);
    appComm.mount('#comm-app');
    
    const appThree = createApp(commThree);
    appThree.mount('#comm-training-three');
    
    const appFour = createApp(commFour);
    appFour.mount('#comm-training-four');
}
else if(document.body.dataset.page === "events") {
    console.log('see whats happening!');
}
else if(document.body.dataset.page === "contact") {
    console.log('Contact us!');
    const app = createApp(contactForm);
    app.mount('#contact-form');
    console.log('Vue app mounted!');
}
else if(document.body.dataset.page === "gallery") {
    console.log('all our images!');
}