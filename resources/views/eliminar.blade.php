@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4 text-center">
        <div class="row">
            <div class="col">

                <div class="alert alert-danger mt-4" role="alert">
                    <h2>Eliminar Computadora</h2>
                    <hr>
                    <ul>
                        <h6>Nombre: {{$items->nombre}}</h6>
                        <h6>Marca: {{$items->marca}}</h6>
                        <h6>Modelo: {{$items->modelo}}</h6>
                        <h6>RAM: {{$items->ram}}</h6>
                        <h6>Procesador: {{$items->procesador}}</h6>
                        <h6>Disco Duro: {{$items->discoDuro}}</h6>
                        <h6>Descripcion: {{$items->descripcion}}</h6>
                        <h6>Imagen: <img src="{{$items->url}}" alt="" style="width: 3em"></h6>
                    </ul>
                    <form action="{{route('destroy', $items->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{-- eliminar --}}
                        <button class="btn btn-danger mt-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAARElEQVR4nGNgGBHg////Df8xQQe5hlEEGAbcguEB/tM6eP7T0wIGHJbiUztqARiMBhEcMIymImxgeAURKWDwWMAwlAAAyZosCKLfkTMAAAAASUVORK5CYII="> Eliminar Definitivamente</button>
                        <a href="/" class="btn btn-info mt-3" style="color: white"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtElEQVR4nO3WMQ4BQRTG8YlSSDiAQhzBMZAIB9t7aJ2AULmBWq1SaX5CtlCJMZtdy37Jy1Tf/JP33rx5Ify90MM4MQbRicRcurIU8BGryNgXAc7K9IYG/EG2rpiFkms8wSIaWgC4lZ9DdMrrzPDwj3DCNgouHXyffIf8jh26pYA/hnsBxhrnN+PyNEI3aNcP/K7QLzTVX91cqnhOqhogmGIZ66v1JzFvFoFaLXspyuqz0P+8bqTJr3+WhwsPAAAAAElFTkSuQmCC"> regresar</a>
             
                    </form>
                  </div>
            </div>
        </div>
    </div>
@endsection