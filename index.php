<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-container button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .toggle-link {
            text-align: center;
            margin-top: 10px;
        }

        .toggle-link a {
            color: #007bff;
            text-decoration: none;
        }

        .toggle-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <?php 
        $isSignUp = isset($_GET['signup']) ? true : false; 
        ?>

        <h2><?php echo $isSignUp ? 'Sign Up' : 'Sign In'; ?></h2>

        <form action="process.php" method="post">
            <?php if ($isSignUp): ?>
                <input type="text" name="username" placeholder="Username" required>
            <?php endif; ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="action" value="<?php echo $isSignUp ? 'signup' : 'signin'; ?>">
                <?php echo $isSignUp ? 'Sign Up' : 'Sign In'; ?>
            </button>
        </form>

        <div class="toggle-link">
            <?php if ($isSignUp): ?>
                <p>Already have an account? <a href="?signin">Sign In</a></p>
            <?php else: ?>
                <p>Don't have an account? <a href="?signup">Sign Up</a></p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
