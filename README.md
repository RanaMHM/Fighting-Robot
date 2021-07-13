# Fighting Robot
### Fighting robot is the first project in summer training with [Smart Methods Foundation]
**Fighting robot is divided into two parts:**
>  1. The arm of the robot. → [Robot_Arm](https://github.com/RanaMHM/Robot_Arm) repository<br>
>    The HTML interface has been done to define the values of the arm motors and link them to the database through PHP . <br>

>  2. The base of the robot. →  [Robot_Base](https://github.com/RanaMHM/Robot_Base) repository.<br>
>     The HTML interface displays four buttons that direct the robot base in four directions and the PHP links the data with the database and displays it on a separate PHP page.  

<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ![fighting](https://user-images.githubusercontent.com/52053143/125397696-f3df9000-e3b6-11eb-875d-aa816abbdd7f.jpg)

***
#  Fighting_Robot control panels
*  The control panel of the arm and the control panel of the base have been merged into one main page by pressing the button named after each of them, then the panel will appear in the designated place. 

* Also, [Chatbot]((ChatBot)) has been added to the page.
* The 'Start again' button appears with the robot arm control panel and  the robot base control panel, When you click on it, it will go back to the beginning and delete all the data saved in the databases.
<br>**The databases have been linked to the "Start again" button through the [deletDDB.php](https://github.com/RanaMHM/Fighting_Robot/blob/main/CodeFiles/deletDDB.php)  databases file, with the addition of an order to delete data when clicking on the button.**<br>



<br><br>
![k](https://user-images.githubusercontent.com/52053143/125505520-cdd6be73-c91d-4f11-a67b-df36cabb5e16.jpg)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Figure1- Home page to control panels of Fighting Robot
<br> 


##  Video showing how the interface works <br>




https://user-images.githubusercontent.com/52053143/125515959-9cc59c0c-b2cb-4f18-90fa-a8512db54491.mp4









<br>

***


# ChatBot

### The chatbot was created by [IBM Waston](https://www.ibm.com/cloud/watson-assistant)
 
 * [chatbot.json](https://github.com/RanaMHM/Fighting_Robot/blob/main/chatbot.json)





https://user-images.githubusercontent.com/52053143/125519724-17c99715-d5a0-46f5-b8f9-abb477ed71e0.mp4

<br>

* References:

  - [shaimadotcom/ibm_watson_assistant](https://github.com/shaimadotcom/ibm_watson_assistant/blob/master/ibmWatsonTutorial_arabic.md)
  - [IOT-Smart Methods- youtube](https://www.youtube.com/watch?v=ACcECCgqISQ)
  - [Getting started with Watson Assistant](https://cloud.ibm.com/docs/assistant?topic=assistant-getting-started)


