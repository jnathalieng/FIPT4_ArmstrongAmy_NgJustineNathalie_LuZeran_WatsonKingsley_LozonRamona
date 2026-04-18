import { navbar_showhide } from "./modules/hamburger.js";
import { navDropDown } from "./modules/navDropDown.js";
import contactForm from "./modules/contactForm.js";
import commForm from "./modules/comm.js";
import commThree from "./modules/comm-three.js";
import commFour from "./modules/comm-four.js";
import eventsManager from "./modules/eventsManager.js";
import galleryManager from './modules/galleryManager.js';
import eventsFormAdd from "./modules/eventsFormAdd.js";
import eventsFormEdit from "./modules/eventsFormEdit.js";
import gallery from "./modules/gallery.js";
import blog from "./modules/blog.js";
import blogFormAdd from "./modules/blogFormAdd.js";
import blogFormEdit from "./modules/blogFormEdit.js";
import blogManager from "./modules/blogManager.js";
import commManager from "./modules/commManager.js";
import commFormAdd from "./modules/commFormAdd.js";
import commFormEdit from "./modules/commFormEdit.js";
import { createApp } from 'vue';
import { mapScroll } from "./modules/mapScroll.js";
import { mapAnimation } from "./modules/mapAnimation.js";
import { mapHotSpots } from "./modules/mapHotSpots.js";
import { footerSearch } from "./modules/footer.js";
// import { dossierOpen } from "./modules/dossierOpen.js";
import { typeWriter } from "./modules/typeWriter.js";
import { commShowHide } from "./modules/commShowHide.js";
import { parallaxObj } from "./modules/tlParallaxObj.js";
import { videoQuery } from "./modules/hpVideoQuery.js";
import { tlImgTextReveal } from "./modules/tlImgTextReveal.js";
import { tlShowSticky } from "./modules/tlShowSticky.js";
import { tlScrollProgress } from "./modules/tlScrollProgress.js";
import { tlMarkerScaling } from "./modules/tlMarkerScaling.js";
import { tlScrollTo } from "./modules/tlScrollTo.js";
import { tlSVG } from "./modules/tlSVG.js";

navbar_showhide();
navDropDown();
footerSearch();

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
    tlSVG();
    // tlScrollProgress();
}
else if(document.body.dataset.page === "trainingBases") {
    console.log('welcome to boot camp!');

    videoQuery();
    
    mapScroll();
    mapAnimation();
    mapHotSpots();
}
else if(document.body.dataset.page === "BOB") {
    console.log('the battle for britain!');
    
    videoQuery();
    
    typeWriter();
    // dossierOpen();
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
}
else if(document.body.dataset.page === "events-manager") {
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
    const blogData = JSON.parse(document.querySelector('#blog-app').dataset.blog);
    console.log(blogData);
    const app = createApp({...blog,
                                data() {
                                    return {
                                        ...blog.data(),
                                        currentBlog: blogData,
                                        isPostPage: true,
                                    }
                                } 
                            });
    app.mount('#blog-app');
}
else if(document.body.dataset.page === "blog-manager") {
    console.log('welcome to the blog manager');
    const app = createApp(blogManager);
    app.mount('#blog-manager-app');
}
else if(document.body.dataset.page === "blog-add") {
    const app = createApp(blogFormAdd);
    app.mount('#blog-form-add');
}
else if(document.body.dataset.page === "blog-edit") {
    const app = createApp(blogFormEdit);
    app.mount('#blog-form-edit');
}
else if (document.body.dataset.page === "gallery-manager") {
    console.log('welcome to the gallery manager');
    const app = createApp(galleryManager);
    app.mount('#gallery-manager-app');
}
else if(document.body.dataset.page === "comm-manager") {
    console.log('manage Commemorations');
    const app = createApp(commManager);
    app.mount('#comm-manager-app');
}
else if (document.body.dataset.page === "comm-manager-add") {
    console.log('add commemoration entry');
    const app = createApp(commFormAdd);
    app.mount('#comm-form-add');
}
else if (document.body.dataset.page === "comm-manager-edit") {
    console.log('edit commemoration entry');
    const app = createApp(commFormEdit);
    app.mount('#comm-form-edit');
}