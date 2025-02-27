<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
        @font-face {
            font-family: 'pop-regular';
            src: url('../font/Poppins-Regular.ttf');
        }

        body {
            font-family: 'pop-regular', sans-serif;
            margin: 20px;
            background-color:rgb(221, 224, 227);
        }
        .container {
            width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .search-container {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }
        .search-container input {
            padding: 10px;
            font-size: 14px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #fff;
        }
        tr:hover {
            background-color: #ddd;
        }
        .action a {
            text-decoration: none;
            padding: 6px 12px;
            background: #28a745;
            color: white;
            border-radius: 5px;
        }
        .action a:hover {
            background: #218838;
        }
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
            .search-container input {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Booking</h1>
        <div class="search-container">
            <input type="text" id="search" placeholder="Search..." onkeyup="searchTable()">
        </div>
        <table id="bookingTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Booking NO</th>
                    <th>Name</th>
                    <th>Email Id</th>
                    <th>Mobile No</th>
                    <th>No. People</th>
                    <th>Booking Date/Time</th>
                    <th>Posting_date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                @include "include/config.php";
                $Posting_date = 0;
                $sql = "SELECT * FROM new_booking WHERE Posting_date=$Posting_date";
                $result = mysqli_query($conn, $sql);
                $n = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Booking NO']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email Id']; ?></td>
                        <td><?php echo $row['Mobile No']; ?></td>
                        <td><?php echo $row['No. People']; ?></td>
                        <td><?php echo $row['Booking Date/Time']; ?></td>
                        <td><?php echo ($row['Posting_date'] == 0) ? "Not Confirmed Yet" : "Confirmed"; ?></td>
                        <td class="action">
                            <a href="Approve.php?bno=<?php echo $row['Booking NO']; ?>&userEmail=<?php echo $row['userEmail']; ?>&did=<?php  echo $row['did']  ; ?>">Approve</a>
                        </td>
                    </tr>
                <?php
                $n++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function searchTable() {
            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll("#bookingTable tbody tr");
            
            rows.forEach(row => {
                let text = row.textContent.toLowerCase();
                row.style.display = text.includes(input) ? "" : "none";
            });
        }
    </script>
</body>
</html>