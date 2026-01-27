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

## Site Structure
The website will include and home page with links to all other pages, we plan to create an Events page, a London Aviation History page, a Wartime Experience page, a Battle of Britain page, a map with the local training bases, and a “Book of Remembrance”  page which will show all the service members who served in the 427 wing in the first world war. We intend to have an administrator dashboard built to be user friendly and accessible, this dashboard will require a login and will allow the site administrator to change the information and photos on the Events page and add to the Book of Remembrance.

## Home Page
The home page of the website will include links to all other pages, these links will be large card-style elements that will have interactive hover states.

## Events (dynamic)

The events page of the website will display upcoming events at the museum, and we intend to make this page easily editable for the site administrators. 

## Timeline

The timeline will have an interactive vertical timeline with specific events, the Users can hover or clock on each event identifier on the timeline to open an attached bubble that will offer information about that specific event. at the bottom of the page there will be a link to the Wartime Experiences Page.

## Wartime Experiences

The wartime experiences page, which will be a historical page talking about the history of aviation training in southwestern Ontario, what they learned, the risks of training, and what the average airman had to deal with throughout history. at the bottom of this page will be a link to the Battle Of Britain page.

## Battle of britain

The battle of britain page we have designed to be dynamic and interactive, the hero section of the page will include a quote from Winston Churchill regarding the Battle of Britain, and as the user scrolls down elements reminiscent of paper folders will take up the screen, with several folders corresponding to each month of the battle. As the user scrolls down text will begin to appear as if typed by a typewriter, going into detail of the events of each month, starting in july and ending in October. After this section another page similar to the hero page will appear, listing the Casualties of the battle and another quote from Winston Churchill. Beyond that, as the user scrolls down they will be introduced to the participants of the battle belonging to the 427 wing, with details regarding each service member and the aircraft they piloted during the battle.

## Maps Page

The Maps Page has a map of all training bases in Ontario currently, and a map of wartime bases during the world wars, there will be a legend attached to each map to allow Users to understand them better. the maps will be static, but if users hover or click on any of the dots that represent a base, a blurb will appear giving the user more information about that location. At the bottom of the page will be a link to the Book of Remembrance page.

## Book of remembrance (Dynamic)

The book of remembrance will have a carousel of different individuals with a search function. this page will be dynamic and managed by the client management system through the dashboard.

## The 427 Wing Page

This page will include a description of the museum written by the Client, and will contain details about the history of the Training grounds, aircrafts and hangars, and daily life at the base. It will also contain images of the Museum itself and will show the exhibits in the Museum and details about the gift shop. There will also be a section regarding the Flying school at the museum and its history. at the bottom of the page there will be a link to the Airman's Canteen page.

## Airman's Canteen Page

this page will describe the History of the Canteen, and will have a section comparing old photos and new photos and will be designed in a "then vs now" fashion. at the bottom of this page will be a link to the Cafe page.

## Cafe Page

This page will have details about the cafe in the museum. It will contain details about the cafe and its history, the hours it is open, and any special weekly promotions that the Cafe will have. It will show the menu at the Cafe, and at the bottom of the page will be a form that can be filled out by a User if they want to rent out the space, when a form is sent by a user it will be sent to a specific email address.

## Blog (dynamic)

The blog can be managed through the client management system via the dashboard by those with appropriate access.

## Hall Rentals Page

This page will allow users to contact the Museum specifically if they want to rent out the hall. they simply fill a form and hit send, and an email will be sent to a specific address.

## Contact Page

The contact page will have a form fill to allow people to mail the 427 wing. Once a User sends the message, an email will be sent to a specific address.

## Site flow

The website will be divided into sections when it comes to how it will flow. The main page will feature links to all other page, and will be placed in order following the nav bar in terms of organization. The nav bar will be minimalist, with the logo and sitename to the left and 4 links sticking to the right side of the page. events will lead to the events page, the other nav links have a drop down when hovered on by a mouse, and will lead to an additional nav page that can be backed out of on mobile. There will be: History, Museum, and Contact with drop down menus and the pages listed within each drop down will be a section with its own flow. For example "History" will lead the User through a Timeline Page, Wartime Experiences Page, a Battle of Britain page, a Maps page, and it will end on the Book of Remembrance page. Each page will have a link to the next page at the bottom, above the footer. This will allow Users to learn in an order that provides context, and leads them on a journey. If the User wants to, they can access the NavBar at any time to jump to whatever page they want. The "Museum" drop down will take the user through a figurative tour of the base, starting with the history of the base and ending with the Cafe Page. The content drop down will contain a Hall Rentals page and a Contact page. Each will contain forms that can be filled and each one will send an email to a specific email address when the form is filled out by a User. The Footer will contain three columns of links and the Museum Logo links to the top of each section and the contact page, the right side of the footer will include links to their social media. 
 
## Site Flow Chart

![Site Flow Chart](/images/fip_site_map-02.jpg)

## Site Database Structure

this Entity Relationship Diagram outlines how data will be stored and referenced by the website. the database will allow for dynamic content to be displayed, and it will allow a site administrator to add, remove and edit certain pages through a Client Management System.

![Entity Relationship Diagram](/images/FIP-ERD-01.jpg)

## License
This project is licensed under the [MIT License](LICENSE)
