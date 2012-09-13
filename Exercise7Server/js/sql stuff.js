$(function(){

	
	console.log('wee');
select userVideos.userName ,videoLink
from users
join userVideos
on userVideos.userName= users.userName
where userVideos.userName= "aaa"
;/*grabs all the video links of that username you tell it*/

select exercise_User
from users
join userTypes
on userTypes.userTypeId = users.userTypeId
where users.userTypeId = 2;/* this joins and tell me what is the type of user i have depending on the id it has 1 or 2 */

});



