@extends('layouts.base')
@section('content')
  <div class="uk-container">

    <div class="uk-card uk-card-default uk-width-1-1@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <span class="uk-margin-small-right uk-text-success" uk-icon="icon:calendar;ratio:2"></span>
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">El temps per localitats </h3>
            </div>
            <div class="uk-width-auto">
                  <p> {{ date('Y-m-d H:i:s') }}</p>

            </div>
        </div>
    </div>
    <div class="uk-card-body">
      <form action="{{ route('city.index')}}" method="post">
        @csrf


      <div class="uk-margin">
          <input class="uk-input" type="text" placeholder="Localitat" name="city">
      </div>
      <div class="uk-margin uk-flex uk-flex-center">
      <button type="submit" class="uk-button uk-button-default uk-button-small">envia</button>
    </div>
    </form>
    </div>

</div>
  </div>


@endsection
