<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbershop Search</title>
    <link rel="stylesheet" href="welcome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
        .search-container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .search-bar {
            width: 100%;
            padding: 10px 40px 10px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 20px;
            color: #ccc;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="barbershop-list" id="barbershopList">
            <?php
            $barbershops = [
                [
                    'name' => 'Barbershop Arin 38#',
                    'address' => 'Sulaimanova 19a',
                    'availability' => '9:00-22:00',
                    'rating' => '★★★☆☆',
                    'logo' => '../assets/image.png'
                ],
                [
                    'name' => 'Barbershop Bella',
                    'address' => 'Main Street 10',
                    'availability' => '10:00-20:00',
                    'rating' => '★★★★☆',
                    'logo' => '../assets/image.png'
                ],
                [
                    'name' => 'Nurdaulet shashtaraz',
                    'address' => 'Sulaimanova 19a',
                    'availability' => '9:00-22:00',
                    'rating' => '★★★★☆',
                    'logo' => '../assets/image.png'
                ]
            ];

            foreach ($barbershops as $barbershop) {
                echo "<div class='barbershop-item'>";
                echo "<img src='{$barbershop['logo']}' alt='Barbershop Logo' class='barbershop-logo' />";
                echo "<div class='barbershop-details'>";
                echo "<h2 class='barbershop-name'>{$barbershop['name']}</h2>";
                echo "<p>{$barbershop['address']}</p>";
                echo "<p>Available: {$barbershop['availability']}</p>";
                echo "</div>";
                echo "<div class='barbershop-rating'>";
                echo "<span>{$barbershop['rating']}</span>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="search-container">
            <input style='padding-left:48px' type="text" id="searchBar" placeholder="Search Barbershop" class="search-bar" />
             
             <i  style="font-size:23px; position:absolute; margin-left: 15px; color:gray" class="fa">&#xf002;</i>
        </div>
    </div>
    <script>
        // jas.js
document.addEventListener('DOMContentLoaded', () => {
    const searchBar = document.getElementById('searchBar');
    const barbershopList = document.getElementById('barbershopList');
    const barbershops = barbershopList.getElementsByClassName('barbershop-item');

    searchBar.addEventListener('keyup', (e) => {
        const searchText = e.target.value.toLowerCase();

        Array.from(barbershops).forEach((barbershop) => {
            const barbershopName = barbershop.querySelector('.barbershop-name').textContent.toLowerCase();

            if (barbershopName.includes(searchText)) {
                barbershop.style.display = '';
            } else {
                barbershop.style.display = 'none';
            }
        });
    });
});

    document.getElementById('barbershopList').addEventListener('click', function() {
      window.location.href = 'hello.html';
    });
    </script>
</body>

</html>
