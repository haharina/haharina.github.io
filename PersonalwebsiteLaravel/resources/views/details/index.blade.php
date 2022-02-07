@extends('layouts.app')
@extends('details.layout')

@section('content')
<div class ="container">
    <div class="row">
        
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Skill </h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a class="btn btn-success" href="{{ route('details.create') }}"> Create New Skill</a>
            </div>
         
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                        <tr>
                            <th>No</th>
                            <th>Skill</th>
                            <th>Scale</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($details as $detail)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $detail->abilities }}</td>
                            <td>{{ $detail->rate }}</td>
                            <td>
                                <form action="{{ route('details.destroy',$detail->id) }}" method="POST">
                
                                    <a class="btn btn-primary" href="{{ route('details.edit',$detail->id) }}">Edit</a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
            </div>
        </div>
</div>

      {!! $details->links() !!}
</div>    
@endsection