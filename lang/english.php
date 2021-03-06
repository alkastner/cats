<?php
define("accept_Login_01","You are not registered. <br /> Please check your certificate information and confirm the Registration.");
define("accept_Login_02","certificate information");
define("accept_Login_03","Issued To:");
define("accept_Login_04","Common Name(CN)");
define("accept_Login_05","Serial Number");
define("accept_Login_06","email address  ");
define("accept_Login_07","Issued By:");
define("accept_Login_08","Organization");
define("accept_Login_09","Organizational Unit");
define("accept_Login_10","Issued on");
define("accept_Login_11","Expires on");
define("accept_Login_12","Register with this certificate?<br /><br />".
                         "Only the serial number of the certificate will be stored, but if you want to request a printed certificate after passing the test, it will have to be issued to the Common Name included in the certificate!<br />".
                         "No printed certificates can be issued for anonymous certificates (Common Name \"CAcert WoT User\").");
define("accept_Login_13","Validity:");
define("Button_01","create new topic");
define("Button_02","back to topic management");
define("Button_03","back to question management");
define("Button_04","new question");
define("Button_05","show as list");
define("Button_06","show as line chart");
define("Button_07","show as bar chart");
define("Button_08","best response");
define("Button_09","worst response");
define("Button_10","login succesful");
define("Button_11","save");
define("Button_12","save changes");
define("Button_13","edit answers");
define("Button_14","add answer");
define("Button_15","delete answer");
define("Button_16","evaluate test");
define("Button_17","statistic info");
define("Button_18","user info");
define("Button_19","test statistics");
define("Check_Cert_01","If you wish to get a document via postal service or via email, your name has to be included in the certificate!<br /> You can go ahead with the registration, but you can't choose the options <i>send via postal service</i> or <i>send via email</i>.<br /> The other choice is, you can cancel this registration and register with another certificate, in which your name is included.");
define("certificateDocu_01","If you like we can engross a document stating that you have sucessfully passed the Assurer test. The Document will be issued to your name as stated in your digital certifcate.");
define("certificateDocu_02","No, I don't need that document.");
define("certificateDocu_03","Yes, please send me the document as a pdf attachment via email  (We use the email-address and name provided in the certificate)");
define("certificateDocu_04","Yes, please send me the document via postal service to the following address :");
define("certificateDocu_05","firstname");
define("certificateDocu_06","lastname");
define("certificateDocu_07","street");
define("certificateDocu_08","zipcode");
define("certificateDocu_09","city");
define("certificateDocu_10","state");
define("certificateDocu_11","country");
define("certificateDocu_12","All fields have to be filled out, if you want to receive it via postal service.");
define("Class_Answer_01","details of answers");
define("Class_Answer_02","answers");
define("Class_Answer_03","answer");
define("Class_Answer_04","At least 2 answers have to be supplied.");
define("Class_Answer_05","At least one answer has to be marked as 'correct' and at least 2 answers have to be supplied.");
define("Class_Answer_06","At least one answer has to be marked as 'correct'");
define("Class_Answer_07","In a cloze correct and incorrect answers must be different");
define("Class_Answer_08","There has to be at least one correct and one incorrect answer");
define("Class_Answer_09","true");
define("Class_Answer_10","false");
define("Class_Progress_01","number of questions");
define("Class_Progress_02","Too much data stored in the database. "); // geh�rt zu Lernfortschritte_angezeigt
define("Class_Progress_03","View of latest");
define("Class_Progress_04","progress in learning");
define("Class_Progress_05","No more data available"); /*Bsp: Keine weiteren Infos zu : 5 Fragen */
define("Class_Progress_06","No mor information available for:");
define("Class_Progress_07","question(s)");
define("Class_Progress_08","incorrectly answered questions");
define("Class_Question_01","Click to see more information about this topic");
define("Class_Question_02","deactivate question");
define("Class_Question_03","activate question ");
define("Class_Question_04","delete question");
define("Class_Question_05","No questions available in database");
define("Class_Question_06","details on question");
define("Class_Quiz_01","There are not enough questions on this topic. Please choose another topic.");
define("Class_Quiz_02","test");
define("Class_Quiz_03","Evaluation of test");
define("Class_Quiz_04","Your total score is :");
define("Class_Quiz_05","Minimum requirement for the test is :");
define("Class_Quiz_06","You have achieved: "); /*Bsp: You have reached 0 %  .... */
define("Class_Quiz_07","and therefore you have");/* You have reached 0 %  and so you did not pass   */
define("Class_Quiz_08","passed the test.");
define("Class_Quiz_09","not passed the test.");/*Bsp:You have reached 0 %  and so you did not pass  */
define("Class_Quiz_10_AnonymousCert", "You did the test using an anonymous certificate so you can not request a printed or PDF certificate for passing the test.<br />");
define("Class_Quiz_11_RequestCert", "Request Certificate");
/* Original text 
define("Class_Quiz_12_ExplainCert", "Due to privacy concerns we may not collect your personal data here.<br /><br />".
                                    "To request a printed or PDF certificate send a mail to <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificate for AssurerChallenge\">education@cacert.org</a> and tell us if you want the printed or PDF version. If you'd like a printed certificate please include your postal address.<br />".
                                    "The mail may be <a class=\"http\" href=\"education.txt\">encrypted</a> and <b>must be signed by the certificate you used to do the test</b> so we can verify that you did pass the test by checking its serial number. ".
                                    "Have a look at the \"logged in as:\" box at the upper right corner to find out something about the certificate you are using.<br />".
                                    "<br /><em>For a printed certificate we'd ask you for a donation of about 5 EUR for mailing inside Europe and 10 EUR for global mail to cover the cost of handling and postage.<br />".
                                    "To make a donation using PayPal click the button below, <a class=\"http\" href=\"https://www.cacert.org/index.php?id=13\">https://www.cacert.org/index.php?id=13</a> shows you all methods to donate to CAcert.</em><br />".
                                    "<br />We are sorry for the inconvenience.<br />");*/
/* Replacement for the time we cannot handle certificate requests */
define("Class_Quiz_12_ExplainCert", "Due to privacy concerns we may not collect your personal data here.<br /><br />".
                                    "We currently cannot process requests for Certificates of Achievement. You may nevertheless request on by mailing to <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificate for AssurerChallenge\">education@cacert.org</a> but please expect that handling the request may need a <b>very</b> long time!<br />".
                                    "<br />We are sorry for the inconvenience.<br />");
define("Class_Quiz_13_Donate5", "5 EUR for postage inside Europe");
define("Class_Quiz_14_Donate10", "10 EUR for postage outside Europe");
define("Class_Topic_01","name");
define("Class_Topic_02","no. of questions");
define("Class_Topic_03","questions per test");
define("Class_Topic_04","requirement");
define("Class_Topic_05","edit topic");
define("Class_Topic_06","activate topic");
define("Class_Topic_07","Deactivate topic: All questions of this topic will be deactivated also.");
define("Class_Topic_08","Delete the topic with all assigned questions and answers");
define("Class_Topic_09","min. percentage has to be a number and must not be larger then 100");
define("Class_Topic_10","Topic already exists.");
define("Class_Topic_11","Number of questions has to be a non negative integer.");
define("Class_Topic_12","requirement");
define("Collect_Question_01","This question already exists ");
define("Collect_Question_02","At least one gap has to be defined. Gaps are created by [ ]. The correct answer has to be inside the brackets. All of the brackets need to be closed. ");
define("Collect_Question_03","enter question");
define("Function_getContent_01","Welcome");
define("Function_getContent_02_Intro",'<div class="centered">For a short introduction please have a look at <a href="http://wiki.cacert.org/wiki/AssurerChallenge" rel="external">the WiKi</a></div><br />');
define("Function_getTopic_01","show progress");
define("Function_getTopic_02","show statistics");
define("Function_getTopic_03","start test");
define("Function_reallyDel_01","erasure");
define("Function_reallyDel_02","Are you sure you want to delete this topic?");
define("Function_reallyDel_03","If you confirm this all questions and answers will be deleted also.");
define("Function_reallyDel_04","Are you sure you want to delete this question?");
define("Get_Content_01","Registration cancelled!");
define("Global_01","You have to be logged on to use this function");
define("Global_02","back");
define("Global_03","correct");
define("Global_04","date");
define("Global_05","Result");
define("Global_06","ID");
define("Global_07",'<h4 class="centered">No data available</h4>');
define("Global_08","question");
define("Global_09","topic");
define("Global_10","pos");
define("Global_11","frequency");
define("Global_12","type of question");
define("Global_13","Yes");
define("Global_14","No");
define("Global_15","answered correctly in %");
define("Global_16","You're not logged on at the moment");
define("Global_17","Login failed! A valid CAcert client certificate is required.");
define("Global_18","Question ID");
define("Global_19","Login failed");
define("Global_20","description");
define("Index_01","logged in as :");
define("Login_01","Your certificate could not be validated.");
define("Login_02","Your certificate has been revoked.");
define("Login_03_No_Org_Certs","Organisation certificates are not accepted for CATS since they cannot be easily traced to a user account.");
define("Login_04_No_Server_Certs","Your certificate does not contain an Email field, you are probably using a server certificate.<br />".
                                  "Server certificates cannot be used to log in to CATS since they do not identify a person.");
define("Menue_01","Help");
define("Menue_02","Login");
define("Menue_03","Logout");
define("Menue_04","Progress");
define("Menue_05","Statistics");
define("Menue_06","Tests");
define("Menue_07","Topics");
define("Menue_08","EN");
define("Menue_09","DE");
define("Statistic_01","best result for topic: ");
define("Statistic_02","worst result for topic: ");
define("Statistic_03","questions in this topic:");
define("Statistic_04","passed");
define("Statistic_05","failed");
define("Statistic_06","user informationen");
define("Statistic_07","User");
define("Statistic_08","registered users");
define("Statistic_09","administrators");
define("Statistic_10","root certificates");
define("Statistic_11","user Class I certificate");
define("Statistic_12","user Class III certificate");
define("Statistic_13","language settings");
define("Statistic_14","german");
define("Statistic_15","english");
define("Statistic_16","shipping option ");
define("Statistic_17","mail");
define("Statistic_18","email");
define("Statistic_19","none");
define("Statistic_20","test infos");
define("Statistic_21","date");
define("Statistic_22","tests completed");
define("Statistic_23","passed tests");
define("Statistic_24","french");
define("Title_01","CATS topics");
define("Title_02","CATS collect questions");
define("Title_03","CATS statistic");
define("Title_04","CATS start Test");
define("Title_05","CATS learnprogress");
define("Title_06","CATS certificate info");
define("Topic_01","Note: You cannot declare answers as correct here, that have been declared incorrect below.");
define("Topic_02","Topics Overview");
define("Topic_03","questions on this topic:");
?>
