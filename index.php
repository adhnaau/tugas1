<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <div class="text-center mb-4">
            <h1>Contact Form</h1>
          </div>
          <form action="process_form.php" method="POST">
            <div class="mb-3">
              <label for="Name" class="form-label">Name</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Name..." required>
            </div>
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email.." required>
            </div>
            <div class="mb-3">
              <label for="Nim" class="form-label">Nim</label>
              <input type="Nim" name="Nim" id="Nim" class="form-control" placeholder="Nim.." required>
            <div class="mb-3">
              <label for="Message">Message</label>
              <textarea name="Message" id="" class="form-control" placeholder="Message..." required></textarea>
            </div>
            <!-- Add other form fields here -->
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
