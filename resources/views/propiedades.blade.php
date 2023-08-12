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
        width: 100%; 
        height: 50%;     
      }

    #prinId{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -40%);
    height: 100%;
    width: 100%;
    padding: 2rem; 
    display: grid; 
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 2rem;
   grid-row-gap: 2rem;
        
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

      <div id="prinId">
      <div class="card" style="width: 18rem;">
        <img src="http://localhost/Inmobiliaria/resources/views/recursos/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Propiedad 1</h5>
          <p class="card-text">Ubicacion y descripcion</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Tipo de propiedad</li>
          <li class="list-group-item">Disponibilidad</li>
          <li class="list-group-item">Valoracion</li>
        </ul>
        <div class="card-body" style="display:flex; justify-content:space-evenly">
          <a href="#" class="btn btn-primary"> Rentar</a>
          <a href="#" class="btn btn-primary"> Ver mas</a>
        </div>
      </div>


      
    </div>

      
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>