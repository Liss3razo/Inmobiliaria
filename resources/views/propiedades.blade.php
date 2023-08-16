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
  border-color:rgb(17, 131, 97);
  border-style: groove;
  border-inline-width: 0.2rem;
  background-color: white;
  height: 2.5rem;
  width: 9rem;
  border-radius: 0.4rem;

}

#buscador{
  display: flex;
   flex-direction: column;
  height: 250px;
  background-color: rgba(0, 0, 0, 0.705);
  align-content: space-between;
  padding: 1.4rem 8rem 1.4rem 8rem;
  

}
.buscar{
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: space-between
}

#bot{
  display: flex;
  justify-content: space-between;
  align-content: space-between;
  
}

#top{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center

}

#top input{
  height: 1.8rem;
  width: 42rem;
}

input{
  height: 1.8rem;
  width: 17rem;
}

label{
  color: #e3f2fd
}


</style>
</head>
<body>
   
    <nav class="navbar" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div>
        <a class="navbar-brand">INMOBILIARIA IS</a>
        <a class="navbar-brand" href="#">Usuarios</a>
        <a class="navbar-brand" href="#">Contáctanos</a>
        <a class="navbar-brand" href="#">Ventas</a>
        <a class="navbar-brand" href="#">Arquiler</a>

      </div>
      </div>
      </nav>

      <div id="im">
        <img src="http://localhost/Inmobiliaria/resources/views/recursos/img3.jpg" style="width: 100%; height: 300px;" >
      </div>

      <div id="buscador">
          <div id="top">
                <label>Ubicacion:</label> 
                <input type="text">
          </div>
          <div id="bot">
                 <div class="buscar">
                    <label for="">Precio desde:</label> 
                     <input type="text">
                     <label for="">Precio hasta:</label> 
                     <input type="text">
                 </div>
                 <div class="buscar">
                     <label for="">Tipo de negocio:</label> 
                     <input type="text">
                     <label for="">Tipo de propiedad:</label> 
                     <input type="text">
                  </div>
                  <div class="buscar">
                    <label for="">Estado de la propiedad:</label> 
                  <input type="text">

                  <button>buscar</button>
                 </div>
            </div>
      </div>
        
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
      


      

      
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>