Vivifi
=======

###Release_v1.0

###Overview: 
Vivifi is a recent start-up organized by ASU alumni, to link event planners with musical 
ensembles and solo musicians from ASU. The benefit the service provides is an easier way for event planners to find
and book quality performers.

###Drupal Site Link
[http://dev-vivifievents.ws.asu.edu](http://dev-vivifievents.ws.asu.edu)

###Team Info:
	Name:					GitHub Username:
		Justin Choi						attachoi
		Alex Lepak						alepak
		Nick Muscara 					nickolonious
		Jessa Kali Short				jessa-
		Christian Valenty				cvalenty
		Jason Weeks 					jweeksasu

###Product Backlog

####TO_DO:
		1.) Format Facet Search for EZ-Book Search 
			Inline v Above
			Customize CSS 
		
		2.) Customer Feedback/Survey Form
			Create content type for feedback form link to db
			Create Block on Home Page to display favorable ratings and testimonials

		3.) Convert Forms to Entity forms 
				Implement Validation Rules
				
		4.) Administration Page
				Link to entityform submission
				Restrict User roles
				
		4.) Fix Site Errors		
		
		5.) Final Report
				Individual team Autobiographies
				Finish Writing Report Elements
				Edit Report 
				Format and Print
				
		6.) SEO Module
		
		7.)Create User Manual
				
		8.) Teach clients how to use site
			Inserting New Ensembles
			Accessing Database
			Accessing submission results
			Printing Reports
			Updating Content (customer testimonials, etc..)
		



###Extra Notes:

##Site Info:
Link to site (active)
[http://dev-vivifievents.ws.asu.edu](http://dev-vivifievents.ws.asu.edu)

###Burndownchart:
![alt text](https://github.com/asu-cis-capstone/vivi-fi/blob/master/release_v1.0/burndown_chart/bdchartv1.jpg)

##Release_v0.6


###Overview: 
Vivifi is a recent start-up organized by ASU alumni, to link event planners with musical 
ensembles and solo musicians from ASU. The benefit the service provides is an easier way for event planners to find
and book quality performers.

###Drupal Site Link
[http://dev-vivifievents.ws.asu.edu](http://dev-vivifievents.ws.asu.edu)

###Team Info:
	Name:					GitHub Username:
		Justin Choi						attachoi
		Alex Lepak						alepak
		Nick Muscara 					nickolonious
		Jessa Kali Short				jessa-
		Christian Valenty				cvalenty
		Jason Weeks 					jweeksasu

###Product Backlog

####TO_DO:
			
		1.) Browse Page
			Displays ensembles content profiles for generic listings of group types available to book.
			Page allows users to browse all ensembles content.
			
			Tasks:
				Add following ensembles content:
					Classical/jazz
					Classical/pop String duo/trio/quartet
					Classical/pop Guitar string combo
					Jazz combo duo/trio/quartet
					Woodwind duo/trio/quartet
					Solo cello 
					Vocalist
					Instrumentalist with vocalist (guitar/voice, piano/voice, jazz combo/voice)
					Create your own combo 
					Can’t find what you’re looking for?
		
		2.) Email Forms
			Forms to allow users to contact client to book a type of group from the browse page, 
			build their own group to personalize their event, or an ask us form which will allow
			users to get help with booking the appropriate ensemble they want.

			Tasks:
				All Forms listed created from new Forms content type
				Booking email form
					Links to Individual ensemble content profile page and emails clients address
					Fields to Include
						Group Type
						Genre
						Instrumentation
						Budget
						Date/Time of event
						Event Location
						Event Type
						Attire Standards for event (formal, business casual)

				Build Ensemble content page email form
					Within ensembles content (Browse page), Build Ensemble content page will
					allow users to customize the ensemble they want for their event
					and will emails results to clients address.
					Fields to Include
						Instrumentation
						Genre
						Budget
						Date/Time of event
						Event Location
						Event Type
						Attire Standards for event (formal, business casual)
				Ask Us content page email form
					Within ensembles content (Browse page), Ask Us form will allow user to 
					submit form that gives the event details and specified genre that will allow
					client to contact user with suggestion for their event.
						Genre
						Budget
						Date/Time of event
						Event Location
						Event Type
						Attire Standards for event (formal, business casual)


		3.) Customer Feedback/Survey Form
			Create content type for feedback form link to db
			Create Block on Home Page to display favorable ratings and testimonials


		4.) Home Page Carousel/Slide show to  link to Featured Items
			Tasks:
				Find and Install Carousel module
				Customize
		
		5.) Teach clients how to use site (pushed to v1.0)
			Inserting New Ensembles
			Accessing Database
			Accessing submission results
			Printing Reports
			Updating Content (customer testimonials, etc..)
		
		6.) Event Page (v2.0) (Cancelled due to time constraints)
		
			This page might allow planners to promote public events, which feature ensembles 
			booked through Vivi-fi. This page could be potentially used for administrators to 
			access information regarding events (i.e. artist, event, planner information).
			
