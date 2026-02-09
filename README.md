# FIPT4_ArmstrongAmy_NgJustineNathalie_LuZeran_WatsonKingsley_LozonRamona

## 🛩️ Museum Website Project Repository

Welcome to our group project repository! This project focuses on creating a digital museum experience that presents historical content in an engaging and accessible way. The goal is to inform, educate, and share stories through a clean, interactive website experience.

## 📌 Table of Contents

About
Team
Features
Technologies
Installation

## 📖 About

This project was created as part of a collaborative academic project focused on building a museum-style website with dynamic and educational content. The site is designed to present historical information, stories, and media in a clear and engaging format, while also demonstrating modern web design and development practices.

The project also emphasizes teamwork, version control, responsive design, and content-driven user experiences.

## 👥 Meet our Team

This project was developed by a group of Level 4 Interactive Media Design students, with team members contributing across design, development, and motion components.

1. Ng, Justine Nathalie 
Role : Project Manager

2. Armstrong, Amy
Role: Graphic Designer

3. Watson, Kingsley
Role: Motion Designer

4. Lu, Zeran
Role: Front-End Developer

5. Lozon, Ramona
Role: Back-End Developer

6. Patel, Aastha
Role: UI/ UX Designer

## ✨ Features
1. Responsive layout across mobile, tablet, and desktop
2. Multi-page museum-style website structure
3. Content sections for historical information and exhibits
4. Animated and interactive UI elements
5. Organized project structure for team collaboration

## 🛠️ Technologies

Languages:
HTML5, CSS3 (SCSS), JavaScript, PHP, MySQL

Libraries / Frameworks:
GreenSock (GSAP), Fetch API

Tools:
Git & GitHub, Figma, Adobe Creative Suite

## ⚙️ Installation

To run this project locally:
1. Clone this repository
2. Navigate into the project folder
3. Set up a local server environment (e.g., XAMPP, MAMP)
4. Import the provided database (if applicable)
5. Open the project in your browser via localhost

## SITE STRUCTURE
The website will include and home page with links to all other pages, we plan to create an Events page, a London Aviation History page, a Wartime Experience page, a Battle of Britain page, a map with the local training bases, and a “Book of Remembrance”  page which will show all the service members who served in the 427 wing in the first world war. We intend to have an administrator dashboard built to be user friendly and accessible, this dashboard will require a login and will allow the site administrator to change the information and photos on the Events page and add to the Book of Remembrance.

## HOME PAGE
The home page of the website will include links to all other pages, these links will be large card-style elements that will have interactive hover states. This page will feature basic greensock animations in order to make the site more visually engaging and sleek in composition. 

## EVENTS PAGE (DYNAMIC)
The events page of the website will display upcoming events at the museum, and we intend to make this page easily editable for the site administrators. 

## LONDON AVIATION HISTORY TIMELINE PAGE
This page will list the major events throughout the history of the London aircraft history museum in order to give users a visually pleasing and engaging way of learning the museum’s history. The page will have an interactive vertical timeline with specific events, the Users can hover or click on each event identifier on the timeline to open an attached bubble that will offer information about that specific event. at the bottom of the page there will be a link to the Wartime Experiences Page. This will be done using a parallax scrolling feature utilizing native CSS/HTML, implementing methods like

methods {
	background-attachment: fixed;
	animation-timeline: scroll();
	transform: translateY()
} 

andPositioningValuesLike {
	Position: fixed, relative, sticky etc.;
}

More complex animations will be accomplished using Greensock animations via the Greensock Plug-Ins, using custom event listeners like ‘requestAnimationFrame’ and transform calculations based on the scrollY position.

