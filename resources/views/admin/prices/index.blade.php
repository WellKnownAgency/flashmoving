@section('title', 'Prices')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Flashmoving prices
        </div>
        <div class="card-body">
          <a href="/admin/prices/create" class="btn btn-success">Create Price</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Updated</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($prices as $price)
              <tr>
                <th scope="row">{{ $price->name }}</th>
                <td >$ {{ $price->price }}</td>
                <td>{{ $price->updated_at}}</td>
                <td>
                  <a href="/admin/prices/{{ $price->id }}/edit" class="btn btn-info btn-sm">Edit</a>
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
          <div class="col-md-6 offset-md-4">
          {!! $prices->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
