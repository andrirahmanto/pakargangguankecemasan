@extends('landing')

@section('content')
    <table class="table table-dark table-striped border-light" style="justify-content:center;">
        <thead>
            <tr class="table-light" style="justify-content: center">
                <th>ID</th>
                <th>Gejala</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; ?>
            @foreach ($gejala as $g)
                <tr style="">
                    <td>{{ $index }}</td>
                    <td>{{ $g->nama }}</td>
                    <td>
                        <button class="btn btn-success btn-sm"><a style="color: white"
                                href="/edit/{{ $g->id }}">Edit</a></button>
                    </td>
                </tr>
                <?php $index++; ?>
            @endforeach
        </tbody>
    </table>
@endsection
