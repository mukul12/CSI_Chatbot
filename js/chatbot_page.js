var array=[0,0,0,0,0,0];


function handleForm(counter)
{
    
    console.log(counter);

    $("#input").addClass("inputformname"+counter);
    
    if(counter!=0)
    {
        $(".inputformname"+counter-1).removeClass(".inputformname"+counter-1);
    }
    
    $(".inputformname"+counter).val("");
    if(counter==0)
    {
        $("#response").text("Please enter Team name");
        responsiveVoice.speak("Please enter Team name");
    $(".inputformname"+counter).attr("placeholder"," Team Name");
    console.log($("#form1"));
    
    }
    else  if(counter==1)
    {
        $("#response").text("Please enter Team Lead's Name");
        responsiveVoice.speak("Please enter Team Lead's Name");
    $(".inputformname"+counter).attr("placeholder"," Team Lead");
    }
    else  if(counter==2)
    {
        $("#response").text("Please enter Second Member's Name");
        responsiveVoice.speak("Please enter Second Member's Name");
    $(".inputformname"+counter).attr("placeholder"," Second Member");
    }
    else  if(counter==3)
    {
        $("#response").text("Please enter Third Member's Name");
        responsiveVoice.speak("Please enter Third Member's Name");
    $(".inputformname"+counter).attr("placeholder"," Third Member");
    }else  if(counter==4)
    {
        $("#response").text("Please enter Fourth Memmber's Name");
        responsiveVoice.speak("Please enter Fourth Memmber's Name");
    $(".inputformname"+counter).attr("placeholder"," Fourth Member");
    }else  if(counter==5)
    {
        $("#response").text("Please enter Team Lead's Phone no");
        responsiveVoice.speak("Please enter Team Lead's Phone no");
    $(".inputformname"+counter).attr("placeholder"," Phone no");
    
    }
    else
    {
            var data={
                team_name:$("#form1").val(),
                member1_name:$("#form2").val(),
                member2_name:$("#form3").val(),
                member3_name:$("#form4").val(),
                member4_name:$("#form5").val(),
                phone_no:$("#form6").val(),
                
               
            }
            // var data="team_name="+$("#form1").val()+"&member1_name="+$("#form2").val()+"&member2_name="+$("#form3").val()+"&member3_name="+$("#form4").val()+"&member4_name="+$("#form5").val()="&phone_no="+$("#form6").val();

            console.log(data);
            
        
                $.ajax({
                    type: "POST",
                    url: "controllers/insert_form_data.php",
                 
                    dataType: "json",
                   
                    data:data,
                    success: function (data) {
                       
                        console.log("success");
                    },
                    error: function () {
                        setResponse("Internal Server Error");
                    }
                });
                $('.registerForm').addClass("hidden");
         $("#response").text("Form submitted successfully.");
                      responsiveVoice.speak("Form submitted successfully. Do you want to ask me anything else? Please feel free to ask me anything about Codeshastra 3");


        for(var x=1;x<=6;x++)
        {
           //console.log("hello");
           
            
             // responsiveVoice.speak("Form submitted successfully. Do you want to ask me anything else? Please feel free to ask me anything about Codeshastra 3");
            $(".inputformname"+counter).attr("placeholder","");    
            $("#input").removeClass("inputformname"+x);
        }
        for(var t=0;t<array.length;t++)
        {
            array[t]=0;
        }
        
    }
    
    
    
    array[counter]=1;
    
    
}



