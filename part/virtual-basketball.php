<?php include 'part/head.php'; ?>
<?php include 'part/header.php'; ?>
      <div class="content virtual virtual-basketball">
        <div class="sidebar-func" id="sidebar-func">    
          <div class="betslip-tg" id="betslip-tg"> 
            <div class="betslip-hd">
              <i class="fa fa-arrow-circle-left">
                <span class="betslip-nm" id="betslip-nm">0</span>
              </i>
              <div class="betslip-dc">
                <span class="total-empty disp">BET SLIP</span>
                <span class="total-odd">1290.5</span>
              </div>
            </div>
          </div>
  
          <div class="sidebar-inner">

            <div class="bet-slip" id="bet-slip" >
              <div class="bet-slip-head right-bar-heading">
                Bet slip
              </div>
              <div class="row">
                <div class="bet-slip-submenu">
                <div class="col-md-6">
                 

                    <div class="nav nav-tabs bet-type dropdown" id="bet-type">
                      <button aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle bet-type-select">
                        <span id="selected">Single</span><span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li class="active"><a href="#single" data-toggle="tab">Single</a></li>
                        <li class=""><a href="#combined" data-toggle="tab">Combined</a></li>
                        <li class=""><a href="#system" data-toggle="tab">System</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <button class="clear-bets" id="clear-bets">
                    <i class="fa fa-trash" aria-hidden="true"></i> clear all
                  </button>
                  </div>
                  <div class="col-md-12">
                  <ul class="bet-slip-filter">
                    <li class="bet-slip-tab"><a href="#">1</a></li>
                    <li class="bet-slip-tab"><a href="#">2</a></li>
                    <li class="bet-slip-tab"><a href="#">3</a></li>
                  </ul>
                  </div>
                </div>
              </div>
              <div class="bet-slip-body">
              <?php include 'part/betslips-block.php'; ?>
              </div>
            </div>
          </div>
        </div>
      <div class="mask-overlay" id="mask-overlay"></div>
        <div class="container crop">
          <div class="row">        
            <div class="col-md-1"></div>
                  <div class="col-md-10">
        <div class="virtual-outer">
            <div class="panel with-nav-tabs stream-content panel-default">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel-heading">
                    <ul class="nav nav-tabs stream-nav">
                      <li class="stream-nav-item">
                          <a href="virtual.php"><img src="images/virsoccer.png" alt="Soccer" title="Soccer" class="virt-img"><p>Soccer</p></a>
                      </li>
                      <li class="stream-nav-item">
                          <a href="virtual-horse-riding.php"><img src="images/virhorse.png" alt="Horse racing" title="Horse racing" class="virt-img"><p>Horse rasing</p></a>
                      </li>
                      <li class="stream-nav-item">
                          <a href="virtual-greyhounds.php"><img src="images/virgreyhound.png" alt="Greyhound" title="Greyhound" class="virt-img"><p>Greyhound</p></a>
                      </li>
                      <li class="stream-nav-item">
                          <a href="virtual-tennis.php"><img src="images/virtennis.png" alt="Tennis" title="Tennis" class="virt-img"><p>Tennis</p></a>
                      </li>
                      <li class="stream-nav-item active">
                          <a href="virtual-basketball.php"><img src="images/virbasketball.png" alt="Basketball" title="Basketball" class="virt-img"><p>Basketball</p></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel-body">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="tab1default">                
                        <iframe frameborder="0" allowtransparency="true" name="vfl_iframe" id="vfl_iframe" height="520" scrolling="no" src="https://www.betadonis.com//vfl30/vleague.php?clientid=1609&lang=en&style=betadonis"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="virtual-bets-outer">
            <!-- football -->
            <div class="virtual-bets-container basketball">
                <div class="virtual-bets-filter flex">
                    <a href="#tab1" data-toggle="tab" class="virt-tab active"><span>Match winner</span></a>
                    <a href="#tab2" data-toggle="tab" class="virt-tab"><span>Total</span></a>
                    <a href="#tab3" data-toggle="tab" class="virt-tab"><span>Winning margins</span></a>
                    <a href="#tab4" data-toggle="tab" class="virt-tab"><span>Handicap</span></a>
                    <a href="#tab5" data-toggle="tab" class="virt-tab"><span>Race to X</span></a>
                    <a href="#tab6" data-toggle="tab" class="virt-tab"><span>Team's Total</span></a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="tab1">
                        <div class="row table-head">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">Winner</div>
                            <div class="col-md-5">Highest Scoring Quarter</div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">Q1</div>
                            <div class="col-md-1">Q2</div>
                            <div class="col-md-1">Q3</div>
                            <div class="col-md-1">Q4</div>
                            <div class="col-md-1">Eql.</div>
                        </div>
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-1.php'; ?>  
                    </div>

                    <div class="tab-pane fade" id="tab2">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-5" style="text-align: center">Total Match Result (+overtime)</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                        </div>
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-2.php'; ?>  
                    </div>
                    <div class="tab-pane fade score" id="tab3">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row table-head">
                            <div class="col-md-1"></div>
                            <div class="col-md-4" style="text-align: center">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">1-5</div>
                            <div class="col-md-2">6-10</div>
                            <div class="col-md-2">>10</div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>                        
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-3.php'; ?> 
                    </div>
                    <div class="tab-pane fade" id="tab4">
                        <div class="row p0">
                            <div class="col-md-6"><a class="inner-tab">Match Result</a></div>
                            <div class="col-md-6"><a class="inner-tab">1.Half</a></div>
                        </div>
                        <div class="row table-head">
                            <div class="col-md-1"></div>
                            <div class="col-md-4" style="text-align: center">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-4.php'; ?>                         
                    </div>
                    <div class="tab-pane fade" id="tab5">
                        <div class="row table-head">
                            <div class="col-md-1"></div>
                            <div class="col-md-4" style="text-align: center">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">1-5</div>
                            <div class="col-md-2">6-10</div>
                            <div class="col-md-2">>10</div>
                        </div>
                        <div class="row table-head m0">
                            <div class="col-md-1"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1">2</div>
                        </div>                      
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-5.php'; ?>                          
                    </div>
                    <div class="tab-pane fade" id="tab6">
                        <div class="row table-head">
                            <div class="col-md-4" style="text-align: center">Winning Margins Match Result (+overtime)</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1">Over</div>
                            <div class="col-md-1">Under</div>
                        </div>                       
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>             
                        <?php include 'part/virtual-part/virtual-bets-basketball-6.php'; ?>                          
                    </div>
                </div>           
            </div>
        </div> 
        <!-- endof virtual outer -->
    </div>   
            </div>     
            <div class="col-md-1"></div>  
          </div>
        </div>
      </div>
<?php include 'part/footer.php'; ?>
  <script>  
    $(document).ready(function() {
      $('.bet-link.show-detail').click(function() {
        $(this).find('i').toggleClass('fa-plus');
        $(this).find('i').toggleClass('fa-minus');                
        $(this).parents('.row').next().toggle();
      });
      $('.virt-filter').click(function(){
        $(this).parents('.virt-filter-outer').next().hide()
                                              .next().show();
      });
    });
  </script> 

<script>
    $('.show-detail').click(function(){
        $(this).parents('.row').next().toggle();
    });
    $('.show-detail-handicap').click(function(){
        $(this).parents('.row').next().next().toggle();
    });
    $('.virt-tab').click(function(){
        $(this).parents('.virtual-bets-filter')
               .find('.virt-tab.active')    
               .removeClass('active');
        $(this).addClass('active');
    });
</script>

<!-- 
<?php include 'part/footer/footer-inside.php';?>
<?php include 'script.php'; ?> -->


</body>

</html>