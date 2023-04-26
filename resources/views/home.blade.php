@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Catalog') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="row p-5">
            @foreach($items as $item)
                <div class="col-lg-4 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3>{{  $item->name }}</h3>
                            <p class='text-muted'>{{  $item->description }}</p>
                            <p class='fw-bold'>PHP : {{  number_format($item->price, 2, '.', ',') }}</p>
                            <button data-id="{{  $item->id }}" class='btn btn-primary'>BUY</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
        <script>
            // Process for sending our request to socket.

            // so we need to run our node js app in 192.168.1.2 with port 3030
            // 192.168.1.2 depends on your machine ip.
            const socket = io.connect('http://192.168.1.26:3030');
            
            // Let's code the sending process
            // When the user click the button we need to send the item_id in our nodejs app.

            // Create an click event listener
            document.addEventListener('click', (e) => {
                // We need to strict the click event just in our button BUY to do that.
                if(e.target.tagName.toLowerCase() === 'button' && e.target.getAttribute('data-id')) {
                    // Get the item_id of item
                    const itemID = e.target.getAttribute('data-id');

                    // Send in our NodeJS App.
                    socket.emit('order', {
                        item_id : itemID,
                    })
                }
            });

        

        </script>

    

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
