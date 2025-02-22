 <div class="row" data-aos="fade-up">
     <div class="col-lg-3 stretch-card grid-margin">
         <div class="card">
             <div class="card-body">
                 <h2>Danh Mục</h2>
                 <ul class="vertical-menu">
                     @foreach($category as $key => $category)
                     <li><a href="#">{{$category->name}}</a></li>
                     @endforeach
                 </ul>
             </div>
         </div>
     </div>
     <div class="col-lg-9 stretch-card grid-margin">
         <div class="card">
             <div class="card-body">
                 <div class="row">
                     <div class="col-sm-4 grid-margin">
                         <div class="position-relative">
                             <div class="rotate-img">
                                 <img src="/frontend/assets/images/dashboard/home_4.jpg" alt="thumb" class="img-fluid" />
                             </div>
                             <div class="badge-positioned">
                                 <span class="badge badge-danger font-weight-bold">Flash news</span>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-8  grid-margin">
                         <h2 class="mb-2 font-weight-600">
                             South Korea’s Moon Jae-in sworn in vowing to address
                             North
                         </h2>
                         <div class="fs-13 mb-2">
                             <span class="mr-2">Photo </span>10 Minutes ago
                         </div>
                         <p class="mb-0">
                             Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an
                         </p>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-4 grid-margin">
                         <div class="position-relative">
                             <div class="rotate-img">
                                 <img src="/frontend/assets/images/dashboard/home_5.jpg" alt="thumb" class="img-fluid" />
                             </div>
                             <div class="badge-positioned">
                                 <span class="badge badge-danger font-weight-bold">Flash news</span>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-8  grid-margin">
                         <h2 class="mb-2 font-weight-600">
                             No charges over 2017 Conservative battle bus cases
                         </h2>
                         <div class="fs-13 mb-2">
                             <span class="mr-2">Photo </span>10 Minutes ago
                         </div>
                         <p class="mb-0">
                             Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an
                         </p>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-sm-4">
                         <div class="position-relative">
                             <div class="rotate-img">
                                 <img src="/frontend/assets/images/dashboard/home_6.jpg" alt="thumb" class="img-fluid" />
                             </div>
                             <div class="badge-positioned">
                                 <span class="badge badge-danger font-weight-bold">Flash news</span>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-8">
                         <h2 class="mb-2 font-weight-600">
                             Kaine: Trump Jr. may have committed treason
                         </h2>
                         <div class="fs-13 mb-2">
                             <span class="mr-2">Photo </span>10 Minutes ago
                         </div>
                         <p class="mb-0">
                             Lorem Ipsum has been the industry's standard dummy
                             text ever since the 1500s, when an
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>