@extends("plantilla")

@section("titulo")
  Agregar Especialidad
@endsection


@section("principal")
    <form action="/agregarEspecialidad" method="post" >
        {{ csrf_field() }}
        <div class="">
            <label for="name">Nombre Especialidad</label>
            <input type="text" name="name" id="" value="">
        </div>


                            <div class="">
                                <input class="btn btn-success " type="submit" value="Agregar Especialidad">
                            </div>
                        </form>



                    </div>
            </div>
        </div>
    </form>
@endsection
