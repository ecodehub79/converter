@include('header')
<body class=" homepage " data-gr-c-s-loaded="true">
   <div class="custom">
      <script type="text/javascript">_atrk_opts = { atrk_acct:"r3XBq1O7kI20L7", domain:"currency.wiki",dynamic: true};
         (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
      </script>
      <noscript>&lt;img src="https://certify.alexametrics.com/atrk.gif?account=r3XBq1O7kI20L7" alt="" width="1" height="1" style="display: none;" /&gt;</noscript>
      <p>&nbsp;</p>
   </div>
   <script async="" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/adsbygoogle.js.download"></script>
   <script src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/jquery.min.js(1).download"></script>
   <script>
      if (screen.width < 768) {
      
      	function myFunction(el) {
      	var eTopthis = $(el).offset().top;
      	
      	window.scrollTo(0, eTopthis-35);
      }
      
      }
   </script>
   <div class="site-wrap">
      <div class="site-wrap-in">
         <header class="site-header">
            <div class="center-wrap">
               <div class="site-logo">
                  <a href="https://www.currency.wiki/">
                  <img alt="www.currency.wiki" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/logo.png">
                  </a>
               </div>
               <div id="menu">
                  <div class="block-title menu-btn">
                     <div class="menu-icon">&nbsp;</div>
                     Menu
                  </div>
               </div>
               <div id="langz" class="sdf">
                  <div class="block-title">Languages</div>
                  <div class="block-body">
                     <ul class="menu">
                        <li class="item-398 "><a href="https://www.currency.wiki/fr/">Français</a></li>
                        <li class="item-527 "><a href="https://www.currency.wiki/es/">Español</a></li>
                        <li class="item-598 "><a href="https://www.currency.wiki/it/">Italiano</a></li>
                        <li class="item-601 "><a href="https://www.currency.wiki/hi/">हिंदी</a></li>
                        <li class="item-399 "><a href="https://www.currency.wiki/ua/">Український</a></li>
                        <li class="item-596 "><a href="https://www.currency.wiki/nl/">Nederlands</a></li>
                        <li class="item-599 "><a href="https://www.currency.wiki/ru/">Русский</a></li>
                        <li class="item-601 active"><a href="https://www.currency.wiki/en/">English (UK)</a></li>
                     </ul>
                  </div>
               </div>
               <div id="share">
                  <div class="block-title">Share</div>
                  <ul class="block-body">
                     <li>
                        <a class="fb" href="https://www.currency.wiki/en/#" onclick="popupWindow(&#39;//www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.currency.wiki%2Fen%2F&amp;t=Free%20Currency%20Rates%20-%20Tools%20%26%20Exchange%20Analytics&#39;,&#39;Facebook&#39;)" target="_blank" title="Facebook"><span>Share on Facebook</span></a>
                     </li>
                     <li>
                        <a class="tw" href="https://www.currency.wiki/en/#" onclick="popupWindow(&#39;//twitter.com/share?text=Free%20Currency%20Rates%20-%20Tools%20%26%20Exchange%20Analytics&amp;url=https%3A%2F%2Fwww.currency.wiki%2Fen%2F&#39;,&#39;Twitter&#39;)" target="_blank" title="Twitter"><span>Share on Twitter</span></a>
                     </li>
                     <li>
                        <a class="gp" href="https://www.currency.wiki/en/#" onclick="popupWindow(&#39;//plus.google.com/share?url=https%3A%2F%2Fwww.currency.wiki%2Fen%2F&#39;,&#39;Google +&#39;)" target="_blank" title="Google +"><span>Share on Google +</span></a>
                     </li>
                     <li>
                        <a class="rd" href="https://www.currency.wiki/en/#" onclick="popupWindow(&#39;//www.reddit.com/submit?url=https%3A%2F%2Fwww.currency.wiki%2Fen%2F&#39;,&#39;Reddit&#39;)" target="_blank" title="Reddit"><span>Share on Reddit</span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </header>
         <div id="breadcrumb">
            <div class="center-wrap"></div>
         </div>
         <div id="site-content" class="site-content">
            <div id="main" class="site-content-wrap">
               <div class="center-wrap">
                  <div id="cont-wrap" class="site-content-middle r">
                     <div class="site-content-middle-in">
                        <div id="main-content">
                           <div id="system-message-container"></div>
                           <div id="content">
                              <div class="charts-page currency-page">
                                 <h1><span>Charts</span></h1>
                                 <div class="chart-description">
                                    <p><strong>US Dollar to Pound Sterling&nbsp;</strong></p>
                                    <p>This USD/GBP Chart lets you compare currency rate history.</p>
                                 </div>
				
                                <form method="post" action="graphcurrency" enctype="multipart/form-data">
             
                    {{ csrf_field() }}
                     
                   
             
               
                    <label for="pwd">From</label>
                      <select name="currfrom">
                      <option value="none"></option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select>
                    <label for="pwd">To</label>
                      <select name="currto">
                       <option value="none"></option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select>
 
                       <label for="pwd">Select Time</label>
                   
                        <select name="timetext">
                       <option value="none"></option>  
                     
                      <option value="1">Day</option>
                      <option value ="7">Last Week</option>
                      <option value="30">Last month</option>
                      <option value="90">Last 3 month</option>
                      <option value="180">Last 6 month</option>
                      <option value="365">Last 1 year</option>
                     
                      </select>
             
                    <button type="submit">convert</button>
 
    </form>
                                 <div class="chart">
                                    <div class="caption">USD (US Dollar) to GBP (Pound Sterling) 7 day history</div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                       google.charts.load('current', {'packages':['corechart']});
                                       google.charts.setOnLoadCallback(drawChart);
                                       
                                       function drawChart() {
                                         var data = google.visualization.arrayToDataTable([
                                           ['Date', 'Rate'],
                                           
										   <?php
 
    $finalresult= Session::get('finalresult');
    //print_r($finalresult);
      if(empty($finalresult)||$finalresult==null){
 
        //echo "Date: ".$finalresult[0][4]."<br> no data for this day<br>";  
 
    }
    else{
 
      $i=0;
       $length=$finalresult[0][7];
     
     
      while($i<$length){
                   echo "['".$finalresult[$i][1]."',".$finalresult[$i][0]."],";
       
                $i++;
      }
     
 
    }
 
    ?>
		                                    
					
                                           
                                         ]);
                                       
                                         var options = {
                                           title: 'USD (US Dollar) to GBP (Pound Sterling) 7 day history',
                                           curveType: 'function',
                                           legend: { position: 'right' },
                                       colors: ['#d51d29'],pointSize: 10
                                         };
                                       
                                         var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
                                       
                                         chart.draw(data, options);
                                       }
                                       
                                    </script>
                                    <div class="chart">
                                       <div id="curve_chart">
                                          <div style="position: relative;">
                                             <div dir="ltr" style="position: relative; width: 671px; height: 200px;">
                                                <div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                                   <svg width="671" height="200" aria-label="A chart." style="overflow: hidden;">
                                                      <defs id="defs">
                                                         <clipPath id="_ABSTRACT_RENDERER_ID_0">
                                                            <rect x="84" y="38" width="503" height="124"></rect>
                                                         </clipPath>
                                                      </defs>
                                                      <rect x="0" y="0" width="671" height="200" stroke="none" stroke-width="0" fill="#ffffff"></rect>
                                                      <g>
                                                         <text text-anchor="start" x="84" y="23.2" font-family="Arial" font-size="12" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">USD (US Dollar) to GBP (Pound Sterling) 7 day history</text>
                                                         <rect x="84" y="13" width="503" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                      </g>
                                                      <g>
                                                         <rect x="599" y="38" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                         <g>
                                                            <rect x="599" y="38" width="60" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                            <g>
                                                               <text text-anchor="start" x="628" y="48.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Rate</text>
                                                            </g>
                                                            <path d="M599,44L623,44" stroke="#d51d29" stroke-width="2" fill-opacity="1" fill="none"></path>
                                                            <circle cx="611" cy="44" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                         </g>
                                                      </g>
                                                      <g>
                                                         <rect x="84" y="38" width="503" height="124" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
                                                         <g clip-path="url(https://www.currency.wiki/en/charts/usd-gbp#_ABSTRACT_RENDERER_ID_0)">
                                                            <g>
                                                               <rect x="84" y="161" width="503" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                                               <rect x="84" y="130" width="503" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                                               <rect x="84" y="100" width="503" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                                               <rect x="84" y="69" width="503" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                                               <rect x="84" y="38" width="503" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
                                                            </g>
                                                            <g>
                                                               <path d="M120.35714285714286,52.33750000000188C120.35714285714286,52.33750000000188,168.16666666666669,50.80000000000206,192.07142857142856,58.487500000001205C215.97619047619045,66.17500000000035,239.88095238095238,83.60000000000183,263.7857142857143,98.46250000000188C287.69047619047615,113.32500000000194,311.5952380952381,139.46250000000245,335.5,147.66250000000153C359.40476190476187,155.86250000000064,383.30952380952374,151.76250000000107,407.21428571428567,147.66250000000153C431.1190476190476,143.562500000002,455.0238095238095,122.29375000000094,478.9285714285714,123.06250000000085C502.83333333333326,123.83125000000078,550.6428571428571,152.27500000000103,550.6428571428571,152.27500000000103" stroke="#d51d29" stroke-width="2" fill-opacity="1" fill="none"></path>
                                                            </g>
                                                         </g>
                                                         <g>
                                                            <circle cx="120.35714285714286" cy="52.33750000000188" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="192.07142857142856" cy="58.487500000001205" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="263.7857142857143" cy="98.46250000000188" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="335.5" cy="147.66250000000153" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="407.21428571428567" cy="147.66250000000153" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="478.9285714285714" cy="123.06250000000085" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                            <circle cx="550.6428571428571" cy="152.27500000000103" r="6" stroke="none" stroke-width="0" fill="#d51d29"></circle>
                                                         </g>
                                                         <g>
                                                            <g>
                                                               <text text-anchor="middle" x="120.35714285714286" y="177.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-10</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="192.07142857142856" y="193.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-11</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="263.7857142857143" y="177.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-12</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="335.5" y="193.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-13</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="407.21428571428567" y="177.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-14</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="478.9285714285714" y="193.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-15</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="middle" x="550.6428571428571" y="177.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">2018-03-16</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="end" x="72" y="165.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0.715</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="end" x="72" y="134.95" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0.717</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="end" x="72" y="104.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0.719</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="end" x="72" y="73.45" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0.721</text>
                                                            </g>
                                                            <g>
                                                               <text text-anchor="end" x="72" y="42.70000000000002" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0.723</text>
                                                            </g>
                                                         </g>
                                                      </g>
                                                      <g></g>
                                                   </svg>
                                                   <div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                                      <table>
                                                         <thead>
                                                            <tr>
                                                               <th>Date</th>
                                                               <th>Rate</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>2018-03-10</td>
                                                               <td>0.722</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-11</td>
                                                               <td>0.722</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-12</td>
                                                               <td>0.719</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-13</td>
                                                               <td>0.716</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-14</td>
                                                               <td>0.716</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-15</td>
                                                               <td>0.718</td>
                                                            </tr>
                                                            <tr>
                                                               <td>2018-03-16</td>
                                                               <td>0.716</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div aria-hidden="true" style="display: none; position: absolute; top: 210px; left: 681px; white-space: nowrap; font-family: Arial; font-size: 12px;">Rate</div>
                                             <div></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @include('sidebar')
               </div>
            </div>
         </div>
      </div>
      <div class="footer_guarantor"></div>
   </div>
   @include('header')
</body>
</html>