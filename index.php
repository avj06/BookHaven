<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles/styleIndex.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">L</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="login-button">Login</button>
        </nav>
    </header>
    <main>
        <section id="home">
            <h1>Welcome to My Example Homepage</h1>
            <p>This is a simple, clean, and minimalist webpage design.</p>
        </section>
        <section id="home">
            <h1>Featured Books</h1>
        </section>
        <div class="books">
            <div class="book-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/d/dc/The_Hunger_Games.jpg" alt="Book 1">
                <h2>Book Title 1</h2>
                <p>Author Name 1</p>
                <button>Buy Now</button>
            </div>
            <div class="book-card">
                <img src="https://cdn.kobo.com/book-images/5f4afbce-f9bf-4c87-92b1-806c2f3c7b41/353/569/90/False/the-maze-runner-maze-runner-book-one.jpg" alt="Book 2">
                <h2>Book Title 2</h2>
                <p>Author Name 2</p>
                <button>Buy Now</button>
            </div>
            <div class="book-card">
                <img src="https://ew.com/thmb/5ubdrGT4JNkNrTktCdU3KFYUM9E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/hpsorcstone-e2b869c8764c4f6699f9877f99380f32.jpg" alt="Book 3">
                <h2>Book Title 3</h2>
                <p>Author Name 3</p>
                <button>Buy Now</button>
            </div>
        </div>
        <section id="about">
            <h1>About</h1>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </section>
        <section id="contact">
            <h1>Contact Us</h1>
            <p>Get in touch via email: <a href="mailto:example@example.com">example@example.com</a></p>
        </section>
    </main>

    <!-- LOGIN FORM -->
    

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="config/logReg.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" id="login_email" name="login_email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" id="login_password" name="login_password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="login_btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="config/logReg.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required id="reg_fname" name="reg_fname">
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required id="reg_lname" name="reg_lname">
                    <label>Last Name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required id="reg_email" name="reg_email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required id="reg_password" name="reg_password">
                    <label>Password</label>
                </div>
                <div class="student-teacher">
                    <label>
                        <input type="radio" name="type" id="reg_student" value="student">Student
                    </label>
                    <label>
                        <input type="radio" name="type" id="reg_faculty" value="faculty">Faculty
                    </label>
                </div>
                <button type="submit" class="btn" name="submit_reg">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<!-- hello -->