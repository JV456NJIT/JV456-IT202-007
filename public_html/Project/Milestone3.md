<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 API Project</td></tr>
<tr><td> <em>Student: </em> Jose Ventura (jv456)</td></tr>
<tr><td> <em>Generated: </em> 12/13/2023 9:32:07 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-3-api-project/grade/jv456" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes just to be up to date</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> API Data Association </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Consider how your API data will be associated with a user</td></tr>
<tr><td> <em>Response:</em> <p>Each user will be able to select a specific concert that they are<br>going to attend and add it to their attending concerts/My Events list.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Handling Data Changes</td></tr>
<tr><td> <em>Response:</em> <p>User will have to reassociate with the data. The event will be deleted<br>from the Events table as well as the Attending table which holds the<br>association between a users_id and an events_id.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Handle the association of data to a user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Which option did you need to do to handle the association of data?</td></tr>
<tr><td> <em>Response:</em> <p>Option 1 was what I did.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots of the updated/created pages related to associating data with the user (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-14T02.16.38Add%20to%20attending.png.webp?alt=media&token=a96722d2-a4c8-43b6-8dea-459f13dd917d"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the add to attending option for users to add events to their<br>list<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-14T02.17.32attending%20code.png.webp?alt=media&token=2fafc0ba-f410-4c1b-b5bf-dea0ff97d47d"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for add to attending button. UCID present on folder name.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any Heroku prod links to pages that would trigger entity to user association</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/browse.php?artist=Bad+Bunny&country=&order=asc&limit=1">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/browse.php?artist=Bad+Bunny&country=&order=asc&limit=1</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/52">https://github.com/JV456NJIT/JV456-IT202-007/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Logged in user’s associated entities page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What is the data that's associated with the user?</td></tr>
<tr><td> <em>Response:</em> <p>Each user can associate with a specific event. whichever event they are thinking<br>of attending they can add to their list to associate with it. Then<br>they can go to &quot;my events&quot; to get a full list of all<br>the events they have added to their attending list.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the logged in user's entities associated with them  (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-14T02.20.02user%20attending%20list.png.webp?alt=media&token=1c1f2807-7866-4ae6-a57c-e26ff9f0114e"/></td></tr>
<tr><td> <em>Caption:</em> <p>Users event list shows all the events they have added to their attending<br>list<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-14T02.21.36attending%20show%20code.png.webp?alt=media&token=65848a0a-d85f-4600-9170-ab6cb72d9766"/></td></tr>
<tr><td> <em>Caption:</em> <p>code for showing the events and the code for how we retrieve said<br>events from the DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where the logged in user has their entities listed</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/my_events.php">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/my_events.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/52">https://github.com/JV456NJIT/JV456-IT202-007/pull/52</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> All Users association page (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe/Explain the purpose of this page from your project perspective</td></tr>
<tr><td> <em>Response:</em> <p>A user might have specific events that they want to keep track off<br>without having to browse for them every time. This allows users to add<br>said events to thei list.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the entity data associated with many users (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where entities associated to many users can be seen</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Create a page that shows data not associated with any user (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of the page showing entities not associated with anyone (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add Heroku Prod links to the page(s) where unassociated entities can be seen</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin can associate any entity with any users (Note: This may be a form on an existing association page if you rather not have a separate page for this) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing evidence of the checklist items (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the code logic for this page</td></tr>
<tr><td> <em>Response:</em> <p>Since my app is fairly small this was pretty easy. I just made<br>a table that holds a users id and an events id for every<br>event that the user wanted to add to their list. Creating the add<br>to attending function was very similar to the remove event function for admin<br>so just a few edits to the code for that and it was<br>good to go.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) related to this task</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Reflection </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Document any issues/struggles</td></tr>
<tr><td> <em>Response:</em> <p>This was fairly easy as far as adding association but I was not<br>able to complete the other aspects of this Milestone such as removing association,<br>allowing admin to view associations/remove associations/add associations manually. I did have a hard<br>time trying to figure out how to display multiple events for a specific<br>user.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Highlight any favorite topics</td></tr>
<tr><td> <em>Response:</em> <p>All of the aspects of this project were pretty interesting. Figuring out how<br>data gets passed from either one page to another or from API to<br>database was probably my favorite part. It helped me understand what all the<br>extra inputs on a URL are for and what they do.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Overall how do you feel you did with the project and meeting requirements</td></tr>
<tr><td> <em>Response:</em> <p>I think I did decent at best. I should have dedicated more time<br>to the project so that I could hit all the milestones completely especially<br>for milestone 3 where I fell short by a lot. There were some<br>things that I do think were not necessary for my project, most of<br>which are the things that I did not get to do for Milestone<br>3 such as having an admin see all the events associated with a<br>user and not associated with a user.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Summarize your experience per the checklist items</td></tr>
<tr><td> <em>Response:</em> <p>I had no development experience at all when i came into this classroom,<br>at least not any web dev experience. As a CS major I have<br>experience writing code in C/Java/C++/Python etc but none for HTML/PHP and very little<br>for SQL. I feel really good about my overall experience, I think having<br>a background in some programming in general allowed me to either understand what<br>I needed to do and how the code would work right away or<br>understand what I needed to research to get my code to work. It<br>also allowed me to be able to read the professor&#39;s code and figure<br>out how information is being moved around. The only thing that I would<br>do differently is probably apply more time to the project, it wasn&#39;t very<br>hard, but I underestimated the difficulty of it in general especially for debugging<br>aspects.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-3-api-project/grade/jv456" target="_blank">Grading</a></td></tr></table>