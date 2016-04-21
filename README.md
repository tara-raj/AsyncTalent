# AsyncTalent
Using artificial intelligence to create next level talent recruiting software.

#Modules
Screen, Interview, and Manage.

Screen allows you to upload resumes and the analysis engine scores them.
Interview lets you select a set of interview questions and generate a unique interview ID for candidates to complete video interviews.
Manage helps you view interview scores and score candidate interviews yourself. You can also track the stage a candidate is in the process.

#Screen
screen.php - Main module view. You can upload files with resumes here.
screen_calc.php - Unpacks the uploaded file. Executes algorithm. Visualizes results.

#Interview
create.php - Select from a bank of interview questions (QuestionBank.csv). Submit interview.
create_calc.php - Uploads interview info to the server. Generates a unique ID.
create_confirm.php - Confirmation page with all interview information.

#Manage
view_feedback.php - View an overview of interview results. Has a "View Details" button for each interview.
interview_details.php - Loads when "view details" is clicked in view_feedback.php. Shows individual interview score and allows you to give your own score. Giving your own score updates the
table in the DB and the overview fields update accordingly.

#Login
login.php - Where the user enters login credentials to be taken to the dashboard. This is just the form UI.
login_process.php - The creds are compared to users in the DB. Backend process before actually logged in.

#Candidate Interview
enter.php - Where the candidate enters the unique interview ID and passcode. This is just the form UI.
enter_process.php - The creds are compared to the interviews in the DB. Backend process before actually taken to interview.
enter_interview.php - Splash screen before the interview. Has the directions.
questions_int.php - Video interview sceen. Captures transcript.
questions_int_calc.php - Text analysis of the interview transcript.
questions_end.php - End screen when all interview questions are complete.


