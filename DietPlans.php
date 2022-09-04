<html>

<head>
    <link rel="stylesheet" href="CSS/home-style.css">
    <!-- <link rel="stylesheet" href="./CSS/consult.css"> -->
    <style>
        html {
            background: url(./assets/img5.jpg);

            /* background-size: cover; */
        }

        .product-card {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            border: 1px solid #ff1744;
            border-radius: 5px;
            background: #ff5d7c;
            padding: 2%;
            width: 90%;
            height: 250px;
            margin: 5% 25%;
            box-shadow: 0px 2px 2px grey;


        }

        #content-home {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 80%;
            margin: 0% 10% 5% 10%;
        }

        .product-card:hover {
            box-shadow: 0px 5px 5px grey;
            cursor: pointer;
        }

        .product-content {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .product-img {
            width: 30%;
            height: 100%;
            margin-right: 5%;
        }

        .product-name {
            color: #2b292a;
            margin: 20px 0px;
        }
    </style>
</head>
<header id="header">
    <div id="brand">
        <img id="header-img" src="assets/icon1.png" href="home.php" />
    </div>
    <nav id="nav-bar">
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="FindGroup.php">Events</a>
        <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
        <a class="nav-link" href="Blog.php">Blog</a>
        <a class="nav-link" href="profile.php">Profile</a>
    </nav>
</header>

<body style="margin-top: 150px;">
    <div id="home-content" style="text-align:center;">
        <h1 style="font-size:50px;">Diet Plans</h1>
    </div>
    <div id="content-home">
        <div id='doc-results'>
            <div class='product-card'>
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content'>
                    <h1 class='product-name'>Ketogenic Diet</h1>
                    <h3 style="color:white;">Low carb diet for weight loss</h3>
                    <button style="background-color: #4285F4;cursor:pointer" onclick="document.location='https://calendar.google.com/calendar/u/0?cid=MnUxbzdxaWE3cDRzNXZmOWJzb3VmNHFpZWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="doc-button">Add to my calender</Button>
                </div></a>
            </div>
        </div>
        <div id='doc-results'>
            <div class='product-card'>
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content'>
                    <h1 class='product-name'>Indian Diet plan for weight loss</h1>
                    <h3 style="color:white;">Indian meal plans with low carb intake</h3>
                    <button style="background-color: #4285F4;cursor:pointer" onclick="document.location='https://calendar.google.com/calendar/u/0?cid=aGxndHJsYTdoZGliZGc5ZmJvZmwwbTRiNDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="doc-button">Add to my calender</Button>
                </div></a>
            </div>
        </div>
        <div id='doc-results'>
            <div class='product-card'>
                <img src='assets/diet-plan.jpg' class='product-img'></img>
                <div class='product-content'>
                    <h1 class='product-name'>High protein meal plan</h1>
                    <h3 style="color:white;">Protein-rich meals for muscle training</h3>
                    <button style="background-color: #4285F4;cursor:pointer" onclick="document.location='https://calendar.google.com/calendar/u/0?cid=aGxndHJsYTdoZGliZGc5ZmJvZmwwbTRiNDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ'" class="doc-button">Add to my calender</Button>
                </div></a>
            </div>
        </div>
    </div>
</body>

</html>