###Burndownchart:
![alt text](https://github.com/asu-cis-capstone/vivi-fi/blob/develop/release_v0.6/burndown_chart/v0.6.JPG)

##Release_v0.5


###Overview: 
Vivifi is a recent start-up organized by ASU alumni, to link event planners with musical 
ensembles and solo musicians from ASU. The benefit the service provides is an easier way for event planners to find
and book quality performers.

###Drupal Site Link
[http://dev-vivifievents.ws.asu.edu](http://dev-vivifievents.ws.asu.edu)

###Team Info:
	Name:					GitHub Username:
		Justin Choi						attachoi
		Alex Lepak						alepak
		Nick Muscara 					nickolonious
		Jessa Kali Short				jessa-
		Christian Valenty				cvalenty
		Jason Weeks 					jweeksasu

###Product Backlog

####TO_DO:
		1.) Get ASU Requirements
			Meeting with Trent 10/20 discussed new site requirements

			Update Features:
				Remove Individual and group profiles from design
				Create Register page for artists and ensemble registration (transfer to database content type
				plus form)
				
			Add Features:
				Admin page to search artist and ensemble registration
				Admin controlled database of generic group listings
				Browse page for site users to see all group listings
				EZ Book page allows users to search by filters through the group listings
				Booking email form 
				Build Ensemble content page email form
				Ask Us content page email form
				Home Page carousel 	

		2.) Database
			Pantheon creates and instantiates a database for Drupal 7 when installed. 

			The database is accessed by modules, like Webforms, where forms collect data and add it to the
			database. The administrative view allows the data to be manipulated. 
			
			The data can also be accessed and manipulated through the Database Administration module. 

			The Pantheon Apache SOLR Search Module works in conjunction with the Search API module to allow
			filtering and searching within the database. Adding a view allows admin to customize search page 
			and options.
			
			Tasks:
				Create Admin content type for solo artist and group registration
				Create Admin content type of generic group listings called ensembles 
				Create EZ Book page to allow users to search and filter ensembles content 
					Create new database
					Index to default
					Set fields and field labels
					Create new view to allow searching and filtering of results
					
				Create Registration Content Page with forms to allow users to register
					Add new content type
					Create New fields and field labels
					
				Create Admin Page to view/search registration applications 
				
###Burndownchart:
![alt text](https://github.com/asu-cis-capstone/vivi-fi/blob/master/release_v0.5/bd_chart_v0.5.jpg)

##Release_v0.4

Link to new development site through ASU pantheon hosting 
Old drupal
http://dev-vivifi.ws.asu.edu/
New drupal
https://dev-vivifievents.ws.asu.edu/

###TO_DO:
        1.) Get details to start building site in drupal (requirements change by client)
                Get in touch with Vivifi ASU contact -Jessa
                Get ASU requirements -Jessa
                Transfer site to drupal
                Create pantheon and drupal environment -Nick
                Aboutus -Jason
                Artist/Ensemble/Planner forms to email -Jason
                FAQ -Nick
                Style Forms -Alex, Christian
                Style Static Pages -Christian, Alex
                Update vivifievents.com to new drupal site
        
        2.)Test Drupal Site 
                Validation Tests -Jessa, Alex
                Functionality Tests -Christian
        
        3.) Database
                Design database of ensembles and solo musicians for the planners to search through. 
                Database will be populated by site administrators. Administrators also need to be 
                able to search the database for contact info, which will not be accessible to the 
                public.
                    Design Build and Implement Ajax module
                    Link forms to database
                    Output user info to profile page
					
