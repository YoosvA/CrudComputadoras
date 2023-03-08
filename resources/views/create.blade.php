@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4">
        <h2 class="text-center mt-4">Agregar una Computadora</h2>
        <div class="row">
            <div class="col">
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control">
                            <label for="ram">RAM</label>
                            <input type="text" name="ram" id="ram" class="form-control">
                            <label for="procesador">Procesador</label>
                            <input type="text" name="procesador" id="procesador" class="form-control">
                            <label for="discoDuro">Disco Duro</label>
                            <input type="text" name="discoDuro" id="discoDuro" class="form-control">
                        </div>
                        <div class="col">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                            <label for="url" >URL Imagen</label>
                            <input type="text" name="url" id="url" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAi0lEQVR4nO3SQQ6CQAxA0d5DvAnsIVzKJQcyHgi8xyesHInJlGkJKv3rdl7SjEh0uoAeeJKUmX+bSdZuW+EpRQ3wNpwPGeCl4ShYh7MPjDus2S+GgVqJNt6wOQl4nf2of3DqO3DJLr72K+DhAVdaNHnjaoalsIAlTv1Nn2vCv1EDd874CLSll4t+txluQ70WDrFYpQAAAABJRU5ErkJggg=="> Guardar</button> 
                    <a href="/" class="btn btn-info mt-3" style="color: white"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtElEQVR4nO3WMQ4BQRTG8YlSSDiAQhzBMZAIB9t7aJ2AULmBWq1SaX5CtlCJMZtdy37Jy1Tf/JP33rx5Ify90MM4MQbRicRcurIU8BGryNgXAc7K9IYG/EG2rpiFkms8wSIaWgC4lZ9DdMrrzPDwj3DCNgouHXyffIf8jh26pYA/hnsBxhrnN+PyNEI3aNcP/K7QLzTVX91cqnhOqhogmGIZ66v1JzFvFoFaLXspyuqz0P+8bqTJr3+WhwsPAAAAAElFTkSuQmCC"> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection