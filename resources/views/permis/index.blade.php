
@extends('dashboard')
@section('content')
<div class="content">

<div class="content">
    <div class="container lg-12">
        <div class="row">
            <div class="col col-lg-12">


            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> République Tunisienne</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ministère des affaires locales et de l'environnement</font></font></div>
            <div align="right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Commune de Djerba Midoun</font></font></div>
            <div align="center"><span style="font-size:36px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Permis </font></font></span></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il concerne l'immobilier bâti et le terrain non bâti</font></font></div>
            <div align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Le code de la collection locale publié par la loi n ° 11 de 1997 du 3 février 1997)</font></font></div> <br>

            @foreach($permis as $row)
                @if (auth()->id()==$row->users_id)
                    <div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Institution autorisée:</h5>
                                    <div class=col-lg-6>
                                        <p>{{$row->institutionAutorise}}</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Numéro d'identification fiscale:</h5>
                                    <div class=col-lg-6>
                                            <p>{{$row->numIdentificationFiscale}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">La qualité du déclarant:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->qualitéDéclarant}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6">État de l'immobilier:</h5>
                                <div class=col-lg-6>
                                    <p>{{$row->etatImmobilier}}</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4">Adresse:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->adresse}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5 class="col-lg-6 ">Superficie du terrain non bâti (m2):</h5>
                                <div class=col-lg-6>
                                        <p>{{$row->superficieTerrainNonBati}}</p>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Valeur commerciale (m2):</h5>
                                <div class="col-lg-6">
                                    {{$row->valeurCommerciale}}
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Surface couverte (m2):</h5>
                                <div class=col-lg-6>
                                    <p>{{$row->surfaceCouverte}}</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">La composition du bien immobilier et ses dépendances:</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->compositionImmobilierEtSesDépendances}}</p>
                                </div>
                                </div>
                            </div>


                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-6 ">Teinture d'utilisation du médicament:</h5>
                                        <div class=col-lg-6>
                                            <p>{{$row->teintureUtilisation}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group row">
                                        <h5  class="col-lg-4 ">Activité mentionnée (strictement):	</h5>
                                <div class="col-lg-6">
                                    <p>{{$row->activitéMentionnée}}</p>
                                </div>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group row">
                                    <h5  class="col-lg-4 ">Services disponibles:</h5>
                                    <div class="col-lg-6">
                                        <p>{{$row->servicesDispo}}</p>
                                    </div>
                            </div>


                        </div>
                    <hr>

                @endif
            @endforeach
            </div>
        </div>
    </div>
</div>
</div>

@endsection


