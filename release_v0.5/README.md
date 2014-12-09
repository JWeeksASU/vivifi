Vivifi
=======

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

#####10/20 Meeting Whiteboard
![alt text](https://github.com/asu-cis-capstone/vivi-fi/blob/develop/Images/1020mtg_board.jpg)	

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
#####Screen shots of database and index
![alt text]()
#####Screen shots of content page list
![alt text]()
#####Screen shots of views
![alt text]()
