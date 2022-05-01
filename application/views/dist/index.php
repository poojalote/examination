<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<style type="text/css">
  .card_height{
    height: 370px;
    overflow: auto;
  }
</style>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card card_height">
                <div class="card-header">
                  <h4>Focus View</h4>
                  <div class="card-header-action">
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Detail</th>
                        <th>Target Date</th>
                        <th>Employee</th>
                      </tr>
                      <tr>
                        <td class="font-weight-600">Kusnadi</td>
                        <td>July 19, 2018</td>
                          <td>Narendra Jadhav</td>
                      </tr>
                       <tr>
                        <td class="font-weight-600">Kusnadi</td>
                        <td>July 19, 2018</td>
                          <td>Pooja Lote</td>
                      </tr>
                       <tr>
                        <td class="font-weight-600">Kusnadi</td>
                        <td>July 19, 2018</td>
                          <td>Supriya Wadekar</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card_height">
                  <div class="card-header">
                    <h4>Today's List</h4>
                  </div>
                  <div class="card-body">
                    <form class="form-inline">
                     <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect05">
                          <option selected="">Choose...</option>
                          <option value="1">Task 1</option>
                          <option value="2">Task 2</option>
                          <option value="3">Task 3</option>
                        </select>
                        <input type="text" class="form-control" placeholder="details">
                        <input type="time" class="form-control" placeholder="Time from">
                        <input type="time" class="form-control" placeholder="Time To">
                      </div>
                    </form>
                    <div class="pt-2">
                      <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                    
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">High</div>
                        <h6 class="media-title"><a href="#">Task Name 1 </a></h6>
                        <div class="text-small text-muted">Task Detail <div class="bullet"></div> 4PM - 6PM</div>
                      </div>
                    </li>
                   <li class="media">
                    
                      <div class="media-body">
                        <div class="badge badge-pill badge-success mb-1 float-right">Low</div>
                        <h6 class="media-title"><a href="#">Task Name 2 </a></h6>
                        <div class="text-small text-muted">Task Detail <div class="bullet"></div> 4PM - 6PM</div>
                      </div>
                    </li>
                    <li class="media">
                    
                      <div class="media-body">
                        <div class="badge badge-pill badge-warning mb-1 float-right">Medium</div>
                        <h6 class="media-title"><a href="#">Task Name 3 </a></h6>
                        <div class="text-small text-muted">Task Detail <div class="bullet"></div> 4PM - 6PM</div>
                      </div>
                    </li>
                   
                  </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
             <div class="card card_height">
                  <div class="card-header">
                    <h4>Task Assign</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Assign By</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Assign To</a>
                      </li>
                     
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                        <ul class="list-unstyled list-unstyled-border">
                          <li class="media">
                            <div class="badge badge-pill badge-warning mb-1 mr-1 float-right">NJ</div>
                            <div class="media-body">
                              <div class="media-right">
                                <div class="float-right dropdown">
                                <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                <div class="dropdown-menu">
                                  <div class="dropdown-title">Task Status</div>
                                   <div class="badge badge-pill badge-success mb-1 mr-1 float-right">Complete</div>
                                   <div class="badge badge-pill badge-warning mb-1 mr-1 float-right">Pending</div>
                                   <div class="badge badge-pill badge-danger mb-1 mr-1 float-right">Delay</div>
                                    <div class="badge badge-pill badge-info mb-1 mr-1 float-right">On Track</div>
                                </div>
                              </div>
                              </div>
                              <div class="media-title"><a href="#">Task name 1</a></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                           <li class="media">
                            <div class="badge badge-pill badge-success mb-1 mr-1 float-right">PL</div>
                            <div class="media-body">
                              <div class="media-right">
                                <div class="float-right dropdown">
                                <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                <div class="dropdown-menu">
                                  <div class="dropdown-title">Task Status</div>
                                   <div class="badge badge-pill badge-success mb-1 mr-1 float-right">Complete</div>
                                   <div class="badge badge-pill badge-warning mb-1 mr-1 float-right">Pending</div>
                                   <div class="badge badge-pill badge-danger mb-1 mr-1 float-right">Delay</div>
                                    <div class="badge badge-pill badge-info mb-1 mr-1 float-right">On Track</div>
                                </div>
                              </div>
                              </div>
                              <div class="media-title"><a href="#">Task name 1</a></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                           <li class="media">
                            <div class="badge badge-pill badge-info mb-1 mr-1 float-right">BM</div>
                            <div class="media-body">
                              <div class="media-right">
                                <div class="float-right dropdown">
                                <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                <div class="dropdown-menu">
                                  <div class="dropdown-title">Task Status</div>
                                   <div class="badge badge-pill badge-success mb-1 mr-1 float-right">Complete</div>
                                   <div class="badge badge-pill badge-warning mb-1 mr-1 float-right">Pending</div>
                                   <div class="badge badge-pill badge-danger mb-1 mr-1 float-right">Delay</div>
                                    <div class="badge badge-pill badge-info mb-1 mr-1 float-right">On Track</div>
                                </div>
                              </div>
                              </div>
                              <div class="media-title"><a href="#">Task name 1</a></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                           <ul class="list-unstyled list-unstyled-border">
                          <li class="media">
                            <div class="media-body">
                              <div class="media-right">
                                 <div class="badge badge-pill badge-warning mb-1 mr-1">Pending</div>
                              </div>
                              <div class="media-title"><a href="#">Task name 1</a> <div class="badge badge-pill badge-warning mb-1 mr-1">Pl</div>
                              <div class="badge badge-pill badge-success mb-1 mr-1">NJ</div></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                          <li class="media">
                            <div class="media-body">
                              <div class="media-right">
                                 <div class="badge badge-pill badge-success mb-1 mr-1">Complete</div>
                              </div>
                              <div class="media-title"><a href="#">Task name 2</a> <div class="badge badge-pill badge-warning mb-1 mr-1">Pl</div>
                              <div class="badge badge-pill badge-success mb-1 mr-1">NJ</div></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                          <li class="media">
                            <div class="media-body">
                              <div class="media-right">
                                 <div class="badge badge-pill badge-info mb-1 mr-1">On Track</div>
                              </div>
                              <div class="media-title"><a href="#">Task name 3</a> <div class="badge badge-pill badge-warning mb-1 mr-1">Pl</div>
                              <div class="badge badge-pill badge-success mb-1 mr-1">NJ</div></div>
                              <div class="text-small text-muted">Task detail<div class="bullet"></div> 4PM - 6PM</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </div>
            </div>
          </div>
        
          <div class="row">
            
            <div class="col-md-6">
             <div class="card card_height">
                  <div class="card-header">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">
                    <div class="fc-overflow">                            
                      <div id="myEvent" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listWeek-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>July 2021</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden auto; height: auto;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 114px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2021-06-27"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2021-06-28"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2021-06-29"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2021-06-30"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-07-01"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-07-02"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-07-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2021-06-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2021-06-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2021-06-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2021-06-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-thu fc-past" data-date="2021-07-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-fri fc-past" data-date="2021-07-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-sat fc-past" data-date="2021-07-03"><span class="fc-day-number">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 114px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-07-04"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-07-05"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-07-06"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-07-07"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-07-08"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-07-09"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-07-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2021-07-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-07-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-tue fc-past" data-date="2021-07-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-wed fc-past" data-date="2021-07-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-thu fc-past" data-date="2021-07-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-fri fc-past" data-date="2021-07-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-sat fc-past" data-date="2021-07-10"><span class="fc-day-number">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 114px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-07-11"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-07-12"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-07-13"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-07-14"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-07-15"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-07-16"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-07-17"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2021-07-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-07-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-tue fc-past" data-date="2021-07-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-wed fc-past" data-date="2021-07-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-thu fc-past" data-date="2021-07-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-fri fc-past" data-date="2021-07-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-sat fc-past" data-date="2021-07-17"><span class="fc-day-number">17</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 114px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-07-18"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-07-19"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2021-07-20"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2021-07-21"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2021-07-22"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2021-07-23"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2021-07-24"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2021-07-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-07-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-tue fc-past" data-date="2021-07-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-wed fc-past" data-date="2021-07-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-thu fc-past" data-date="2021-07-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-fri fc-past" data-date="2021-07-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-sat fc-past" data-date="2021-07-24"><span class="fc-day-number">24</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 114px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2021-07-25"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2021-07-26"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2021-07-27"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-07-28"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-07-29"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-07-30"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-07-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2021-07-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-mon fc-past" data-date="2021-07-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-tue fc-today " data-date="2021-07-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-07-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-07-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-07-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-07-31"><span class="fc-day-number">31</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 119px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2021-08-01"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2021-08-02"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2021-08-03"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2021-08-04"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2021-08-05"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2021-08-06"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2021-08-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2021-08-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2021-08-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-08-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-08-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-08-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-08-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-08-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
               <div class="card card_height">
                <div class="card-header">
                  <h4>Dashboard</h4>
                  <div class="card-header-action">
                  </div>
                </div>
                <div class="card-body p-0">
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>