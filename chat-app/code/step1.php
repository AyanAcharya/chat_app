<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php
    include("data_class.php");

    if(empty($_SESSION['userid'])){
        header("Location:signin.php?msg=login first");
      }else{
        echo $_SESSION['userid'];
      }
    // echo '<script> sessionStorage.setItem("userID","'.$_SESSION['userid']. '");</script>';
    // echo '<script> alert(sessionStorage.getItem(userid));</script>';

    ?>
</head>
<style>

/* .radio {
	background: #454857;
	padding: 4px;
	border-radius: 3px;
	box-shadow: inset 0 0 0 3px rgba(35, 33, 45, 0.3),
		0 0 0 3px rgba(185, 185, 185, 0.3);
	position: relative;
} */

.radio input {
	width: auto;
	height: 100%;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	outline: none;
	cursor: pointer;
	/* border-radius: 2px;
    border-color: gray; */
	/* padding: 4px 8px; */
	color: #bdbdbdbd;
	font-size: 14px;
	font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
		"Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
		"Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	transition: all 100ms linear;
}

.radio input:checked {
	background-color:red;
	color: #fff;
	box-shadow: 0 1px 1px #0000002e;
	text-shadow: 0 1px 0px #79485f7a;
}

.radio input:before {
	content: attr(label);
	display: inline-block;
	text-align: center;
	width: 100%;
}
</style>
<body>
   
        <div class="mx-4">
               
        
        
        
        
            
            <div >
                <!-- -------------------------------------------------------------------------------------- -->
                <h2 class="flex justify-center my-8">COMPLETE YOUR PROFILE</h2>
                <div class="">

               
               <div class="mx-10 flex justify-evenly">
               <div class="grid place-items-center">
                <button class="h-8 w-8 bg-red-600 text-white rounded-full">1</button>
                <p class="text-xs my-4 text-gray-400">background</p>
                </div>
                
            
                <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">2</button>
                <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">3</button>
                <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">4</button>
                <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">5</button>
                <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">6</button>
                </div>
              
                
                </div>

                <!-- ---------------------------------------------------------------------------------------->

                <div>

                <div>
                    <form action="get_input1.php" method="POST">
                    <label>What's your nationality?</label>
                    <input class="py-3 border w-full rounded-md  " type="text" name="nationality" id="" placeholder="Add New">
                    <!-- ---------------------------------------------------------------------------------------->
                   
                    <div class="mt-6">
                    <label for="">Select your ethnicity :</label>
                    </div>
                  
                    <div class="mt-2 flex flex-wrap gap-1">
                    
                    <?php

                    $result=get_ethnicity($mysqli);
                    while($row=$result->fetch_assoc()){
                      
                        
                        echo '<label class="px-6 py-2 rounded-3xl w-fit border border-gray-300 text-gray-500 "  onclick="selectEthnicity('.$row['id'].')">'. $row['ethnicity'].'</label>';
                        
                    }

                     ?>
                     </div>
                     <input type="hidden" name="selected_ethnicities" value="selectedEthnicities">
                     <!-- ---------------------------------------------------------------------------------------->

                     <div class="">
                     <div class="my-2 flex justify-between">
                     <label for="small-range" class="block  text-lg font-medium text-gray-900 dark:text-white">Age</label>
                     <p id="demo"></p>
                    </div>
                     <input name="age" id="small-range" type="range" value="50" class="w-full h-0.5  mb-6 bg-gray-200 rounded-lg   accent-red-600 cursor-pointer">
                     </div>
                     

                        <!-- ---------------------------------------------------------------------------------------->
                    
                        <h2 class="my-3">Gender</h2>
                      
                        <div class="radio">
	                        <input class="border rounded-3xl px-7 py-2 mx-1" label="male" type="radio" id="male" name="gender" value="male" checked>
	                        <input class="border rounded-3xl px-7 py-2 " label="female" type="radio" id="female" name="gender" value="female">
	                        <input class="border rounded-3xl px-7 py-2 mx-1" label="others" type="radio" id="other" name="gender" value="other">
                            </div>
                     
                    
                            <button class="mt-8 bg-red-600 text-white w-full py-3 rounded-sm">CONTINUE</button>




                    </form>
                    <!-- ---------------------------------------------------------------------------------------->

                </div>




                </div>





             </div>














        </div>



    <script>
        var selectedEthnicities= [];

        function selectEthnicity(ethnicityId) {
            var index =selectedEthnicities.indexOf(ethnicityId);

            if(index=== -1){
                selectedEthnicities.push(ethnicityId);

            }else{
                selectedEthnicities.splice(index, 1);
            }

            console.log(selectedEthnicities);

            $('input[name="selected_ethnicities"]').val(selectedEthnicities.join(''));

           
        }
        // ----------------------------------------------------------------------------------------

        var slider=document.getElementById("small-range");
        var output =document.getElementById("demo");
        var yrs= "&nbsp;yrs";

        output.innerHTML=slider.value.concat(yrs);

        slider.oninput=function(){
            output.innerHTML=this.value.concat(yrs);
        }










    </script>

</body>
</html>