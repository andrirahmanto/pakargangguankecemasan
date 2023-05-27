@extends('landing')

@section('content')
<div class="col-sm-3">
    <div class="card bg-light mb-4" style="max-width: 12rem;">
        <div class="card-header">Total current user</div>
        <div class="card-body">
          <h2 class="card-title">{{sizeof($user)}}</h2>
        </div>
      </div>
  </div>
    <table class="table table-dark table-striped border-light" style="justify-content:center;">
        <thead>
            <tr class="table-light" style="justify-content: center">
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Riwayat Penyakit</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; ?>
            @foreach ($user as $u)
                <tr style="">
                    <td>{{ $index }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->email }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#user{{ $u->id }}">
                            Riwayat Penyakit
                        </button>
                    </td>
                </tr>
                <div class="modal fade" id="user{{ $u->id }}" tabindex="-1"
                    aria-labelledby="user{{ $u->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="user{{ $u->id }}Label">{{ $u->username }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php $count = 0; ?>
                                @foreach ($riwayatPenyakit as $rp)
                                    @if ($rp->userid == $u->id)
                                        <?php $count++; ?>
                                    @endif
                                @endforeach
                                @if ($count == 0)
                                    Haven't Diagnose
                                @else
                                    <div class="row w-100">
                                        <div class="col-6"><b>Penyakit</b></div>
                                        <div class="col-6"><b>Tanggal</b></div>
                                    </div>
                                    <div class="row w-100">
                                        @foreach ($riwayatPenyakit as $rp)
                                            @if ($rp->userid == $u->id)
                                                <?php $listPenyakit = json_decode($rp->riwayat, true); ?>
                                                <div class="col-6">
                                                    <ul>
                                                        @foreach ($listPenyakit as $lp)
                                                            <li>{{ $lp }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    {{ $rp->created_at }}
                                                </div>
                                            @endif
                                            <hr>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
        </tbody>

        <?php $index++; ?>
        @endforeach
    </table>
@endsection
