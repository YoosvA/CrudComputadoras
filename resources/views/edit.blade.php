@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4">
        <h2 class="text-center">Actualizar Equipo</h2>
        <div class="row">
            <div class="col mt-4">
                <form action="{{route('update', $items->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$items->nombre}}">
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" value="{{$items->marca}}">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" value="{{$items->modelo}}">
                            <label for="ram">RAM</label>
                            <input type="text" name="ram" id="ram" class="form-control" value="{{$items->ram}}">
                            <label for="procesador">Procesador</label>
                            <input type="text" name="procesador" id="procesador" class="form-control" value="{{$items->procesador}}">
                            <label for="discoDuro">Disco Duro</label>
                            <input type="text" name="discoDuro" id="discoDuro" class="form-control" value="{{$items->discoDuro}}">
                        </div>
                        <div class="col">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="10" rows="10" class="form-control" value="{{$items->descripcion}}"></textarea>
                            <label for="url" >URL Imagen</label>
                            <input type="text" name="url" id="url" class="form-control" value="{{$items->url}}">
                        </div>
                    </div>
                    {{-- Actualizar --}}
                    <button class="btn btn-warning mt-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABdklEQVR4nO2Wy0oDUQyGP9dutSrUQkV9m6KCVaogLhUvDH0Fn0LEy0a8oKKgvou3vRfUjRvrZSQQ4TC2nvFMWlz0h8Awyck/ySQngTb+IQpABJwBN8CLyiVwDiwC/daEW0ANiD0iNmsWHzAOPDtOt4EKMAB0qgzqux3n4+RMKZS0D/hQR4cauQ9F4EDPfAJzIcQdwAowE3A2UuJ3YDSEPAuqGvkj0N1q8hMl3/AZllWsUNCCe/0talHcq1im5rvYokYG+04/yrMVKk5n/MBEncvAKuVD6u8qqegC7uoQPwA9GQjdDMYJ2fMZHGcgloBuGwSUSxpfq1LSY4GRtL/wSJWT2CFV0VabUNWp2jTnNHzekLycpks2NWpJe0uRA558t02zMKYjTUbbcsD5WR2pMlr/jHkljvW+lSHvQ1F7P9YlopdAlJy013S9mQKGE6vPNLALvDkzWNamTMgDqymXPemGdeOOQJwt6Hp7kVhvT4Ela8I2sMAXUBKRy27a3h0AAAAASUVORK5CYII="> Actualizar</button>
                    {{-- regresar --}}
                    <a href="/" class="btn btn-info mt-3" style="color: white"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtElEQVR4nO3WMQ4BQRTG8YlSSDiAQhzBMZAIB9t7aJ2AULmBWq1SaX5CtlCJMZtdy37Jy1Tf/JP33rx5Ify90MM4MQbRicRcurIU8BGryNgXAc7K9IYG/EG2rpiFkms8wSIaWgC4lZ9DdMrrzPDwj3DCNgouHXyffIf8jh26pYA/hnsBxhrnN+PyNEI3aNcP/K7QLzTVX91cqnhOqhogmGIZ66v1JzFvFoFaLXspyuqz0P+8bqTJr3+WhwsPAAAAAElFTkSuQmCC"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection