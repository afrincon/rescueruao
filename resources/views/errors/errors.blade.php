@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>Por favor llenar los campos correspondientes</p>
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif