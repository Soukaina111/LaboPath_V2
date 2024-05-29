<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       .search-container {
            margin-left : 170px;
            margin-right : 15px;
            display: flex;
            align-items: center; /* Aligns items vertically */
            justify-content: space-between; /* Adds some space between the input and the button */
        }
       .search-input {
            margin-right: 10px; /* Adds a little space between the input and the button */
        }
    </style>
</head>
<body>

<form action="/">
    <div class="search-container">
        <input type="text" name="search" class="search-input" background-color="green"  
               placeholder="Search...">
        <button type="submit" class="">Search</button>
    </div>
</form>
</body>
</html>
