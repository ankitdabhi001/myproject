<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="admin_profile.css">
</head>
<body>
    <div class="container">
        <h2>My Profile</h2>
        <div class="card">
            <h3>Update the Info</h3>
            <form>
                <label>Username (used for login)</label>
                <input type="text" value="admin" disabled>

                <label>Full Name</label>
                <input type="text" placeholder="Enter Sub-Admin Full Name">

                <label>Email address</label>
                <input type="email" placeholder="Enter email">

                <label>Mobile Number</label>
                <input type="tel" placeholder="Enter mobile number">

                <label>Registration Date</label>
                <input type="text" value="2024-09-01 00:00:00" disabled>

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>