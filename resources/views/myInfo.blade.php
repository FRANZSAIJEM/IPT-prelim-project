<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style src="{{asset('js/bootstrap.min.js')}}"></style>

</head>
<style>
    .footer {
        text-align: center;
        font-size: 30px;
        margin-top: 25px;
    }
    li{
        transition: 0.1s;
        background-color: black;
        border-radius: 10px;
        padding: 20px;
        margin: 50px;
        cursor: pointer;
        width: 200px;
        
    }
    ul{
        list-style-type: none;
    }
    ul li a{
        color: white;
        text-decoration: none;
        padding-top: 22px;
        padding-bottom: 25px;
        
        position: static;
    }
    ul li a:hover{
        color: black;
        text-decoration: none;
    }
    ul li{
        
        display: inline-block;
    }
  
    ul li:hover{
     
        background-color: white;
    }
    .text-center h4{
        margin-top: 100px;
    }
</style>
<body>

 
    <h1 class="text-center shadow-lg p-5">My Information</h1>


    <div class="text-center">
    <h4>First Name: Francis Michael</h4>
    <h4>Last Name: Mejias</h4>
    <h4>Address: Cagayan, Inabanga, Bohol</h4>
    <h4>Status: Single</h4>
    </div>

    <div class="footer ">
    <ul>
    <li><a href="{{url('/')}}">Information</a></li>
    <li><a href="{{url('/myApp')}}">Application</a></li>
    <li><a href="{{url('/other')}}">Other</a></li>
    </ul>
    </div>
  

</body>
</html>