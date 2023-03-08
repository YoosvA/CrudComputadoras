@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Crud Laravel 8 Computadoras</h2>
                <a href="/create" class="btn btn-primary "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABIklEQVR4nM2SPU4DMRSE00GFKFPQUHARKCA0VDRsAzVSOpAQHAAKuhDgAnADuAc3AIkuok12xmLQ282PyXrXFkECSyNZ9vOneX7Tav3FEnlr+i3YrkiNtbcYTFoR8DYFAu+SVhdxd++5m+juJ87aAo4FfFaAdmZ3UrsJsCyyI/Ja5EsFZG37rU/AVlu+6RjDb+0m0NpMzh3IuayxhuzNgMPhuoBBA3C/UN098KHRaGN+ANsCnFf0WrgykLRWqARnc5N3InfCfwmcfPu3NOBp84SBh+SWgcd4ZPL8MADMgkPJ86M4EOgGnFRjU553U4AXkXj4wPM4kLwMPBzUxOoqBdifxgF4Hk95qZDtgScvXv0U4JaAM4tJbY1FyGrIzSjw360v3ZDAgVcTbuQAAAAASUVORK5CYII="> Agregar Nuevo Equipo</a>
                <table class="table table-light mt-3 text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>RAM</th>
                            <th>Procesador</th>
                            <th>Disco Duro</th>
                            <th>Descripcion</th>
                            <th>URL Imagen</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->ram}}</td>
                            <td>{{$item->procesador}}</td>
                            <td>{{$item->discoDuro}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td><img src="{{$item->url}}" alt="" style="width: 3em"></td>
                            <td>
                                <a href="{{route('edit', $item->id)}}" class="btn btn-warning"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABKElEQVR4nO3Wuy6EURTF8Z8IEeIykbgUCJmCZjqiMBqNRqHQeALv4Am8h1ahUgiiUXoCvYqEISKumeRIJpMZ3/kuRGRWsrq99n/vXZwcOvon6kP/b0OruMUd1mMCEzhADR8tvBPRYwgLuA6ZGkaSQuc4wiLmWrg3Ib8aNt1ogD9h9LvQZJhwLGKrdtCH0OM5wOexmRSs4K0A6JcfMR4TzgpewX0T9BXbsQ0qGcC5oVnAhUDTgguDpgEXCk0DPm6CvmBLDlUiwEvhZbooChoLvsIeBnCS57xpwOWw5Q3W0CVZ9Zpd9OQFL6NbvAbDsDN5wFnUAf+tU0+FosTfQgrVge8YTiq8xD6mUcrpWRziLGbCcsOrlNf1TU/DJaNVavPnSuPE83bkp/UJ3pB6cx8hvr4AAAAASUVORK5CYII="></a>
                            </td>
                            <td>
                                <a href="{{route('show', $item->id)}}" class="btn btn-danger"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAARElEQVR4nGNgGBHg////Df8xQQe5hlEEGAbcguEB/tM6eP7T0wIGHJbiUztqARiMBhEcMIymImxgeAURKWDwWMAwlAAAyZosCKLfkTMAAAAASUVORK5CYII="></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection