<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Details</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Barbershop Arin 38#</h1>
    </div>
    <div class="booking-details">
      <?php
      if (isset($_GET['message'])) {
        echo '<div class="message">' . htmlspecialchars($_GET['message']) . '</div>';
      }
      ?>

      <div class="booking-info">
         <p><strong>Fullname:</strong> <?php echo isset($_GET['fullname']) ? htmlspecialchars($_GET['fullname']) : ''; ?></p>
        <p><strong>Date:</strong> <?php echo isset($_GET['date']) ? htmlspecialchars($_GET['date']) : ''; ?></p>
        <p><strong>Time:</strong> <?php echo isset($_GET['time']) ? htmlspecialchars($_GET['time']) : ''; ?></p>
        <p><strong>Number:</strong> <?php echo isset($_GET['number']) ? htmlspecialchars($_GET['number']) : ''; ?></p>
        <p><strong>Age:</strong> <?php echo isset($_GET['age']) ? htmlspecialchars($_GET['age']) : ''; ?></p>
        <p><strong>Gender:</strong> <?php echo isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : ''; ?></p>
        <p><strong>Description:</strong> <?php echo isset($_GET['description']) ? htmlspecialchars($_GET['description']) : ''; ?></p>
      </div>
      <button id="ok-button">OK</button>
    </div>
  </div>

  <script>
    document.getElementById('ok-button').addEventListener('click', function() {
      window.location.href = 'message.php';
    });
  </script>
</body>
</html>
