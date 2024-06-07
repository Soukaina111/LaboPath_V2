<html>
    <head>
        <style>
            .center-alert {
                 position: fixed;
                 top: 5%;
                 left: 50%;
                 transform: translate(-50%, -50%);
                 width: 400px; /* Adjust the width as needed */
                 max-width: 100%; /* Ensures the alert doesn't exceed the viewport width */
                 padding: 20px;
                 background-color: #e2eaea; /* Light green background for success alerts */
                 color: #be3838; /* Dark green text color for readability */
                 border-radius: 5px; /* Rounded corners */
                 text-align: center; /* Center the text */
                 z-index: 1050;  /*Ensure it's above other content */
             }
         </style>
    </head>
</html>
@if(Session()->has('message'))
    <div  x-data="{show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class=" center-alert alert alert-success">
        <strong>{{ Session('message') }}</strong>
    </div>
    @endif

    
    