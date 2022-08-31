<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link  rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
         fieldset {
            width: 750px;
            margin-left: 25%;
            background-color:rgba(227, 247, 45, 0.754);
        } 
        textarea {
            width: 500px;
            border-radius: 5px;
            box-shadow: 1px 5px green;
        }

        textarea:focus {
            background-color: rgb(183, 205, 206);
        }

        input[type=submit] {
            width: 200px;
            line-height: 40px;
            font-weight: 80px;
            background-color: black;
            color: white;
            font-size: 20px;
            border-color: black;
            border-radius: 50px;
            border: 1px solid;
        }

        input[type=submit]:hover {
            background-color: rgb(76, 81, 90);
            color: rgb(21, 202, 81);

        }

        input:focus {
            background-color: rgb(183, 205, 206);
        }
        input[type=text]
{

	margin-top: 10px;
	margin-left: -10px;
	margin-right: -10px;
	padding: 5px;
	width: 400px;
}
input[type=email]
{

	margin-top: 10px;
	margin-left: -10px;
	margin-right: -10px;
	padding: 5px;
	width: 400px;
}
input[type=number]
{

	margin-top: 10px;
	margin-left: -10px;
	margin-right: -10px;
	padding: 5px;
	width: 350px;
}
input[type=text1]
{
	margin-top: 10px;
	margin-left: -10px;
	margin-right: 10px;
	padding: 5px;
	width: 130px;
}
input[type=text9]
{

	margin-top: 10px;
	margin-left: 10px;
	margin-right: -15px;
	padding: 5px;
	width: 170px;
}
input[type=text0]
{

	margin-top: 10px;
	margin-left: -10px;
	margin-right: 10px;
	padding: 5px;
	width: 140px;
}

   </style>   
</head>
<body>
    <div class="container bg-white p-5 mt-5 shadow-lg">
        <div class="row">
            <div class="col-md-3">
                <img src="image/aa.jpg" class="rounded-circle w-75 ml-5 mx-auto" style="margin-left: 10% !important">
                <br>
                <center>
                <p class="text-center"><b><u><h3>ASHU</h3></u></b></p>
                <p class="text-center"><b>ashitipatel777@gmail.com</b></p>
    </center>
            </div>

            
            <div class="col-md-5 shadow">
                <h3 class="p-4"><b>Profile Setting</b></h3>
                <h5>
                    <b>
                <tr>
                    <td>Name:</td>
                    
                    <input type="text0" name="name" placeholder="first name" required>          
                    <td>Surname:</td>
                    
                    <input type="text0" name="name" placeholder="Surname" required>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Phone Number:</td>
                    
                    <td><input type="number" name="number" placeholder="Enter phone number" required></td>
                </tr>
               <br>
               <br>
               <tr>
                    <td>Address:</td>
                    
                    <td><input type="text" name="Address" placeholder="Enter Address" required></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Email Id:</td>
                    
                    <td><input type="Email" name="Email" placeholder="Enter Email Id" required></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Education:</td>
                    
                    <td><input type="text" name="Education" placeholder="Education" required></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Country:</td>
                    
                    <input type="text1" name="Country" placeholder="Country" required>
            
                    <td>State/Region:</td>
                    
                    <td><input type="text1" name="State" placeholder="States" required></td>
                </tr>
                <br>
                <br>
                <tr>
                    
                    <td><center><input type="Submit" name="Save Profile"></center></td>
                </tr>
</h4>
</b>
                </div>
            
            
            <div class="col-md-4 shadow">
            <h3 class="p-4"><b>Experience<input type="text9" name="Experience" placeholder="Edit Experience"></b></h3>
            <br>
            <br>
            <h5>
                <b>
            <tr>
                    <td>Experience in Designing</td>
                    
                    <td><input type="text" name="Experience" placeholder="Experience" required></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td>Additional Details</td>
                    
                    <td><input type="text" name="Additional Details" placeholder="Additional Details" required></td>
                </tr>
            
        </div>
        </div>
</b>
</h5>

    </div>
    
</body>
</html>