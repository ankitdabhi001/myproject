<?php
$boat_services = [
    ["route" => "Assi Ghat — Shivala Ghat", "price" => 80, "image" => "css/images/boat1.jpg"],
    ["route" => "Assi Ghat — Ramnagar", "price" => 100, "image" => "images/boat2.jpg"],
    ["route" => "Assi Ghat — Harishchandra Ghat", "price" => 250, "image" => "images/boat3.jpg"],
    ["route" => "Varanasi — Allahabad", "price" => 110, "image" => "images/boat4.jpg"],
    ["route" => "—", "price" => 120, "image" => "images/boat5.jpg"],
    ["route" => "Assi Ghat — Ramanagar", "price" => 200, "image" => "images/boat6.jpg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card .details {
            padding: 15px;
        }
        .card .details h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .card .details .price {
            font-size: 16px;
            color: #007BFF;
            margin: 5px 0;
        }
        .card .details .price::before {
            content: "$";
        }
        .card button {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
            margin-top: 10px;
        }
        .card button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <?php foreach ($boat_services as $service): ?>
        <div class="card">
            <img src="<?= $service['image']; ?>" alt="Boat">
            <div class="details">
                <h3><?= $service['route']; ?></h3>
                <div class="price"><?= $service['price']; ?></div>
                <button>Book</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>