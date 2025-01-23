BUILDING OF A BASIC VOTING WEBSITE

This website is a basic voters website built with Html, Css, Bootstrap, PHP and MYSQL,  while making use of Xampp as our operational database.
The website allows a user to vote for his preferred candidate in the Nigeria presidential elections.

MODE OF OPERATION
A user is to log in, in order to have access to vote, but as a first time user, you will have to Sign up.
The sign up process entails that you add your personal informations, after which you can now sign in with the use of your Username and Password.
Once signed in, you will have to scroll to to the bottom of the page and vote for any of your preferred candidate out of the 3 candidates listed. After which the total amount of vote a Candidate has will automatically update after you have voted. 

RULES AND GUIDLINES 
1. When registering, a user has to pick a unique username, which can not be the same as the username of anyone who has previously registered. Therefore, your username can only be yours and it can never be changed.
2. A candidate has the right to vote only once. Once you have voted, you can no longer vote again.
3. In the navigation bar, there is a profile page, which allow the user to view their profile details and also edit their profile if they wish. Only your username, email address and password cannot be changed, every other information about a user can be changed by editing the profile.

PAGES AND FUNCTIONS
1. fhome.php : This is the first home page of the website, and it is the page you see before you log in and also after you log out.
2. lhome.php : This is the homepage you see after you have successfully signed in. In this page, is where you can cast your vote and also navigate to access your profile page.
3. Vlogin.php : This is the log in page where you can sign in with your unique username and your password.
4. Vregister.php: This is the Sign up page, where you input all your personal information and register as a user/voter.
5. profile.php : This is the page where you can view your profile details and it can also link you to the edit page, if you wish to edit your profile.
6. Edit.php : This is page where you choose to edit your profile and update it.
7. Empty.php: The is the page  you see immediately you cast your vote and it leads you back to the home page.
8. Connection.php : A non visible page, the code for connecting to the database is written here.
9. Message.php : A non visible page, this page contains the code used to output error messages and successful message to the users.
10. Logout page: A non visible page, this page contain the log out session code.

DATABASE

A database was created using Xampp, our data base was named “voterdb”, under which we have two table data. 

1. First table data: This table data holds all the users registration information as well as the candidate they voted for and their activation.
i.e: username, firstname, middlename, lastname, email, password, phone, gender, state, candidate, activation.
2. Second table data: This table data is used to keep count of the amount of votes each of the presidential candidate has gotten.
i.e: tinubucount, atikucount, obi count.

Note: THE javascript code “home.js” was no used in the code.
