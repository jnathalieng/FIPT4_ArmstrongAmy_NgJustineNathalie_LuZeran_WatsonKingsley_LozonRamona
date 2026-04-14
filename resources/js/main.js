import { navbar_showhide } from "./modules/hamburger.js";
import { navDropDown } from "./modules/navDropDown.js";

import contactForm from "./modules/contactForm.js";
import commForm from "./modules/comm.js";
import commThree from "./modules/comm-three.js";
import commFour from "./modules/comm-four.js";
<<<<<<< Updated upstream
=======
import eventsManager from "./modules/eventsManager.js";
import eventsFormAdd from "./modules/eventsFormAdd.js";
import eventsFormEdit from "./modules/eventsFormEdit.js";
>>>>>>> Stashed changes
import gallery from "./modules/gallery.js";
import blog from "./modules/blog.js";
import { createApp } from 'vue';

// Training Bases
import { mapScroll } from "./modules/mapScroll.js";
import { mapContentSlide } from "./modules/mapContentSlide.js";

import { dossierOpen } from "./modules/dossierOpen.js";
import { typeWriter } from "./modules/typeWriter.js";

import { commShowHide } from "./modules/commShowHide.js";
import { parallaxObj } from "./modules/tlParallaxObj.js";

import { videoQuery } from "./modules/hpVideoQuery.js";

import { tlImgTextReveal } from "./modules/tlImgTextReveal.js";
import { tlShowSticky } from "./modules/tlShowSticky.js";
import { tlScrollProgress } from "./modules/tlScrollProgress.js";
import { tlMarkerScaling } from "./modules/tlMarkerScaling.js";
import { tlScrollTo } from "./modules/tlScrollTo.js";

navbar_showhide();
navDropDown();

if(document.body.dataset.page === "home") {
    console.log('welcome home');
    videoQuery();
}
else if(document.body.dataset.page === "timeline") {
    console.log('recon page');

    videoQuery();

    parallaxObj();
    tlImgTextReveal();
    tlShowSticky();
    tlScrollTo();
    tlMarkerScaling();
    // tlScrollProgress();
}
else if(document.body.dataset.page === "trainingBases") {
    console.log('welcome to boot camp!');

    videoQuery();
    
    mapScroll();
    mapContentSlide();
}
else if(document.body.dataset.page === "BOB") {
    console.log('the battle for britain!');
    
    videoQuery();
    
    typeWriter();
    dossierOpen();
}
else if(document.body.dataset.page === "canteen") {
    console.log('drink up!');
}
else if(document.body.dataset.page === "comm") {
    console.log('lest we forget');

    videoQuery();

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
<<<<<<< Updated upstream
=======
} 
else if (document.body.dataset.page === "events-manager") {
    console.log("welcome to the events manager");
    const appEventsManager = createApp(eventsManager);
    appEventsManager.mount('#events-manager-app');
}
else if(document.body.dataset.page === "events-add") {
    const app = createApp(eventsFormAdd);
    app.mount('#event-form-add');
}
else if(document.body.dataset.page === "events-edit") {
    const app = createApp(eventsFormEdit);
    app.mount('#event-form-edit');
>>>>>>> Stashed changes
}
else if(document.body.dataset.page === "contact") {
    console.log('Contact us!');
    const app = createApp(contactForm);
    app.mount('#contact-form');
    console.log('Vue app mounted!');
}
else if(document.body.dataset.page === "gallery") {
    console.log('all our images!');

    const app = createApp(gallery);
    app.mount('#gallery-app');
}
else if(document.body.dataset.page === "blog") {
    console.log('learn about our research journey!');
    const app = createApp(blog);
    app.mount('#blog-app');
}
else if(document.body.dataset.page === "blog-post") {
    const blogData = JSON.parse(document.querySelector('#blog-post-app').dataset.blog);
    const app = createApp({...blog, ...{ data: () => ({ currentBlog: blogData }) }});
    app.mount('#blog-post-app');
}