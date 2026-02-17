import { navbar_showhide } from "./modules/hamburger.js";
import { contactForm} from "./modules/contactForm.js";


navbar_showhide();

if(document.body.dataset.page === "home") {
console.log('welcome home');

}else if(document.body.dataset.page === "contact") {
console.log('Contact us!');
}