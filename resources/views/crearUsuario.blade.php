<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/dbb994acbb.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
     #bg-img{
        width: 100%; 
        height: 150%;     
      }

      #carrus{
        padding: 3rem;
    position: absolute;
    max-height: 70%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    align-content: space-around;

    
}

       

    </style>
</head>
<body>

    <style>
        #bg-img{
           width: 90rem; 
           height: 70rem; 
           background-color: hsla(270, 55%, 65%, 0.11);
           opacity: 1.5rem;
           
         }

          #busqueda{
            margin-top: -50px;
                padding-top: 15px;
                display: flex;
                justify-content: space-around;

          }
         #iconos{
            width: 15em;
         }
   
    #div-principal{
       position: absolute;
       left: 50%;
       top: 85%;
       transform: translate(-50%, -40%);
       border: 1px solid hsla(180, 8%, 97%, 0.769);
       min-height: 450px;
       width: 550px;
       background-color: hsla(200, 30%, 96%, 0.769);
       transition: opacity .6s .9s; 
       transition-property: opacity, left, top, height;
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: space-around;
       align-content: space-around;
       padding: 10px; 
       
   }
            #cuadro{
                margin-top: -30px;
                padding-top: 15px;
                display: flex;
                justify-content: space-around;
            }

            #botLog{
                margin-top: -30px;
                padding-top: 15px;
                display: flex;
               padding-left: 10px;
                justify-content: space-around;}

            #inicio{
                color: rgb(10, 10, 10);
                font-style: bold;
                padding: 15px;   
            }

   button{
     background-color:hsla(19, 25%, 46%, 0.672);
     height: 3rem;
     margin: 1.5px;
     width: 7.5rem;
     border-radius: 0.8rem;
   

   }

   #navbar{
    color: rgb(10, 10, 10);
    with:15rem;
    
   }
  </style>
   </head>
   <body>
      
       <nav class="navbar" style="background-color: hsl(24, 39%, 74%), width: 8.5rem ;">
         <div class="container-fluid">
           <div>
           <a class="navbar-brand" style=
           font-style: bold;"> Bienvenido</a>
          
   
         </div>
           <form class="d-flex   iconos " role="search"  >
                <div class="busqueda">
              <i class="fa-solid fa-right-to-bracket"></i>
                </div>
            
           </form>
         </div>
         </nav>
        
         <div id="bg-img">
         <div id="div-principal"> 
            <h1  class="inicio">Inmobiliaria IS</h1>

           <button>  Email </button>
           <button> Password  </button> 
           
           <div  class="botLog">
            <a href=""  style="color: black;">Forgot your password?</a>   
            <button class="btn-outline-success btn-sm" style="width: 4.4rem; height: 3.5rem;">Login In</button>
           </div>

    </select>
        </div>
         <img src="http://localhost/Inmobiliaria/inmobiliaria/resources/views/recursos/img2.jpg" style="width: 100%; height: 100%;" >
         </div>

         <div>
            <footer>
                
            </footer>
         </div>

    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>