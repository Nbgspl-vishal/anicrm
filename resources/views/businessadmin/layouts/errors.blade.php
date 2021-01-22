@if(session()->get('errors'))
      <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
  @endif

@if(session()->get('success'))
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <ul>
        
          <li>{{ session()->get('success') }}</li>
        
      </ul>
    </div><br />
@endif