## FLYING SCHOOL AND TRAINING BASES PAGE
This page will be focused on the history of aviation training in southwestern Ontario, what pilots learned, the risks of training, and what the average airman had to deal with throughout history. It will contain details about the history of the Training grounds, aircrafts and hangars, and daily life at the base. The majority of the content in this section will have parallax effects similar to the timeline page in order to dynamically display the information in an engaging way. The Maps section of the page will have an interactive map of all training bases in Ontario currently, and as users scroll it will highlight different sections of the map to provide more context. The main functionality will use GSAP Scrolltrigger to organize and display content, and the map animations will be done using Mapbox GL JS or Leaflet depending on end-case results.  

## AIRMAN’S CANTEEN PAGE
This page will describe the History of the Canteen, and will have a section comparing old photos and new photos and will be designed in a "then vs now" fashion. It will use parallax effects similar to the other pages within the website, pinning images in the background while the content in the foreground moves.

## COMMEMORATION PAGE (DYNAMIC)
This page will commemorate the airmen from London who gave their lives during the war. It will be dynamic as Mike is actively researching this topic and may add more entries in the future. The page will have an opening followed by a section filled with cards, each containing details on the associated airman from London. It will be managed through the Client Management System through the dashboard, and will be animated using native CSS/HTML and GSAP animations.

## BATTLE OF BRITAIN PAGE
The battle of britain page we have designed to be dynamic and interactive, the hero section of the page will include a quote from Winston Churchill regarding the Battle of Britain, and as the user scrolls down elements reminiscent of paper folders will take up the screen, with several folders corresponding to each month of the battle. As the user scrolls down text will begin to appear as if typed by a typewriter, going into detail of the events of each month, starting in July and ending in October. After this section another page similar to the hero page will appear, listing the Casualties of the battle and another quote from Winston Churchill. Beyond that, as the user scrolls down they will be introduced to the participants of the battle belonging to the 427 wing, with details regarding each service member and the aircraft they piloted during the battle. The parallax sections of this page will be implemented using native CSS and HTML, and GSAP with similar methods to the other pages.

## BOOK OF REMEMBRANCES PAGE
The book of remembrance will have a carousel of different individuals with a search function. This page currently will be included if we have time after completing the main aspects of the site, and will use similar frameworks to the other pages.

## BLOG (DYNAMIC)
The blog can be managed through the client management system via the dashboard by those with appropriate access.

## CONTACT PAGE
The contact page will have a form fill to allow people to mail the Museum. Once a User sends the message, an email will be sent to a specific address.

## SITE FLOW
The website will be divided into sections when it comes to how it will flow. The main page will feature links to all other pages, and will be placed in order following the nav bar in terms of organization. The nav bar will be minimalist, with the logo and sitename to the left and other links sticking to the right side of the page. events will lead to the events page, the other nav links have a drop down when hovered on by a mouse, and will lead to an additional nav page that can be backed out of on mobile. There will be: History, Museum, and Contact with drop down menus and the pages listed within each drop down will be a section with its own flow. For example "History" will lead the User through a Timeline Page, Wartime Experiences Page, a Battle of Britain page, a Maps page, and it will end on the Book of Remembrance page. Each page will have a link to the next page at the bottom, above the footer. This will allow Users to learn in an order that provides context, and leads them on a journey. If the User wants to, they can access the NavBar at any time to jump to whatever page they want. The "Museum" drop down will take the user through a figurative tour of the base, starting with the history of the base and ending with the Cafe Page. The content drop down will contain a Hall Rentals page and a Contact page. Each will contain forms that can be filled and each one will send an email to a specific email address when the form is filled out by a User. The Footer will contain three columns of links and the Museum Logo links to the top of each section and the contact page, the right side of the footer will include links to their social media. 

## Site Flow Chart

![Site Flow Chart](/images/fip_site_map-02.jpg)

## Site Database Structure

this Entity Relationship Diagram outlines how data will be stored and referenced by the website. the database will allow for dynamic content to be displayed, and it will allow a site administrator to add, remove and edit certain pages through a Client Management System.

![Entity Relationship Diagram](/images/FIP-ERD-01.jpg)

## License
This project is licensed under the [MIT License](LICENSE)
