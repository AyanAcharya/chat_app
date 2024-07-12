<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("data_class.php");
    ?>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body>

<div class="mx-4">
    <!-- -------------------------------------------------------------------------------------- -->
    <h2 class="flex justify-center my-8">COMPLETE YOUR PROFILE</h2>
    <div class="">
        <div class="mx-10 flex justify-evenly">
            <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">1</button>
            <div class="grid place-items-center">
                <button class="h-8 w-8 bg-red-600 text-white rounded-full">2</button>
                <p class="text-xs my-4 text-gray-400">Education</p>
            </div>
            <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">3</button>
            <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">4</button>
            <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">5</button>
            <button class="h-8 w-8 bg-gray-300 text-gray-500 rounded-full">6</button>
        </div>
    </div>

    <p>Which university did you attend?</p>

    

    

    <div>
        <button class="border border-rose-600 my-5  py-3 w-full text-red-400" onclick="openModal()">Add New</button>
    </div>
    <div id="Modal" class="" style="display: none;">
        <button class="" onclick="closeModal()">close</button>

        <div class="mx-3">
        <div class="">

        <input type="text" class="my-1 py-5 text-xs w-full border border-slate-950" id="searchInput" oninput="searchlist()" placeholder="Search university...">
    
            </div>
            
           <div id="universityList" style="display:block">
        <!-- Universities will be loaded here dynamically -->
    </div>
            
        </div>
    </div>
</div>

<script>
     var searchTimeout;
    // ==============================================================================================================================================================================================
    const modal = document.getElementById('Modal');
    // var button = document.getElementsByClassName("university");

    function openModal() {
        modal.style.display = 'block';
        // button.style.display = 'none';
        
    }

    function closeModal() {
        modal.style.display = 'none';
    }


 // ========================================================================================================================================
 function fetchUniversities(search) {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("universityList").innerHTML = this.responseText;
            }
        };

        xhttp.open("GET", "fetch_universities.php?search=" + search, true);
        xhttp.send();
    }

    function searchlist() {
        var input = document.getElementById("searchInput");
        var filter = input.value.toUpperCase();

        var buttons = document.getElementsByClassName("university"); // Fetch universities dynamically

        if (filter === "") {
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].style.display = "none";
            }
            return;
        }

        for (var i = 0; i < buttons.length; i++) {
            var button = buttons[i];
            var name = button.textContent || button.innerText;

            if (name.toUpperCase().indexOf(filter) > -1) {
                button.style.display = "";
            } else {
                button.style.display = "none";
            }
        }

        clearTimeout(searchTimeout);

        // Introduce a small delay (e.g., 300ms) before calling fetchUniversities
        searchTimeout = setTimeout(function () {
            fetchUniversities(filter);
        }, 800);
    }
// ========================================================================================================================================



// ==============================================================================================================================================================================================



</script>
    
</body>
</html>
