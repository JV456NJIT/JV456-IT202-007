<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jose Ventura (jv456)</td></tr>
<tr><td> <em>Generated: </em> 11/13/2023 10:12:20 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone1-deliverable/grade/jv456" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.06.19Invalid%20Email.png.webp?alt=media&token=6ad2d9de-d39d-48ba-accb-8a012cae5160"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.07.21Invalid%20Pass.png.webp?alt=media&token=2852d887-acb0-46b2-bc09-47bea1426dcd"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.08.40Password%20Mismatch.png.webp?alt=media&token=a370eacd-0362-4c30-a306-b85882c1c282"/></td></tr>
<tr><td> <em>Caption:</em> <p>Password Mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.09.34Valid%20Data.png.webp?alt=media&token=cd88dd4d-0f97-4965-927a-51f6149e9b34"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid Data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.10.35Email%20Taken.png.webp?alt=media&token=b138b57a-f9f4-41d9-b783-b38d303a35b4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email Taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.11.32Username%20Taken.png.webp?alt=media&token=2d92a5ea-8685-465b-b98c-51a0864e3167"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username Taken<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.13.30User%20In%20Table.png.webp?alt=media&token=e760f451-a790-4a11-8bad-32aaba827748"/></td></tr>
<tr><td> <em>Caption:</em> <p>User in DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/16">https://github.com/JV456NJIT/JV456-IT202-007/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form takes input from the basic HTML input element and stores the<br>email, username, password, and password validation in variables. On the front end we<br>check the email by using HTML functions to ensure that it is a<br>proper email, and on the backend we check if the email is already<br>being used in the database. On the front end we check to make<br>sure the username is of specified length and do the same as the<br>email for the backend. For the password on the front end we constrain<br>the password to a minimum of 8 characters and check the confirm password<br>to match the length and then if they do check the contents to<br>ensure its the same password.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.23.46Invalid%20Password.png.webp?alt=media&token=376ec704-d39b-4d32-a7f9-0aebfbda0f64"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.24.57Invalid%20User.png.webp?alt=media&token=9e7f0bbc-9bd8-4593-884d-76343cfe4c08"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid User<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.26.01Successful%20Login.png.webp?alt=media&token=91959e03-68f1-4ff5-9cdf-f469413ba9fa"/></td></tr>
<tr><td> <em>Caption:</em> <p>Good Login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/19">https://github.com/JV456NJIT/JV456-IT202-007/pull/19</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>For the login we still use form elements to save the information into<br>variables. On the front end we user functions to make sure the username<br>is valid and the password isn&#39;t empty. On the backend we use the<br>variable for the username to select the proper user from our database and<br>check the password variable against the password in the database. If the username<br>does not exist on the database or the passwords dont match then we<br>output the proper error message.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.36.33Not%20Logged%20In.png.webp?alt=media&token=d6a0614d-2ed3-4c0b-9b7c-f2b82d3a257f"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged Out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.32.20Not%20Logged%20In.png.webp?alt=media&token=7e88dc50-4235-4b20-a445-33662113fc78"/></td></tr>
<tr><td> <em>Caption:</em> <p>Not Logged In<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/20/">https://github.com/JV456NJIT/JV456-IT202-007/pull/20/</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>We use cookies to store user session information. If the cookies for the<br>session aren&#39;t available for the browser to read, the user is expected to<br>be logged out. Our home page uses a function to check for these<br>cookies.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.35.56Not%20Logged%20In.png.webp?alt=media&token=08847d73-a9f0-49de-89f5-14485b8f80a8"/></td></tr>
<tr><td> <em>Caption:</em> <p>Not Logged In<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.46.12No%20Permissions.png.webp?alt=media&token=4c3a6a93-6bfd-4e98-984d-d098bd2bf74f"/></td></tr>
<tr><td> <em>Caption:</em> <p>No Permission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.46.56Roles%20Table.png.webp?alt=media&token=e347be16-8262-43e1-aa00-0c1f11bca95a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Roles Table with Admin<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.47.55Roles%20Table.png.webp?alt=media&token=3aa2cac2-b661-43c8-8765-c93619c029a1"/></td></tr>
<tr><td> <em>Caption:</em> <p>Admin is the admin user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/24">https://github.com/JV456NJIT/JV456-IT202-007/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>We use an is logged in function to check if the user is<br>logged in at the very beginning of the code for the page. If<br>the user is not logged in we redirect them to the log in<br>page with a flash message saying they need to be logged in to<br>view the page.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Similarly to the log in protected page we check to see if the<br>user that is currently logged in has the correct role permission to view<br>the page and if not we give them a flash warning and kill<br>the rest of the page from loading<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.52.23Successful%20Login.png.webp?alt=media&token=aeba21aa-f609-490a-a416-ed419e9dd03a"/></td></tr>
<tr><td> <em>Caption:</em> <p>Simple nav<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/30">https://github.com/JV456NJIT/JV456-IT202-007/pull/30</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I tried different styles, but everything that wasn&#39;t a default style hurt my<br>eyes a lot so I just set the links to be blue with<br>a background of white and left the forms as defaults.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.54.41Email%20Taken.png.webp?alt=media&token=d42afd72-7126-451d-a24f-2a91c6b6876b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Email Taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.54.45Username%20Taken.png.webp?alt=media&token=4f03fa75-aadd-4dc4-a0b0-a9e84f0fce52"/></td></tr>
<tr><td> <em>Caption:</em> <p>Username Taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.54.50Password%20Mismatch.png.webp?alt=media&token=4bb67692-cfe5-44f4-85b8-c881a16c49b5"/></td></tr>
<tr><td> <em>Caption:</em> <p>Invalid Pass<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/21">https://github.com/JV456NJIT/JV456-IT202-007/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>First we would have the messages outputted to the console which the user<br>never saw. After this we moved to displaying the messages as pop-up boxes,<br>but this brings the user experience to a stop with the pop-up. Due<br>to this we moved to just simple echos in the page and from<br>there to flash messages with a background text which doesn&#39;t interrupt the user<br>with a pop-up box and is color coded so the user can easily<br>identify the error.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T02.58.41User%20Profile.png.webp?alt=media&token=0d010a75-6e08-4a53-a893-0a8e33a8887c"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/22">https://github.com/JV456NJIT/JV456-IT202-007/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>we store the users username and email into variables and then output those<br>variables in the forms.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T03.02.47Update%20Profile.png.webp?alt=media&token=581ca6b8-1ac7-4bba-aa23-d119342a942f"/></td></tr>
<tr><td> <em>Caption:</em> <p>User Profile Update<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T03.04.53Before%20Update.png.webp?alt=media&token=00a06704-c6fb-4e9a-9c84-27b3ead14bb4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Update: User1 Profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-11-14T03.05.59After%20Update.png.webp?alt=media&token=8344485b-471d-4fbf-beab-e6b183d3d794"/></td></tr>
<tr><td> <em>Caption:</em> <p>After Update: User1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/22">https://github.com/JV456NJIT/JV456-IT202-007/pull/22</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Store the username data into a variable that we can use on the<br>database. Store any updated profile information into variables and using the update SQL<br>function we can change the user information. Validation for the password, username, and<br>user-email is the same as the registration page.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/login.php">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone1-deliverable/grade/jv456" target="_blank">Grading</a></td></tr></table>