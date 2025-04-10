<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>BMI Result</h2>
    <p>Name: <?= htmlspecialchars($bmiData['name']) ?></p>
    <p>Weight: <?= $bmiData['weight'] ?> kg</p>
    <p>Height: <?= $bmiData['height'] ?> cm</p>
    <p>BMI: <?= number_format($bmiData['bmi'], 2) ?></p>
    <p>Status: <?= $bmiData['status'] ?></p>
    <a href="index.php" class="btn btn-secondary">Back</a>
</body>
</html>