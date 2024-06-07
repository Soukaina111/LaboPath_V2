
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
   <style>
        input[type="text"],
        input[type="date"],
        select {
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            background-color: #fff;
            color: #333;
        }
        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            outline: none;
            border-color: #666;
        }
        button[type="submit"],
        button[type="button"],
        a.btn {
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            margin-right: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            background-color: #333;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        }
        .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        .btn-container a:first-child {
            margin-left: 0;
        }
        .btn-container a:last-child {
            margin-right: 0;
        }
        .btn-container .btn {
      width: 100%;
    }
        #main1 .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding-top: 30px;
          }
          #main1 .btn-container a {
            padding: 20px 30px ;
            color: #fff;
            text-decoration: none;
            background-color: #333;
            border-radius: 50px;
            font-size: 24px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
          }
          body {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        background-image: url('/images/Nov23.CDI-DTET-DigitalPathology-AI-Trends-Paige-iStock-1356018446-1800x1250-1.jpg');
        background-position: center;
        background-repeat: no-repeat; 
        background-size:cover; 
        background-attachment: fixed; 
   
    }
       .left-links {
        margin-left: auto;
        margin-bottom: 20px; /* Adjust as needed */
    }
    .left-links a {
        margin-right: 20px;
    }
    /*NEW STYLE EDIT AND CREATE MAIN DIV*/

           /* Updated main container styling */
           #main3 {
                background-color: #f8f9fa; /* Lighter background color */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Softer shadow */
                margin: 10px auto; /* Increased margin for better spacing */
                max-width: 1000px; /* Slightly wider max width for larger screens */
                padding: 30px; /* Added vertical padding */
                text-align: left; /* Align text to the left for better readability */
            }
                       /* Form group styling */
           .form-group.row {
                margin-bottom: 15px; /* Spacing between form groups */
            }

            /* Input fields and select boxes */
           .form-control {
                border-radius: 5px; /* Rounded corners */
                transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out; /* Smooth transitions */
            }
            /* Button styling */
            button[type="submit"],.btn.btn-secondary {
                font-weight: bold; /* Bold text for buttons */
                padding: 10px 20px; /* More padding for easier clicking */
                border-radius: 5px; /* Rounded corners */
                cursor: pointer; /* Pointer cursor on hover */
                transition: background-color 0.3s ease; /* Background color transition */
            }
            button[type="submit"]:hover,.btn.btn-secondary:hover {
                background-color: #007bff; /* Blue background on hover */
                color: white; /* White text on hover */
            }

            /* Error message styling */
           .invalid-feedback {
                display: inline-block; /* Make error messages visible */
                color: red; /* Red text for errors */
            }
            /*END*/
  </style>
</head>
<body>
    <div class="left-links">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <strong> Welcome to LaboPath <strong> </a>
        <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
    </div>
    <div id="main1">
        <div class="btn-container">
            <a href="/" style="background-color: rgb(212, 11, 135);">Dashboard</a>
            <a href="patients/create/">Add New</a>
            <a href="/patients/day">Records of the day</a>
            <a href="/" style="background-color: rgb(46, 136, 103);">Back</a>
        </div>
    </div>
    {{$slot}}
</body>
<footer>
</footer>
</html>