###Burndownchart:
![alt text](https://github.com/asu-cis-capstone/vivi-fi/blob/master/BurnDown%20Charts/burndown_v0.4.png)

##Release_v0.3

		
		1.)	Registration Pages
			This is where artists/ensembles apply to register for the site. The application will store artist 
			information for the client to approve before adding to the database. Separate pages are recommended 
			as well as an event planner registration page.
				
				Tasks:
					Develop Artist Registration page
						create artist email php
					Develop Ensemble Registration page
						create ensemble email php
					Develop Contact Us page
						create general contact page
					Verify form information with client
					Edit Forms
					Get domain registered/hosting resolved
					Send form info to client/temp email
						email body contains the information labelled respectively
					
		2.) FAQ Page
				Tasks:
				Post page with FAQS from client
			
		3.) Administrator Page 
				Tasks:
				Link to Email
				Database Link(moved to next sprint log to coincide with database development)
				
###Burndownchart:
![alt tag](https://github.com/asu-cis-capstone/vivi-fi/blob/master/BurnDown%20Charts/burndown_v0.3.png)


##Release_v0.2

repo for beta testing of Vivifi Webpage gh-pages sends to a specific Webpage. A way to test how new code will look on the 
web before we put it onto vivifi's real page.

Beta Page Available at:

http://asu-cis-capstone.github.io/vivi-fi/


    1.) Index Page

        Create an Index page where event planners can navigate the main menu to search for 
        ensembles, search for solo musicians, build an ensemble, or contact Vivifi to book 
        an ensemble or solo musician.

        The group recommends that a future version include an events link that administrators 
        can access to monitor they're booking history, and possibly help planners promote 
        public events.

            Tasks:
                Create Index Page
                Create 4 buttons
                        Artists - search solo artists
                        Ensemble - search ensembles
                        Ask Us - contact page, artist registration
                        Vivibook - quick booking, ensemble building page
                About Us Page link
                Coming Soon Page

    2.) About Us Page

        This page allows planners and musicians to view information about that company and 
        links to the artists registration page.
            
            Tasks:
                Create a page to display the Mission Statement

    3.) Contact Page

        This page allows planners to contact the client to book ensembles or solo musicians. 
        This page will also include a link for new artists to apply for Vivifi's service.
        Will also allow temporary registration of artists and planners.
            
            Tasks: 
                Create contact forms

##Release_v0.1

###Overview: 
Vivi-fi is a recent start-up organized by ASU alumni, to link event planners with musical 
ensembles and solo musicians. The benefit the service provides is an easier way for event planners to find
and book quality performers.

###Team Info:
	Name:					GitHub Username:
		Justin Choi						attachoi
		Alex Lepak						alepak
		Nick Muscara 					nickolonious
		Jessa Kali Short				jessa-
		Christian Valenty				cvalenty
		Jason Weeks 					jweeksasu
	
###TO_DO:
		1.) Index Page
			Create an Index page where event planners can navigate the main menu to search for 
			ensembles, search for solo musicians, build an ensemble, or contact Vivi-fi to book 
			an ensemble or solo musician.
			
			The group recommends that a future version include an events link that administrators 
			can access to monitor they're booking history, and possibly help planners promote 
			public events.
			
		2.) Database
			Design database of ensembles and solo musicians for the planners to search through. 
			Database will be populated by site administrators. Administrators also need to be 
			able to search the database for contact info, which will not be accessible to the 
			public.
		
		3.) Contact Page
			This page allows planners to contact the client to book ensembles or solo musicians. 
			This page will also include a link for new artists to apply for Vivi-fi's service.
			
		4.) Administrator Page
			This page will be used by the administrators to access new artist applications. 
			It will also be where the administrators can access contact information from their
			clients.
		
		5.) Ensemble Search Page
			Allows planners to search the database of already formed ensembles. The planner will 
			be able to filter the results  based on genre, name, instruments or rate. When a row 
			item is clicked it will link to that ensembles personal page.
		
		6.) Ensemble Personal Page
			This page will allow planners to view various information about the ensemble. 
			Information will include: name, genre, instruments, rate, pictures, an audio 
			clip, and video clip. Contact information is kept private. 
			
		7.) Solo Musician Search Page
			Similar to ensemble page but to limit results to solo musicians.
			
		8.) Build-a-Ensemble Page
			Will allow planners to search individual musicians, to build a custom ensemble.
		
		9.) Event Page (v2.0)
			This page might allow planners to promote public events, which feature ensembles 
			booked through Vivi-fi. This page could be potentially used for administrators to 
			access information regarding events (i.e. artist, event, planner information).
		
