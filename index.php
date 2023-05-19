<!DOCTYPE html>
<html>
<head>
  <title>Survey Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Survey Form</h1>
    <form action="process.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="feedback">Feedback:</label>
      <textarea id="feedback" name="feedback" required></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
