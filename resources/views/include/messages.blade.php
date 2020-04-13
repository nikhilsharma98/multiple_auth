<div class="text-center text-bold">
    @if(count($errors) > 1)
            @foreach($errors->all() as $error)
            <strong>
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            </strong>
            @endforeach
    @endif
    
    @if(session('success'))
        <strong>
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </strong>  
    @endif      
    
    @if(session('error'))
        <strong>
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        <strong>  
    @endif
    </div>      