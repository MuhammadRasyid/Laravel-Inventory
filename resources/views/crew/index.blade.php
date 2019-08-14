@extends('layouts.main')

@section('content')
<a href="" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="row">
        <div class="col-md-6">
        <h4>Data Crew</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>                        
                </tbody>
            </table>
        </div>
    </div>
@endsection