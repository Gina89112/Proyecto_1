
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Georgina</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link href="{{ asset('estilos.css') }}" rel="stylesheet">
    <script src="{{ asset('peliculas.js') }}"></script>

</head>
<body style="background-color: rgb(15, 15, 15)">

    <div class="btn-container">
        <button class="btn btn-primary btn-agregar-sala"><a class="nav-link active" aria-current="page" href="/agregar">Agregar Sala</a></button>
    </div>
<br><br>
<div class="centrado" >
    <div class="container" >
<div class="row row-cols-1"  >
    @foreach ($peli as $item)
    <button type="button" class="btn btn-success buttona" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrarDetalle('{{ $item->Nombre }}', '{{ $item->id }}', '{{ $item->precio }}')" style="background-color:rgb(248, 150, 150);width: 229px;" >

    <div class="col card-margin" >
        <div class="card text-bg">
                    <img src="{{ asset($item->Imagen) }}" class="card-img-top" alt="{{ $item->Nombre }}" style="width: 200px;">
                    <div class="card-body">
                        <h5 class="card-title" name="nombre1">{{ $item->Nombre }}</h5>
                        <p class="card-text">
                            <strong >Sala:</strong> <strong name="id1">{{ $item->id }}</strong><br>
                            <strong >Precio:</strong> <strong name="precio1" >{{ $item->precio }}</strong><br>
                        </p>
                    </div>
         </div>
    </div>
             </button>
            @endforeach
            
        </div>
    </div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Boletos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="modal-precio2" class="invisible"></p>
          <p id="modal-id2" class="invisible"></p>
  
          <h7 id="modal-nombre"></h7>,
          <h7 id="modal-id"></h7>,
          <h7 id="modal-precio"></h7>
          
          <p>Entradas <input type="text" id="entradas">
              <button class="btn btn-danger" onclick="pagar()">Total</button><br>
      
              Pagar <input type="text" id="pagar"></p>
  
        </div>
        <div class="modal-footer">
          <form action="{{ route('Cine.store') }}" method="POST">
            @csrf
            <input type="text" id="idform" name="idform" class="invisible">
            <input type="text" id="entradas2" name="entradas2" class="invisible">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Listo</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  

</body>
</html>
