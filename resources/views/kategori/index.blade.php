@extends('layouts.architectui')
<h2>Category</h2>          
@section('content')
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Obat</th>
    </tr>
  </thead>
  <tbody>
      @foreach($listdata as $d)
    <tr>
      <td>{{ $d -> name }}</td>
      <td>{{ $d -> description }}</td>
      <td>
        <ul>
          @foreach($d -> obats as $m)
            <li>{{ $m -> genericname }}</li>
            <li>{{ $m -> description }}</li>
          @endforeach
        </ul>
      </td>
      <td>
        <a href="{{ url('kategori/'.$d->id.'/edit') }}" class="btn btn-xs btn-info">edit</a>
        <form method="POST" action="{{ url('kategori/'.$d->id) }}">
          @csrf
          @method('DELETE')
          <input type="submit" value="delete" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure to delete this record?')) return false;">
        </form>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection