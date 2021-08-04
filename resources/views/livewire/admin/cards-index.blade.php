<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una ficha...">
    </div>

    @if ($cards->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $card)
                        <tr>
                            <td>{{$card->id}}</td>
                            <td>{{$card->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.cards.edit', $card)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.cards.destroy', $card)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$cards->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningun registro.</strong>
        </div>
    @endif
</div>
