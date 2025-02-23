
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Subadmin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			  
        }
        .container {
            height: 400px;
			width:600px;
            background: white;
            padding: .75rem 1.25rem;
			position: relative;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-top-left-radius: .25rem;
			border-top-right-radius: .25rem;
            font-size: 18px;
            font-weight: bold;
			box-sizing: border-box;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
         
			margin-left:270px;
            background: #0284c7;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background: #0369a1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Create Subadmin</div>
        <form>
            <label>Username (used for login)</label>
            <input type="text" placeholder="Enter Sub-Admin Username">
            
            <label>Full Name</label>
            <input type="text" placeholder="Enter Sub-Admin Full Name">
            
            <label>Email address</label>
            <input type="email" placeholder="Enter email">
            
            <label>Mobile Number</label>
            <input type="text" placeholder="Enter mobile number">
            
            <label>Password</label>
            <input type="password" placeholder="Password">
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>