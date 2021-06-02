@extends('layouts.base')
@section('content')
  <div class="uk-flex uk-flex-center">
  <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-text-center">{{$info->name}}</h3>
            <h3 class="uk-text-center">{{$info->main->temp}} º C</h3>

            <div class="uk-flex uk-flex-center">
              <div>
                <ul class="uk-list">
                  <li>Sensacio : {{$info->main->feels_like}} º C</li>
                  <li>T.Min : {{$info->main->temp_min}} º C</li>
                  <li>T.Max : {{$info->main->temp_max}} º C</li>
                  <li>Pressió : {{$info->main->pressure}} </li>
                  <li>Humitat : {{$info->main->humidity}} </li>
                  <li>Vent : {{$info->wind->speed}} </li>
                  <li>Visibilitat : {{$info->visibility}} </li>
                  <li>Nuvols : {{$info->clouds->all}} %</li>
                  <li>Sortida Sol : {{$info->sys->sunrise}} </li>
                  <li>Posta de Sol : {{$info->sys->sunset}} </li>
                  <li>Longitut : {{$info->coord->lon}} </li>
                  <li>Latitut : {{$info->coord->lat}} </li>
                </ul>
              </div>

            </div>
  </div>

</div>
<a class="uk-button uk-button-default" href="{{'/'}}">back</a>
@endsection
