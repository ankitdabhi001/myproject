<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Booking System | Admin Panel</title>
    <link rel="stylesheet" href="css/admin_sidebar.css">
    <style>

    </style>
</head>

<body>
    <div class="sidebar">


        <!-- Profile Section -->
        <div class="profile">
            <h2>Boat Booking System||ADMIN</h2>

        </div>

        <!-- Menu Section -->
        <div class="sidebar">
            <ul class="menu">
                <li><a href=""><b>🏠Dashboard</b></a></li>
                <li>
                    <a href="#" id="br-drop" ><b>👥Sub Admin</b><span class="down-icon">▶</span></a>
                    <ul class="dropdown" id="br-dropdown">
                        <li><a href="subadmin.php" target="second"><b>Add</b></a></li>
                        <li><a href="" target="second"><b>Manage</b></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="cr-drop"><b>🚤Boats</b><span class="down-icon2">▶</span></a>
                    <ul class="dropdown" id="cr-dropdown">
                        <li><a href="boats.php" target="second"><b>Add Boats</b></a></li>
                        <!-- <li><a href="validationjs.php" target="second">Add Cars</a></li> -->
                        <li><a href="" target="second"><b>Manage Boats</b></a></li>
                    </ul>
                </li>

               
                <li>
                    <a href="#" id="bk-drop"><b>📄Bookings</b> <span class="down-icon3">▶</span></a>
                    <ul class="dropdown" id="bk-dropdown">
                        <li><a href="new-booking.php" target="second"><b>New Bookings</b></a></li>
                        <li><a href="" target="second"><b>Confirm Bookings</b></a></li>
                        <li><a href="" target="second"><b>Cancelled Bookings</b></a></li>
                        <li><a href="" target="second"><b>All Bookings</b></a></li>
                    </ul>
                </li>
               
                <li><a href="B-w_Dates.php" target="second"><b>📄B/W Dates Report</b></a></li>
                <li><a href="" target="second"><b>⚙Account Settings</b></a></li>
                
               
            </ul>


        </div>
    </div>
    <div>

        <iframe name="second" src="" height="100%"></iframe>

    </div>

    <script>
        function toggleDropdown(triggerId, dropdownId) {
            const trigger = document.getElementById(triggerId);
            const dropdown = document.getElementById(dropdownId);

            trigger.addEventListener('click', () => {
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
        }

        toggleDropdown('br-drop', 'br-dropdown');
        toggleDropdown('cr-drop', 'cr-dropdown');
        toggleDropdown('bk-drop', 'bk-dropdown');
    



        // for icon rotate sub admin
        document.getElementById("br-drop").addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the default anchor behavior
            const icon = document.querySelector(".down-icon");
            icon.classList.toggle("rotate");
        });

           // for icon rotate boats
           document.getElementById("cr-drop").addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the default anchor behavior
            const icon = document.querySelector(".down-icon2");
            icon.classList.toggle("rotate");
        });

           // for icon rotate bookings
           document.getElementById("bk-drop").addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the default anchor behavior
            const icon = document.querySelector(".down-icon3");
            icon.classList.toggle("rotate");
        });

   
    </script>

</body>

</html>