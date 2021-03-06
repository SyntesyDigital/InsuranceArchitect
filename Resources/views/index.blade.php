@extends('architect::layouts.master')

@section('content')
<div class="container dashboard">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">

      <div class="page-title">
        <h1>{{Lang::get('architect::home.wellcome')}} {{Auth::user()->firstname}},</h1>
        <h3>{{Lang::get('architect::home.current_state')}}</h3>
      </div>

      <div class="dashboard-items">
        <div class="row">
            @if(has_roles([ROLE_SUPERADMIN,ROLE_SYSTEM]))

              <div class="col-xs-6">
                <!-- React Table.js -->
                <div id="dashboard-table"
                  title={{Lang::get('architect::home.pages')}}
                  route={{route('contents.modal.data')."?is_page=1"}}
                ></div>
              </div>

              <div class="col-xs-6">
                <div id="custom-table"
                  title="Configuration"
                  route={{ route('extranet.api.elements.data')."?q=errors" }}
                ></div>
              </div>

            @endif

            <div class="col-xs-12">
              <!-- React SiteMap.js-->
              <div id="dashboard-sitemap"></div>
            </div>


        </div>
      </div>

    </div>
  </div>

  <div class="separator" style="height:60px;"></div>

</div>

@stop

@push('javascripts-libs')
{{ Html::script('/modules/architect/js/libs/d3/d3.v4.min.js') }}
<script>
var routes = {
  'showContent' : "{{route('contents.show',['id' => ':id'])}}",
};
</script>
@endpush
