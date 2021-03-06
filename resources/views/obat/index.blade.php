@extends('layouts.architectui')
<div id='showinfo'></div>
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
  
@section('content')   
  <h2>List Obat</h2>
  <div class="page-toolbar">
      <a href="{{ url('obat/create') }}" class='btn btn-info' type="button">+ Obat baru</a>
  </div>          
  <table class="table">
    <thead>
      <tr>
        <th>ID Code</th>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Price</th>
        <th>Description</th>
        <th>Faskes 1</th>
        <th>Faskes 2</th>
        <th>Faskes 3</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
      <tr>
        <td>
          <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}">{{ $li->id }}</a>
          <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$li-> genericname}}</h4>
                </div>
                <div class="modal-body">
                  <img src="{{ asset ('img/' .$li -> image)}}" height='200px'>
                  <p>Description:</p>
                  <p>{{ $li -> description }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td class='editable' id='td_genericname_{{ $li->id }}'>{{ $li-> genericname }}</td>
        <td class='editable' id='td_form_{{ $li->id }}'>{{ $li -> form }}</td>
        <td class='editable' id='td_restrictionformula_{{ $li->id }}'>{{ $li -> restrictionformula }}</td>
        <td class='editable' id='td_price_{{ $li->id }}'>{{ $li -> price }}</td>
        <td class='editable' id='td_description_{{ $li->id }}'>{{ $li -> description }}</td>
        <td class='editable' id='td_faskes1_{{ $li->id }}'>{{ $li -> faskes1 }}</td>
        <td class='editable' id='td_faskes2_{{ $li->id }}'>{{ $li -> faskes2 }}</td>
        <td class='editable' id='td_faskes3_{{ $li->id }}'>{{ $li -> faskes3 }}</td>
        <td id='td_image_{{ $li->image }}'>
          <img height="50px" src="{{ asset ('img/' .$li -> image) }}">
          <div class="modal fade" id="modalChange_{{ $li->id }}" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content" >
                      <form role="form" method='POST' action="{{ route('obat.changeImageObat') }}" enctype='multipart/form-data'>
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                              <h4 class="modal-title">Change Image</h4>
                          </div>
                          <div class="modal-body">
                              @csrf 
                              <div class="form-group"> 
                                  <label>Image</label> 
                                  <input type="file" class="form-control" id='image' name='image'/>
                                  <input type='hidden' id='id' name='id' value='{{ $li->id }}'/> 
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-info">Submit</button> 
                              <a data-dismiss="modal" class="btn btn-default">Cancel</a> 
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <br><a href='#modalChange_{{ $li->id }}' data-toggle='modal' class='btn btn-default'>Change</a>
        </td>
        <td>
          <a class='btn btn-info' href="{{route('obat.show',$li->id)}}"
            data-target="#show{{$li->id}}" data-toggle='modal'>detail</a>        
          <div class="modal fade" id="show{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <!-- put animated gif here -->
            </div>
            </div>
          </div>
        </td>
        
        <td>
          <a href="{{ url('obat/'.$li->id.'/edit') }}" class="btn  btn-info">edit</a>
        </td>
        @can('delete-permission', $li)
        <td>
          <form method="POST" action="{{ url('obat/'.$li->id) }}">
            @method('DELETE')
            @csrf
            <input type="submit" value="delete" class="btn btn-danger" onclick="if(!confirm('Are you sure to delete this record?')) return false;">
          </form>
        </td>
        @endcan
      </tr>
        @endforeach
    </tbody>
  </table>
@endsection 
<script>
    $('.editable').editable({
        closeOnEnter : true,
        callback:function(data) {
            if(data.content) {
                alert(data.content);

                var s_id = data.$el[0].id;
                var fname = s_id.split('_')[1];
                var id = s_id.split('_')[2];
                
                $.ajax({
                    type:'POST',
                    url:'{{ route("obat.saveDataFieldObat") }}',
                    data:{
                        '_token':'<?php echo csrf_token() ?>',
                        'id':id,
                        'fname':fname,
                        'value':data.content
                    },
                    success: function(data) {
                        alert(data.msg)
                    }
                });
            }
        }
    });
</script>
