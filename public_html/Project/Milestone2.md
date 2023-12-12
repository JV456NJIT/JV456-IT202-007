<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Jose Ventura (jv456)</td></tr>
<tr><td> <em>Generated: </em> 12/12/2023 3:27:50 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/jv456" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T17.27.11Events%20Table.png.webp?alt=media&token=129b932d-513a-4bba-8358-caa825f0ff8c"/></td></tr>
<tr><td> <em>Caption:</em> <p>ID: Primary Key for Event Entries<br>API_ID: Combination of artist name, API page number,<br>and entry number from API.<br>Description: concat of artist name, event venue,  and<br>event time.<br>image: URL to artist image.<br>venue: Venue where event will take place.<br>country: Country<br>where event will take place.<br>locality: Locality(State/Province) where event will take place.<br>time: Time event<br>starts at<br>created: Date event was loaded into database either from API or manually.<br>modified:<br>Date event was last modified<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>Only one new table: Events.<div><div>ID: Primary Key for Event Entries</div><div>API_ID: Combination of artist<br>name, API page number, and entry number from API.</div><div>Description: concat of artist name,<br>event venue,&nbsp; and event time.</div><div>image: URL to artist image.</div><div>venue: Venue where event will<br>take place.</div><div>country: Country where event will take place.</div><div>locality: Locality(State/Province) where event will take<br>place.</div><div>time: Time event starts at</div><div>created: Date event was loaded into database either from<br>API or manually.</div><div>modified: Date event was last modified</div></div><div><br></div><div>where $event is an array containing<br>data pulled from the API. Below is the code for accessing the data<br>from the API as well as SQL query ran to insert data into<br>my DB.</div><div><br></div><div><div style="color: rgb(204, 204, 204); background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #9cdcfe;">$imageData</span><span style="color: #d4d4d4;"> = </span><span style="color:<br>#9cdcfe;">$event</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;image&quot;</span><span style="color: #d4d4d4;">];</span></div><div><span style="color: #9cdcfe;">$artistData</span><span style="color: #d4d4d4;"> = </span>&lt;span<br>style=&quot;color: #9cdcfe;&quot;&gt;$event</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;name&quot;</span><span style="color: #d4d4d4;">];</span></div><div><span style="color: #9cdcfe;">$venueData</span><span style="color: #d4d4d4;"> =<br></span><span style="color: #9cdcfe;">$event</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;location&quot;</span><span style="color: #d4d4d4;">][</span><span style="color: #ce9178;">&quot;name&quot;</span><span style="color: #d4d4d4;">];</span></div><div>&lt;span<br>style=&quot;color: #9cdcfe;&quot;&gt;$countryData</span><span style="color: #d4d4d4;"> = </span><span style="color: #9cdcfe;">$event</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;location&quot;</span><span style="color:<br>#d4d4d4;">][</span><span style="color: #ce9178;">&quot;address&quot;</span><span style="color: #d4d4d4;">][</span><span style="color: #ce9178;">&quot;addressCountry&quot;</span><span style="color: #d4d4d4;">];</span></div><div><span style="color: #9cdcfe;">$localityData</span><span style="color: #d4d4d4;"><br>= </span><span style="color: #9cdcfe;">$event</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;location&quot;</span><span style="color: #d4d4d4;">][</span><span style="color: #ce9178;">&quot;address&quot;</span><span style="color:<br>#d4d4d4;">][</span><span style="color: #ce9178;">&quot;addressLocality&quot;</span><span style="color: #d4d4d4;">];</span></div><div><span style="color: #9cdcfe;">$timeData</span><span style="color: #d4d4d4;"> = </span><span style="color: #9cdcfe;">$event</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt;[</span><span style="color: #ce9178;">&quot;startDate&quot;</span><span style="color: #d4d4d4;">];</span></div><div><span style="color: #9cdcfe;">$timeDataDescription</span><span style="color: #d4d4d4;"> = </span><span style="color:<br>#dcdcaa;">date</span><span style="color: #d4d4d4;">(</span><span style="color: #ce9178;">&#39;D-M-d-Y h:i&#39;</span><span style="color: #d4d4d4;">, </span><span style="color: #dcdcaa;">strtotime</span><span style="color: #d4d4d4;">(</span>&lt;span<br>style=&quot;color: #9cdcfe;&quot;&gt;$timeData</span><span style="color: #d4d4d4;">));</span></div><div><span style="color: #9cdcfe;">$descriptionData</span><span style="color: #d4d4d4;"> = </span><span style="color: #9cdcfe;">$artistData</span><span style="color:<br>#d4d4d4;"> </span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot; at the &quot;</span><span style="color:<br>#d4d4d4;"> </span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #9cdcfe;">$venueData</span><span style="color: #d4d4d4;"> </span><span style="color:<br>#d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot; on &quot;</span><span style="color: #d4d4d4;"> </span><span style="color: #d4d4d4;">.</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt; </span><span style="color: #9cdcfe;">$timeDataDescription</span><span style="color: #d4d4d4;">;</span></div><div><span style="color: #9cdcfe;">$timeData</span><span style="color: #d4d4d4;"> = </span>&lt;span<br>style=&quot;color: #dcdcaa;&quot;&gt;date</span><span style="color: #d4d4d4;">(</span><span style="color: #ce9178;">&#39;Y-m-d H:i:s&#39;</span><span style="color: #d4d4d4;">, </span><span style="color: #dcdcaa;">strtotime</span><span style="color:<br>#d4d4d4;">(</span><span style="color: #9cdcfe;">$timeData</span><span style="color: #d4d4d4;">));</span></div><div><span style="color: #9cdcfe;">$api_idData</span><span style="color: #d4d4d4;"> = </span><span style="color: #9cdcfe;">$artistData</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt; </span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot;P:&quot;</span><span style="color: #d4d4d4;"> </span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt;.</span><span style="color: #d4d4d4;"> </span><span style="color: #9cdcfe;">$result</span><span style="color: #d4d4d4;">[</span><span style="color: #ce9178;">&quot;page&quot;</span><span style="color: #d4d4d4;">]<br></span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot;E:&quot;</span><span style="color: #d4d4d4;"> </span><span style="color: #d4d4d4;">.</span>&lt;span<br>style=&quot;color: #9cdcfe;&quot;&gt;$i</span><span style="color: #d4d4d4;">;</span></div><div><span style="color: #9cdcfe;">$descriptionData</span><span style="color: #d4d4d4;"> = </span><span style="color: #9cdcfe;">$artistData</span><span style="color:<br>#d4d4d4;"> </span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot; at the &quot;</span><span style="color:<br>#d4d4d4;"> </span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #9cdcfe;">$venueData</span><span style="color: #d4d4d4;"> </span><span style="color:<br>#d4d4d4;">.</span><span style="color: #d4d4d4;"> </span><span style="color: #ce9178;">&quot; on &quot;</span><span style="color: #d4d4d4;"> </span><span style="color: #d4d4d4;">.</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt; </span><span style="color: #9cdcfe;">$timeData</span><span style="color: #d4d4d4;">;</span></div><div><span style="color: #dcdcaa;">date_default_timezone_set</span><span style="color: #d4d4d4;">(</span><span style="color: #ce9178;">&#39;America/New_York&#39;</span>&lt;span<br>style=&quot;color: #d4d4d4;&quot;&gt;);</span></div><div><span style="color: #9cdcfe;">$created</span><span style="color: #d4d4d4;"> = </span><span style="color: #dcdcaa;">date</span><span style="color: #d4d4d4;">(</span><span style="color:<br>#ce9178;">&#39;Y-m-d H:i:s&#39;</span><span style="color: #d4d4d4;">, </span><span style="color: #dcdcaa;">time</span><span style="color: #d4d4d4;">());</span></div><div><span style="color: #d4d4d4;"><br></span></div><div><div style="line-height: 19px;">&lt;span<br>style=&quot;color: #569cd6;&quot;&gt;INSERT</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">INTO</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">Events</span><span style="color:<br>#ce9178;"> (api_id, </span><span style="color: #569cd6;">description</span><span style="color: #ce9178;">, </span><span style="color: #569cd6;">image</span><span style="color: #ce9178;">, artist<br>, venue, country, locality, </span><span style="color: #569cd6;">time</span><span style="color: #ce9178;">, created)</span></div><div style="line-height: 19px;"><span style="color:<br>#dcdcaa;">VALUES</span><span style="color: #ce9178;">(:api_id, :</span><span style="color: #569cd6;">description</span><span style="color: #ce9178;">, :</span><span style="color: #569cd6;">image</span><span style="color: #ce9178;">,<br>:artist, :venue, :country, :locality, :</span><span style="color: #569cd6;">time</span><span style="color: #ce9178;">, :created)</span></div></div></div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/37/">https://github.com/JV456NJIT/JV456-IT202-007/pull/37/</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T17.37.10API%20Data%20Upload.png.webp?alt=media&token=089d896c-b732-445b-8a29-6537e41886df"/></td></tr>
<tr><td> <em>Caption:</em> <p>Search API for data. Enter name &amp; page number. Page number required for<br>my API.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.37.24Event%20Creation.png.webp?alt=media&token=6cadc067-7012-4ba2-ba25-d4ef884d7483"/></td></tr>
<tr><td> <em>Caption:</em> <p>Manually enter an event data. IE IT202 final date with professor Toegel.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.38.05Event%20Creation%20Success.png.webp?alt=media&token=e513dba4-b4d7-496f-98e0-d45dfd3b90e5"/></td></tr>
<tr><td> <em>Caption:</em> <p>Successful entry of data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.40.01Event%20Database%20Items.png.webp?alt=media&token=aec16963-72e8-4c26-9430-30c5c5396be6"/></td></tr>
<tr><td> <em>Caption:</em> <p>Artist Matt Toegel is manually created and API_ID reflects this. All other items<br>were loaded from API<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>Description is set to be a concat of the artist venue and time,<br>if description matches the API_ID is changed to the most recent entry for<br>it. Only Admins can create entities.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/event_profile.php">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/event_profile.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/manage_events.php">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/manage_events.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/37">https://github.com/JV456NJIT/JV456-IT202-007/pull/37</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/43">https://github.com/JV456NJIT/JV456-IT202-007/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.46.29List%20Data.png.webp?alt=media&token=d7bafbfb-384a-418f-bb9d-1c85753ec54f"/></td></tr>
<tr><td> <em>Caption:</em> <p>Data showing API generated data, will also show our manually entered data for<br>IT202 final but not filtering for that.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.49.29List%20Data%20Empty.png.webp?alt=media&token=21d2e18e-a240-4af8-a082-4ad57cfffb1b"/></td></tr>
<tr><td> <em>Caption:</em> <p>No results due to filter. Country auto resets, but countryID can be found<br>on URL link.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Users must be logged in to access my website overall. Logged out users<br>can not do anything on my site.<div>Admin role for loading data from API,<br>loading data manually, editing data, and deleting data.</div><div>User role only allows you to<br>view data.</div><div>We are being shown a list of all upcoming events by a<br>specific artist in a specific country sorted in ascending or descending locality(state/province) region<br>or sorted by country and then locality if country is selected to be<br>any limited to the number in the limit value.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/browse.php">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/browse.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/39">https://github.com/JV456NJIT/JV456-IT202-007/pull/39</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.54.24benito.png.webp?alt=media&token=ae9dd811-6583-449e-b7fc-1c4dc0264cde"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing results of data<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.55.37denito%20detail.png.webp?alt=media&token=2519cd85-6e9d-4f8f-a781-b5f27753f6c4"/></td></tr>
<tr><td> <em>Caption:</em> <p>Specific event page ID=27<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.56.45invalid%20ID.png.webp?alt=media&token=0862d6b8-70fc-41a2-a2b8-677d33bb49be"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid ID redirect<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Time reformatted to be more user friendly.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/event_profile.php?id=20">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/event_profile.php?id=20</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/39">https://github.com/JV456NJIT/JV456-IT202-007/pull/39</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T19.58.44edit%20data.png.webp?alt=media&token=30b8860f-937a-473e-bea0-672fbdb28d77"/></td></tr>
<tr><td> <em>Caption:</em> <p>basic data edit page from clicking edit in the browse section brings you<br>here. preloads all current data from the database for editing.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.00.25edit%20empty%20field.png.webp?alt=media&token=b5fb81ee-770d-46d5-ba9b-ca93093020d4"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message for empty required field<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/event_profile.php?id=20">https://it202-jv456-prod-5aec0d224329.herokuapp.com/Project/admin/event_profile.php?id=20</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/37">https://github.com/JV456NJIT/JV456-IT202-007/pull/37</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.02.11pre-delete.png.webp?alt=media&token=f6315ea0-e186-4791-8773-579c12725924"/></td></tr>
<tr><td> <em>Caption:</em> <p>delete option shown for admins only,<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.02.51post-delete.png.webp?alt=media&token=2594fc92-6d12-499d-909a-856f53fcb27e"/></td></tr>
<tr><td> <em>Caption:</em> <p>after delete is clicked and success<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.04.54delete%20code.png.webp?alt=media&token=719e126e-877b-478a-ac41-ab5a703be9ed"/></td></tr>
<tr><td> <em>Caption:</em> <p>no option for invalid ID since you can only delete from browse after<br>we pull an event card so the ID can&#39;t be invalid<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>only admins can delete.<div>deletion is a hard delete since i dont have a<br>table flag to not show specific events.</div><div>list page reloads all unique artist names<br>and venue locations everytime it loads</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/41">https://github.com/JV456NJIT/JV456-IT202-007/pull/41</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.08.39get%20data%20browse%20start.png.webp?alt=media&token=9b01022e-3d13-44f3-b7ba-7fa913460efa"/></td></tr>
<tr><td> <em>Caption:</em> <p>1: browse calls function search events<br>3: after search returns we call render_event_list_item which<br>calls event cards to display<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.13.56search%20events%20acquires%20data%20from%20DB.png.webp?alt=media&token=9c1e8dea-e093-4225-b9a4-8a6a25010ca8"/></td></tr>
<tr><td> <em>Caption:</em> <p>2: search events looks for data in DB based on search form criteria<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.15.30event%20card.png.webp?alt=media&token=9f105c13-be35-4496-a09c-8dea2683808f"/></td></tr>
<tr><td> <em>Caption:</em> <p>4: display event cards<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.17.22api%20to%20db.png.webp?alt=media&token=4aa456f6-e03d-4a42-895e-d5391f7d6133"/></td></tr>
<tr><td> <em>Caption:</em> <p>how we load API data into DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>admins access the manage events page and supply an artist name and page<br>number, page number is needed for my API since it only outputs 50<br>events at a time.<div>we then map all the values we want from the<br>API to variables. we create a query for inserting the data into the<br>DB and bind all of our variables to their corresponding values. The data<br>in the DB is then used to allow the user to search our<br>database for upcoming events in a specific country for a certain artist.</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/JV456NJIT/JV456-IT202-007/pull/43">https://github.com/JV456NJIT/JV456-IT202-007/pull/43</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>I ran into a fair amount of issues with sending data between the<br>actual page that is being viewed file, lib files, and partial files. There<br>was a lot of cleaning up and redoing of the table to make<br>sure that the data I was getting was the data I actually wanted<br>to display. Many issues with writing the queries correctly and figuring out how<br>to properly pass variables to the queries depending on what it is I<br>needed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>Once I figured out how to do one query doing the rest was<br>pretty easy since I followed the same format throughout them all.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>Managing all the data being used for $_POST and $_GET across the multiple<br>files needed.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>thankfully not.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjv456%2F2023-12-12T20.25.47project%20board.png.webp?alt=media&token=8de8c880-0822-448b-8670-5b99efb8327a"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/jv456" target="_blank">Grading</a></td></tr></table>