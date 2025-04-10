<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>BMI Calculator</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Weight (kg):</label>
            <input type="number" step="any" name="weight" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Height (cm):</label>
            <input type="number" step="any" name="height" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Calculate BMI</button>
    </form>
</body>
</html>