<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     #bg-img{
      width: 90rem; 
           height: 70rem; 
        background-color:blue;    
      }

      #div-principal{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -40%);
    border: 1px solid rgb(255, 255, 255);
    min-height: 300px;
    width: 500px;
    background-color: #ffffffe1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    align-content: space-around;
    padding: 10px; 
    
}
button{
  background-color:rgb(236, 236, 255);
  height: 3rem;
  width: 9rem;
  border-radius: 1rem;

}
       

    </style>
</head>
<body>
   
    <nav class="navbar" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div>
        <a class="navbar-brand">INMOBILIARIA IS</a>
        <a class="navbar-brand" href="#">Usuarios</a>
        <a class="navbar-brand" href="#">Favoritos</a>

      </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      </nav>
      <div id="bg-img">
      <div id="div-principal">
        <button>VENTAS</button>
        <button>ALQUILERES</button>
      </div>
      <img src="http://localhost/Inmobiliaria/inmobiliaria/resources/views/recursos/img3.jpg" style="width: 100%; height: 100%;" >
      
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>