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
        margin-top: -15px;
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


    <h1 class="text-center shadow-lg p-5">Lorem</h1>

    <div class="text-center mx-auto" style="width: 1000px;">
    <h3>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, repellat voluptas adipisci totam et nam, eaque aperiam perferendis rerum deleniti maiores rem quis. Laboriosam nesciunt ipsum necessitatibus eius, sequi dolorem?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veritatis, id facilis voluptates eveniet tempora officia corporis quibusdam ea ipsum recusandae impedit atque possimus placeat assumenda, corrupti saepe earum doloribus.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore minus magni porro autem aliquam voluptate, ut laborum atque eveniet numquam ratione harum animi odit, cupiditate, voluptates voluptas. Eligendi, tenetur aspernatur!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, praesentium velit consequatur officiis harum eligendi adipisci ea corrupti mollitia. Ea suscipit nostrum impedit rem enim doloribus, perspiciatis magnam eius dolor.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat obcaecati, est officia excepturi nisi delectus iste dolorum sapiente in voluptate provident repellendus omnis rem unde voluptatum et necessitatibus. Esse, neque!
    </h3>
    </div>



    <div class="footer ">
    <ul>
    <li><a href="{{url('/')}}">Information</a></li>
    <li><a href="{{url('/myApp')}}">Application</a></li>
    <li><a href="{{url('/other')}}">Others</a></li>
    </ul>
    </div>
  

</body>
</html>