@extends('dashboard')
@section('content')

<div class="content">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <form  action="{{route('ajoutDemande')}}" method="POST" enctype="multipart/form-data" class="row g-4">

                    @csrf

                    <div class="form-group" class="col-md-6">
                        <label for="type"  class="form-label">Type d'information</label>
                        <input type="text" class="form-control {{ $errors->has('type') ? 'error' : '' }} form-control-sm" name="type" id="type"
                        value="{{old('type')}}">

                        <!-- Error -->
                        @if ($errors->has('type'))
                        <div class="error">
                            {{ $errors->first('type') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="lieu"  class="form-label col-1">lieu</label>
                        <select name="lieu" class="form-control-sm">
                            <option>Mellita</option>
                            <option> Hachène</option>
                            <option>Fatou</option>
                            <option>Mezraya</option>
                            <option>Cedghiane</option>
                            <option> Erriadh</option>
                            <option> Oualegh</option>
                            <option>Taourit</option>
                            <option>Boumellel</option>
                            <option>Essouani </option>
                            <option> Ejjouamaâ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dateDemande" class="form-label">Date de demande</label>
                        <input type="date" class="form-control {{ $errors->has('dateDemande') ? 'error' : '' }}" name="dateDemande" id="dateDemande"
                        value="{{old('dateDemande')}}">

                        <!-- Error -->
                        @if ($errors->has('dateDemande'))
                        <div class="error">
                            {{ $errors->first('dateDemande') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label form-control-sm">Description</label>
                        <textarea class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description"
                        value="{{old('description')}}"></textarea>

                        <!-- Error -->
                        @if ($errors->has('description'))
                        <div class="error">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-5"></div>
                    <input type="submit" name="send" value="Submit" class="btn btn-warning btn-block col-2">
                    <div class="container"></div>
        </form>
    </div>
</div>
    </div>
</div>

@endsection
