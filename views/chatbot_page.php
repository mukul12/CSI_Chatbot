

<html>
    <head>
        <title>CSI_CHATBOT</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript">
            var accessToken = "a043d14bc2704b9884ac8c1da9138793";
            var baseUrl = "https://api.api.ai/v1/";
            $(document).ready(function () {
                setTimeout(function(){   $("#response").text("Welcome to CodeShastra 3. I am Aashiq here to serve you!");
                      responsiveVoice.speak("Welcome to CodeShastra 3. I am Aashiq here to serve you!"); }, 3000);


              

                $("#input").keypress(function (event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        var msg=$("#input").val();
                       
                        console.log($("#input"));
                         console.log(msg);
                        var message=msg.toLowerCase();
                        if (message.indexOf("register") != -1 ||$("#input").hasClass("inputformname0")||$("#input").hasClass("inputformname1")||$("#input").hasClass("inputformname2")||$("#input").hasClass("inputformname3")||$("#input").hasClass("inputformname4")||$("#input").hasClass("inputformname5"))
                        {	
                            $(".registerForm").removeClass("hidden");
                            var i=0;
                           
                            
                            for(var j=0;j<array.length;j++)
                            {
                                if(array[j]==0)
                                {
                                    break;
                                }
                                if(array[j]==1)
                                {   $("#input").removeClass("inputformname"+j);
                                    i++;
                                }
                            }
                            if(i==0)
                            {
                                for(var m=1;m<=6;m++)
                                {
                                    $("#form"+m).val("");
                                }
                            }
                                
                            console.log("rula diya bhai tyne");
                            console.log(msg);
                            if(i!=0)
                            {
                            $("#form"+i).val(msg); 
                            
                            }
                            console.log("hello");
                            console.log(i);
                            
                            
                           
                          handleForm(i);
                      }
                      else
                      {     $(".registerForm").addClass('hidden');
                           $("#response").text("");
                            $("#input").attr("placeholder","");
                          send();
                      }
                        
                        
                       
                    }
                });
                $("#rec").click(function (event) {
                    switchRecognition();
                });
            });
            var recognition;
            function startRecognition() {
                recognition = new webkitSpeechRecognition();
                recognition.onstart = function (event) {
                    updateRec();
                };
                recognition.onresult = function (event) {
                    var text = "";
                    for (var i = event.resultIndex; i < event.results.length; ++i) {
                        text += event.results[i][0].transcript;
                    }
                    setInput(text);
                    stopRecognition();
                };
                recognition.onend = function () {
                    stopRecognition();
                };
                recognition.lang = "en-US";
                recognition.start();
            }

            function stopRecognition() {
                if (recognition) {
                    recognition.stop();
                    recognition = null;
                }
                updateRec();
            }
            function switchRecognition() {
                if (recognition) {
                    stopRecognition();
                } else {
                    startRecognition();
                }
            }
            function setInput(text) {
                $("#input").val(text);

                var msg=$("#input").val();
              
                 if (msg.indexOf("register") != -1 ||$("#input").hasClass("inputformname0")||$("#input").hasClass("inputformname1")||$("#input").hasClass("inputformname2")||$("#input").hasClass("inputformname3")||$("#input").hasClass("inputformname4")||$("#input").hasClass("inputformname5"))
                        {
                            $(".registerForm").removeClass("hidden");
                            var i=0;
                           
                            
                            for(var j=0;j<array.length;j++)
                            {
                                if(array[j]==0)
                                {
                                    break;
                                }
                                if(array[j]==1)
                                {   $("#input").removeClass("inputformname"+j);
                                    i++;
                                }
                            }
                            if(i==0)
                            {
                                for(var m=1;m<=6;m++)
                                {
                                    $("#form"+m).val("");
                                }
                            }
                                
                            console.log("rula diya bhai tyne");
                            console.log(msg);
                            if(i!=0)
                            {
                            $("#form"+i).val(msg); 
                            
                            }
                            console.log("hello");
                            console.log(i);
                            
                            
                           
                          handleForm(i);
                      }
                      else
                      {     $(".registerForm").addClass('hidden');
                           $("#response").text("");
                            $("#input").attr("placeholder","");
                          send();
                      }
                        
                        
                    
                    
                //send();
            }
            function updateRec() {
                $("#rec").toggleClass("fa-microphone-slash")
            }
            function send() {
                var text = $("#input").val();
                console.log("text :" + text);
                var msg = text.toString();
                console.log(msg.indexOf("register"));




                $.ajax({
                    type: "POST",
                    url: baseUrl + "query?v=20150910",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    headers: {
                        "Authorization": "Bearer " + accessToken
                    },
                    data: JSON.stringify({query: text, lang: "en", sessionId: "somerandomthing"}),
                    success: function (data) {
                        setResponse(JSON.stringify(data, undefined, 2));
                    },
                    error: function () {
                        setResponse("Internal Server Error");
                    }
                });
                setResponse("Loading...");

            }
            function setResponse(val) {
//                    console.log(JSON.parse(val));
                var jsonobj = JSON.parse(val);
                console.log(jsonobj.result.fulfillment.speech);
                var responsetext = jsonobj.result.fulfillment.speech;
                $("#response").text(responsetext);
                responsiveVoice.speak(responsetext);
            }
        </script>



       <script>

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>


    </head>
    <body class="container"  >
        <div class="row">
            <div class="col-sm-7">

                <div class="registerForm hidden " >
                
                        <label for="team_name" style="color: #98FB98;">TEAM NAME</label>
                        <input type="text" class="form-control" name="team_name" id="form1" >

                        <label for="team_name" style="color:#98FB98;"> TEAM MEMBER 1(Team Lead)</label>
                        <input type="text" class="form-control" name="team_member1" id="form2" >

                        <label for="team_name" style="color:#98FB98;">TEAM MEMBER 2</label>
                        <input type="text" class="form-control" name="team_member2" id="form3" >

                        <label for="team_name" style="color:#98FB98;">TEAM MEMBER 3</label>
                        <input type="text" class="form-control" name="team_member3" id="form4" >

                        <label for="team_name" style="color:#98FB98;">TEAM MEMBER 4</label>
                        <input type="text" class="form-control" name="team_member4" id="form5" >

                        <label for="team_name" style="color:#98FB98;">PHONE NO(Team Lead)</label>
                        <input type="number" class="form-control" name="phone_no" id="form6" >




                    </form>

                </div>

                <div id="txt" >

                </div>
            </div>


            <div class=" col-sm-5 ">
                <input id="input" class="form-control" type="text"  > <i id="rec"  class="fa fa-microphone positionset chupa" aria-hidden="true"></i>


                <br>Response<br> <textarea id="response" class="form-control" rows="20"></textarea>

            </div>
        </div>
    </body>
</html>

