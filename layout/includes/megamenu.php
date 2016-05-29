

 

    <div class="container yambar">
      
    
     
      
    
      
      <!-- Misc components -->
      <div class="navbar yamm">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav3">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           
            <div class="nav-collapse collapse" id="nav3">
              <ul class="nav">
                <!-- Media Example -->
               <?php if (!empty($PAGE->theme->settings->menu1title )) { ?> <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $PAGE->theme->settings->menu1title; ?>  </a>
                  <ul class="dropdown-menu">
                    <li> <?php } ?>
                      <div class="yamm-content" >
                        <ul class="media-list">
                          <li class="media">
                            <a href="#" class="pull-right"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" > </a>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
                            </div>
                          </li>
                          <li class="media">
                            <a href="#" class="pull-right"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" > </a>
                            <div class="media-body">
                              <h4 class="media-heading">Media heading</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Tables -->
                <li class="dropdown yamm-fullwidth">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Communities  </a>
                  <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Thumbnails demo -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Best Practice  </a>
                  <ul class="dropdown-menu ">
                    <li>
                      <div class="yamm-content">
                        <div class="row-fluid">
                          <ul class="thumbnails">
                            <li class="span4">
                              <div class="thumbnail">
                                <img alt="260x130" data-src="holder.js/260x130">
                                <div class="caption">
                                  <h3>Expresso</h3>
                                  <p>
                                    Mazagran doppio half and half aftertaste organic, rich doppio
                                  </p>
                                  <p>
                                    <a class="btn btn-primary" href="#"> Action </a>
                                    <a class="btn" href="#"> Action </a>
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li class="span4">
                              <div class="thumbnail">
                                <img alt="260x130" data-src="holder.js/260x130">
                                <div class="caption">
                                  <h3>Americano</h3>
                                  <p>
                                    Black latte cinnamon, cultivar trifecta crema cappuccino
                                  </p>
                                  <p>
                                    <a class="btn btn-primary" href="#"> Action </a>
                                    <a class="btn" href="#"> Action </a>
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li class="span4">
                              <div class="thumbnail">
                                <img alt="260x130" data-src="holder.js/260x130">
                                <div class="caption">
                                  <h3>Macchiato</h3>
                                  <p>
                                    Bar roast et, as latte café au lait, mocha aromatic robusta
                                  </p>
                                  <p>
                                    <a class="btn btn-primary" href="#"> Action </a>
                                    <a class="btn" href="#"> Action </a>
                                  </p>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>  
                  
                  
                  
                  
                  
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Fundamentals  </a>
                  
                       
                </li>    
                  
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> About  </a>
                  
                       
                </li>    
                  
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> MyePortfolio  </a>
                  
                       
                </li>    
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  

              </ul>
              <ul class="nav pull-right">
                <!-- Forms -->
                <li class="dropdown">
                
            <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search Courses</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="<?php echo get_string("searchcourses")?>" accesskey="6" class="search_tour bg-white no-border left search-box__input ui-autocomplete-input" type="text" name="search" id="search-1" autocomplete="off">
                    <button type="submit" class="no-border bg-white pas search-box__button"><abbr class="fa fa-search"></abbr></button>
               
            </form>
        </div>
                  
                </li>                
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
     

    

    </div>

 
