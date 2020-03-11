@extends('layouts.app')

@section('content')

        
    <div class="container-fluid  mt-5">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                
                <!-- Image Map Generated by http://www.image-map.net/ -->
                <img src="images/category.PNG" usemap="#image-map" class="mx-auto mw-100 mh-100">
                <map name="image-map">
                    <area target="" alt="mechanical engineering" title="mechanical engineering" href="/mechanical" coords="1026,275,198" shape="circle">
                    <area target="" alt="material engineering" title="material engineering" href="/material" coords="1531,604,203" shape="circle">
                    <area target="" alt="control engineering" title="control engineering" href="/control" coords="1364,1181,201" shape="circle">
                    <area target="" alt="fluid dynamics" title="fluid dynamics" href="/fluiddynamics" coords="713,1174,199" shape="circle">
                    <area target="" alt="thermodynamics" title="thermodynamics" href="/thermodynamics" coords="530,608,197" shape="circle">
                </map>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="list-group">
                    <a href="/mechanical" class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="mx-auto justify-content-between">
                            <h5 class="mb-1 text-dark">Mechanical Engineering</h5>
                            <small>Mechanical engineering is an engineering discipline that combines engineering physics and mathematics principles with materials science to design, analyze, manufacture, and maintain mechanical systems.</small>
                        </div>
                    </a>
                    <a href="/material" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="mx-auto  justify-content-between">
                            <h5 class="mb-1 text-warning" >Material Engineering</h5>
                            <small class="text-muted">Materials engineers create and study materials at the atomic level. They use computers to understand and model the characteristics of materials and their components. </small>
                        </div>
                    </a>
                    <a href="/control" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="mx-auto  justify-content-between">
                            <h5 class="mb-1 text-danger">Control Engineering</h5>
                            <small class="text-muted">Control engineering or control systems engineering is an engineering discipline that applies automatic control theory to design systems with desired behaviors in control environments.</small>
                        </div>
                    </a>
                    <a href="/fluiddynamics" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="mx-auto  justify-content-between">
                            <h5 class="mb-1 text-success">Fluid Dynamics</h5>
                            <small class="text-muted">fluiddynamics is a subdiscipline of fluid mechanics that describes the flow of fluids—liquids and gases.</small>
                        </div>
                    </a>
                    <a href="/thermodynamics" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="mx-auto  justify-content-between">
                            <h5 class="mb-1 text-danger">Thermodynamics</h5>
                            <small class="text-muted">Thermodynamics is the branch of physics that deals with the relationships between heat and other forms of energy.</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection