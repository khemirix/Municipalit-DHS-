@extends('dashboard')
@section('content')

<div class="content">
    <div class="container mt-12">
        <div class="row">
            <div class="col">

            <form  action="{{route('ajoutReclamation')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description"
                    value="{{old('description')}}"></textarea>

                    <!-- Error -->
                    @if ($errors->has('description'))
                    <div class="error">
                        {{ $errors->first('description') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="dateReclamation">date de Reclamation</label>
                    <input type="date" class="form-control {{ $errors->has('dateReclamation') ? 'error' : '' }}" name="dateReclamation"
                        id="dateReclamation" value="{{('dateReclamation')}}">

                    @if ($errors->has('dateReclamation'))
                    <div class="error">
                        {{ $errors->first('dateReclamation') }}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="imageRec">Image de Réclamation</label>
                        <input type="file" name="imageRec" class="form-control" id="imageRec">
                </div>

                <div id="mapid"></div>
               
           <div class="text-center">
                <input type="submit" name="send" value="Submit" class="btn btn-warning btn-block col-2">
           </div>
           
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
