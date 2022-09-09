
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dropdown-submenu {
            position: relative;
        }

            .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -1px;
            }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 30px; /* Height of the footer */
            background: #6cf;
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0;
            height: 100%;
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        h1 {
            font: bold small-caps 900 20px/50px Georgia, 'Times New Roman';
            font-size: 50px;
            font-style: 'bold';
            background-color: #ffffff;
            text-align: center;
            text-decoration-color: rgb(255, 252, 252);
        }

        .card-body {
            border: 8px solid black;
            background-color: rgb(181, 228, 247);
            font-size: 25px;
            font-style: 'bold';
            font-style: italic;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        h2 {
            font-family: serif;
            font-size: 5px;
            text-align: left;
            text-size-adjust: 10px;
        }

        body {
            background-image: url("image3.jpg");
            background-repeat: no-repeat;
            /* Full height */
           height: 390px;
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .dropbtn {
            background-color: #3366CC;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: absolute;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

                .dropdown-content a:hover {
                    background-color: #ddd;
                }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #5f72ca;
        }

        * {
            box-sizing: border-box;
        }
        #footer {
            height: 24px;
            background-color: #ffffff;
            background-repeat: repeat;
            background-attachment: scroll;
            background-position: 100% 0%;
            position: fixed;
            bottom: 0pt;
            left: 0pt;

        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>EWU Club Management System</title>
    <link rel="shortcut icon" href="image.jpg" />
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Welcome to EWU Club Management System</h1>
    <div class="container">
        
           
           
              
            <a href="https://www.ewubd.edu/clubs" target="block">
                <div class="dropdown">
                    <button class="dropbtn">View Clubs</button>
                </div>
            </a>

         
           
            <a href="insert.php">
                <div class="dropdown">
                    <button class="dropbtn">Register</button>
                </div>
            </a>
            
            <a href="mongo.php">
                <div class="dropdown">
                    <button class="dropbtn">Admin</button>
                </div>
            </a>
            
        

    </div>

    <br>
  


    <footer id="footer">
        Copyright &copy; Summer-2022 EWU Club Management System Design
    </footer>
</body>

</html>
