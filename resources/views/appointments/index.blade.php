@extends('layouts.panel')

@section('content')
<div class="card shadow">
<div class="card-header border-0">
  <div class="row align-items-center">
    <div class="col">
      <h3 class="mb-0">Mis citas</h3>
    </div>
    <div class="col text-right">
      	<a href="{{ url('patients/create')}}" class="btn btn-sm btn-success">
      		Nuevo paciente
  		</a>
    </div>
  </div>
</div>
<div class="card-body">
  @if (session('notification'))
    <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session('notification')}}
    </div>
  @endif

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link"  data-toggle="pill" href="#confirmed-appointments" onclick="Tab1()" role="tab" >Mis próximas citas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#pending-appointments" onclick="Tab2()" role="tab" >Citas por confirmar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#old-appointments" onclick="Tab3()" role="tab">Historial de citas</a>
    </li>
  </ul>
</div>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="confirmed-appointments" role="tabpanel">
    @include('appointments.tables.confirmed')
  </div>
  <div class="tab-pane fade" id="pending-appointments" role="tabpanel">
    @include('appointments.tables.pending')
  </div>
  <div class="tab-pane fade" id="old-appointments" role="tabpanel">
    @include('appointments.tables.old')
  </div>
</div>
</div>
@endsection

<script>


function Tab1(){

  var ca= "http://"+window.location.hostname+"/appointments?#confirmed-appointments"
  window.location.replace(ca);
}

function Tab2(){
   var pa= "http://"+window.location.hostname+"/appointments?#pending-appointments"
   window.location.replace(pa);
}

function Tab3(){
   var oa= "http://"+window.location.hostname+"/appointments?#old-appointments"
   window.location.replace(oa);
}

window.onload = function() {
    var a= getUrlVars()["tab"];
    //alert(a)
    $('#pills-tab a[href="#'+a+'"]').tab('show')
};

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


function removeParam(parameter)
{
  var url=document.location.href;
  var urlparts= url.split('?');

 if (urlparts.length>=2)
 {
  var urlBase=urlparts.shift(); 
  var queryString=urlparts.join("?"); 

  var prefix = encodeURIComponent(parameter)+'=';
  var pars = queryString.split(/[&;]/g);
  for (var i= pars.length; i-->0;)               
      if (pars[i].lastIndexOf(prefix, 0)!==-1)   
          pars.splice(i, 1);
  url = urlBase+'?'+pars.join('&');
  window.history.pushState('',document.title,url); // added this line to push the new url directly to url bar .

}
return url;
}
</script>
