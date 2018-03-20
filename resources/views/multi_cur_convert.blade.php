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
               <div id="top" data-area="subnavigation">
                  <div class="center-wrap">
                     <div class="moduletable  curconverter">
                        <div class="module-title"><span>Enter Currency Amount</span></div>
                        <div class="module-body">
						
						
<style>
.select-style {
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
</style>
	<form method="post" class="conver-form1" action="multiupdatecurrency" enctype="multipart/form-data">
              
                    {{ csrf_field() }}
                      
                    <label for="pwd">Amount</label>
                    
                      <input type="text" class="form-control" name="abouttext" maxlength="300">
					  <br>
                      <label for="pwd">Date</label>
                    
                      <input type="date" class="form-control" name="datetext">
					  
              
               <br>
                    <label for="pwd">From</label>
					
                      <select name="currfrom">
                      <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select><br>
                    <label for="pwd">To</label>
                      <select class="select-style" name="currto1">
                       <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select><br>
                      <label for="pwd">To</label>
                      <select class="select-style" name="currto2">
                       <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select><br>
                      <label for="pwd">To</label>
                      <select class="select-style" name="currto3">
                       <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select><br>
                      <label for="pwd">To</label>
                      <select class="select-style" name="currto4">
                       <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select><br>
                      <label for="pwd">To</label>
                      <select class="select-style" name="currto5">
                       <option value="none">Select A Currency</option>  
                       @foreach($data2 as $values)
                      <option value="{{$values->currency}}">{{$values->currency}}</option>
                       @endforeach
                      </select>
              <br>
     				<button type="submit">convert</button>
  <?php echo Session::get('status');?>
    </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="main" class="site-content-wrap">
                  <div class="center-wrap">
                     <div id="main-content">
                        <div id="system-message-container"></div>
                        <div id="content">
                           <div class="blog-featured" itemscope="" itemtype="https://schema.org/Blog"></div>
                        </div>
                     </div>
                     <div id="cont-wrap" class="site-content-middle r">
                        <div class="site-content-middle-in">
                           <div id="bottomcont" data-area="content-bottom-a">
                              <div class="moduletable  curcrossrates_reload">
                                 <div class="module-title"><span>Cross Rates</span></div>
                                 <div class="module-body">
                                    <script type="text/javascript">
                                       jQuery(document).ready(function(){
                                           var interval = setInterval("GetRates()", 300000);
                                       });
                                       
                                       function GetRates()
                                       {
                                           location.reload();
                                       
                                       }
                                       jQuery(function() {
                                           jQuery( ".add_currency_block select" ).on('change',function (){
                                               var form =jQuery(this).parents(form);
                                               if (jQuery('select', form).val() != 0) form.submit();
                                           });
                                           jQuery( ".add_currency_block .select-option" ).on('click',function (){
                                               var form = jQuery(this).parents(form);
                                               if (jQuery('select', form).val() != 0) form.submit();
                                           });
                                       });
                                       function PopupCharts(currency_from, currency_to)
                                       {
                                           var module= jQuery(this).parents('.moduletable');
                                           // Load AJAX
                                                    var link = "https://www.currency.wiki/index.php";
                                       
                                           jQuery.post(link, {
                                                   no_html: "1",
                                                   option: "com_currency",
                                                   task: "AJAX_popupcharts",
                                                   tmpl: "component",
                                                   from: currency_from,
                                                   to: currency_to
                                               },
                                               function(data){
                                                   var div = jQuery('<div>'+data+'</div>');
                                                   jQuery.lightbox(div, {
                                                       width   : 750,
                                                       height  : 400
                                                   });
                                               }
                                           );
                                       }
                                       
                                    </script>
                                    <div class="rate_html_code">
                                       <table width="100%" class="tbl_rate">
                                          <tbody>
                                             <tr>
                                                <td></td>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/USD.png"></div>
                                                   <p>USD</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/EUR.png"></div>
                                                   <p>EUR</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/GBP.png"></div>
                                                   <p>GBP</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/CAD.png"></div>
                                                   <p>CAD</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/CHF.png"></div>
                                                   <p>CHF</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/AUD.png"></div>
                                                   <p>AUD</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/INR.png"></div>
                                                   <p>INR</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/CNY.png"></div>
                                                   <p>CNY</p>
                                                </th>
                                                <th>
                                                   <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/JPY.png"></div>
                                                   <p>JPY</p>
                                                </th>
                                             </tr>
                                             <tr class="rate_lines">
                                                <td><b>1 USD</b></td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-eur">0.81160</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-gbp">0.71996</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-cad">1.28289</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-chf">0.94794</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-aud">1.27102</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-inr">64.9699</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-cny">6.32680</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-jpy">106.516</a> 
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Inverse:</td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-usd">1.23213</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-usd">1.38897</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cad-usd">0.77949</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1chf-usd">1.05492</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1aud-usd">0.78677</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1inr-usd">0.01539</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cny-usd">0.15806</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1jpy-usd">0.00939</a> 
                                                </td>
                                             </tr>
                                             <tr class="rate_lines">
                                                <td><b>1 EUR</b></td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-usd">1.23213</a> 
                                                </td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-gbp">0.88709</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-cad">1.58069</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-chf">1.16799</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-aud">1.56607</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-inr">80.0515</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-cny">7.79546</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-jpy">131.241</a> 
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Inverse:</td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-eur">0.81160</a> 
                                                </td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-eur">1.12729</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cad-eur">0.63263</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1chf-eur">0.85617</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1aud-eur">0.63854</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1inr-eur">0.01249</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cny-eur">0.12828</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1jpy-eur">0.00762</a> 
                                                </td>
                                             </tr>
                                             <tr class="rate_lines">
                                                <td><b>1 GBP</b></td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-usd">1.38897</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-eur">1.12729</a> 
                                                </td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-cad">1.78189</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-chf">1.31666</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-aud">1.76541</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-inr">90.2409</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-cny">8.78771</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-jpy">147.947</a> 
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Inverse:</td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-gbp">0.71996</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-gbp">0.88709</a> 
                                                </td>
                                                <td>
                                                   1.00000 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cad-gbp">0.56120</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1chf-gbp">0.75950</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1aud-gbp">0.56644</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1inr-gbp">0.01108</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cny-gbp">0.11380</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1jpy-gbp">0.00676</a> 
                                                </td>
                                             </tr>
                                             <tr class="rate_lines">
                                                <td><b>1 BTC</b></td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-usd">9259.25</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-eur">7514.82</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-gbp">6666.29</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-cad">11878.6</a>  
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-chf">8777.22</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-aud">11768.7</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-inr">601573.</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-cny">58581.4</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1btc-jpy">986259.</a> 
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Inverse:</td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1usd-btc">0.00011</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1eur-btc">0.00013</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1gbp-btc">0.00015</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cad-btc">0.00008</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1chf-btc">0.00011</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1aud-btc">0.00008</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1inr-btc">0.00000</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1cny-btc">0.00002</a> 
                                                </td>
                                                <td>
                                                   <a href="https://www.currency.wiki/en/converter/1jpy-btc">0.00000</a> 
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <div class="last_update">Last update: 2018-03-12 15:20:04 UTC</div>
                                    </div>
                                    <form method="post" class="add_currency_form" name="taskform" action="https://www.currency.wiki/en/">
                                       <div class="add_currency_block">
                                          <label data-for="add_currency">Add/Remove Currency:</label>
                                          <div class="flags select" onclick="myFunction(this)">
                                             <div class="selected-item" data-value="0"><span>&nbsp;</span><input class="filter-input" value=""></div>
                                             <select name="add_currency" class="add_currency">
                                                <option value="AED">AED - Emirati Dirham</option>
                                                <option value="AFN">AFN - Afghan Afghani</option>
                                                <option value="ALL">ALL - Albanian Lek</option>
                                                <option value="AMD">AMD - Armenian Dram</option>
                                                <option value="ANG">ANG - Netherlands Antillean Guilder</option>
                                                <option value="AOA">AOA - Angolan Kwanza</option>
                                                <option value="ARS">ARS - Argentine Peso</option>
                                                <option value="AUD">AUD - Australian Dollar</option>
                                                <option value="AWG">AWG - Aruban Florin</option>
                                                <option value="AZN">AZN - Azerbaijani Manat</option>
                                                <option value="BAM">BAM - Bosnia And Herzegovina Convertible Mark</option>
                                                <option value="BBD">BBD - Barbadian Dollar</option>
                                                <option value="BDT">BDT - Bangladeshi Taka</option>
                                                <option value="BGN">BGN - Bulgarian Lev</option>
                                                <option value="BHD">BHD - Bahraini Dinar</option>
                                                <option value="BIF">BIF - Burundian Franc</option>
                                                <option value="BMD">BMD - Bermudian Dollar</option>
                                                <option value="BND">BND - Brunei Dollar</option>
                                                <option value="BOB">BOB - Bolivian Boliviano</option>
                                                <option value="BRL">BRL - Brazilian Real</option>
                                                <option value="BSD">BSD - Bahamian Dollar</option>
                                                <option value="BTC">BTC - Bitcoin</option>
                                                <option value="BTN">BTN - Bhutanese Ngultrum</option>
                                                <option value="BWP">BWP - Botswana Pula</option>
                                                <option value="BYR">BYR - Belarusian Ruble</option>
                                                <option value="BZD">BZD - Belize Dollar</option>
                                                <option value="CAD">CAD - Canadian Dollar</option>
                                                <option value="CDF">CDF - Congolese Franc</option>
                                                <option value="CHF">CHF - Swiss Franc</option>
                                                <option value="CLP">CLP - Chilean Peso</option>
                                                <option value="CNY">CNY - Chinese Yuan Renminbi</option>
                                                <option value="COP">COP - Colombian Peso</option>
                                                <option value="CRC">CRC - Costa Rican Colon</option>
                                                <option value="CUC">CUC - Cuban Convertible Peso</option>
                                                <option value="CUP">CUP - Cuban Peso</option>
                                                <option value="CVE">CVE - Cape Verdean Escudo</option>
                                                <option value="CZK">CZK - Czech Koruna</option>
                                                <option value="DJF">DJF - Djiboutian Franc</option>
                                                <option value="DKK">DKK - Danish Krone</option>
                                                <option value="DOP">DOP - Dominican Peso</option>
                                                <option value="DZD">DZD - Algerian Dinar</option>
                                                <option value="EEK">EEK - Estonian Kroon</option>
                                                <option value="EGP">EGP - Egyptian Pound</option>
                                                <option value="ERN">ERN - Eritrean Nakfa</option>
                                                <option value="ETB">ETB - Ethiopian Birr</option>
                                                <option value="EUR">EUR - Euro</option>
                                                <option value="FJD">FJD - Fijian Dollar</option>
                                                <option value="FKP">FKP - Falkland Islands Pound</option>
                                                <option value="GBP">GBP - Pound Sterling</option>
                                                <option value="GEL">GEL - Georgian Lari</option>
                                                <option value="GGP">GGP - Guernsey Pound</option>
                                                <option value="GHS">GHS - Ghana Cedi</option>
                                                <option value="GIP">GIP - Gibraltar Pound</option>
                                                <option value="GMD">GMD - Gambian Dalasi</option>
                                                <option value="GNF">GNF - Guinean Franc</option>
                                                <option value="GTQ">GTQ - Guatemalan Quetzal</option>
                                                <option value="GYD">GYD - Guyanese Dollar</option>
                                                <option value="HKD">HKD - Hong Kong Dollar</option>
                                                <option value="HNL">HNL - Honduran Lempira</option>
                                                <option value="HRK">HRK - Croatian Kuna</option>
                                                <option value="HTG">HTG - Haitian Gourde</option>
                                                <option value="HUF">HUF - Hungarian Forint</option>
                                                <option value="IDR">IDR - Indonesian Rupiah</option>
                                                <option value="ILS">ILS - Israeli New Shekel</option>
                                                <option value="IMP">IMP - Isle of Man Pound</option>
                                                <option value="INR">INR - Indian Rupee</option>
                                                <option value="IQD">IQD - Iraqi Dinar</option>
                                                <option value="IRR">IRR - Iranian Rial</option>
                                                <option value="ISK">ISK - Icelandic Krona</option>
                                                <option value="JEP">JEP - Jersey Pound</option>
                                                <option value="JMD">JMD - Jamaican Dollar</option>
                                                <option value="JOD">JOD - Jordanian Dinar</option>
                                                <option value="JPY">JPY - Japanese Yen</option>
                                                <option value="KES">KES - Kenyan Shilling</option>
                                                <option value="KGS">KGS - Kyrgyzstani Som</option>
                                                <option value="KHR">KHR - Cambodian Riel</option>
                                                <option value="KMF">KMF - Comorian Franc</option>
                                                <option value="KPW">KPW - North Korean Won</option>
                                                <option value="KRW">KRW - South Korean Won</option>
                                                <option value="KWD">KWD - Kuwaiti Dinar</option>
                                                <option value="KYD">KYD - Cayman Islands Dollar</option>
                                                <option value="KZT">KZT - Kazakhstani Tenge</option>
                                                <option value="LAK">LAK - Lao Kip</option>
                                                <option value="LBP">LBP - Lebanese Pound</option>
                                                <option value="LKR">LKR - Sri Lankan Rupee</option>
                                                <option value="LRD">LRD - Liberian Dollar</option>
                                                <option value="LSL">LSL - Lesotho Loti</option>
                                                <option value="LTL">LTL - Lithuanian Litas</option>
                                                <option value="LVL">LVL - Latvian Lat</option>
                                                <option value="LYD">LYD - Libyan Dinar</option>
                                                <option value="MAD">MAD - Moroccan Dirham</option>
                                                <option value="MDL">MDL - Moldovan Leu</option>
                                                <option value="MGA">MGA - Malagasy Ariary</option>
                                                <option value="MKD">MKD - Macedonian Denar</option>
                                                <option value="MMK">MMK - Burmese Kyat</option>
                                                <option value="MNT">MNT - Mongolian Togrog</option>
                                                <option value="MOP">MOP - Macanese Pataca</option>
                                                <option value="MRO">MRO - Mauritanian Ouguiya</option>
                                                <option value="MUR">MUR - Mauritian Rupee</option>
                                                <option value="MVR">MVR - Maldivian Rufiyaa</option>
                                                <option value="MWK">MWK - Malawian Kwacha</option>
                                                <option value="MXN">MXN - Mexican Peso</option>
                                                <option value="MYR">MYR - Malaysian Ringgit</option>
                                                <option value="MZN">MZN - Mozambican Metical</option>
                                                <option value="NAD">NAD - Namibian Dollar</option>
                                                <option value="NGN">NGN - Nigerian Naira</option>
                                                <option value="NIO">NIO - Nicaraguan Cordoba</option>
                                                <option value="NOK">NOK - Norwegian Krone</option>
                                                <option value="NPR">NPR - Nepalese Rupee</option>
                                                <option value="NZD">NZD - New Zealand Dollar</option>
                                                <option value="OMR">OMR - Omani Rial</option>
                                                <option value="PAB">PAB - Panamanian Balboa</option>
                                                <option value="PEN">PEN - Peruvian Nuevo Sol</option>
                                                <option value="PGK">PGK - Papua New Guinean Kina</option>
                                                <option value="PHP">PHP - Philippine Peso</option>
                                                <option value="PKR">PKR - Pakistani Rupee</option>
                                                <option value="PLN">PLN - Polish Zloty</option>
                                                <option value="PYG">PYG - Paraguayan Guarani</option>
                                                <option value="QAR">QAR - Qatari Riyal</option>
                                                <option value="RON">RON - Romanian Leu</option>
                                                <option value="RSD">RSD - Serbian Dinar</option>
                                                <option value="RUB">RUB - Russian Ruble</option>
                                                <option value="RWF">RWF - Rwandan Franc</option>
                                                <option value="SAR">SAR - Saudi Riyal</option>
                                                <option value="SBD">SBD - Solomon Islands Dollar</option>
                                                <option value="SCR">SCR - Seychellois Rupee</option>
                                                <option value="SDG">SDG - Sudanese Pound</option>
                                                <option value="SEK">SEK - Swedish Krona</option>
                                                <option value="SGD">SGD - Singapore Dollar</option>
                                                <option value="SHP">SHP - Saint Helena Pound</option>
                                                <option value="SLL">SLL - Sierra Leonean Leone</option>
                                                <option value="SOS">SOS - Somali Shilling</option>
                                                <option value="SPL">SPL - Seborga Luigino</option>
                                                <option value="SRD">SRD - Surinamese Dollar</option>
                                                <option value="STD">STD - São Tomé And Príncipe Dobra</option>
                                                <option value="SVC">SVC - Salvadoran Colon</option>
                                                <option value="SYP">SYP - Syrian Pound</option>
                                                <option value="SZL">SZL - Swazi Lilangeni</option>
                                                <option value="THB">THB - Thai Baht</option>
                                                <option value="TJS">TJS - Tajikistani Somoni</option>
                                                <option value="TMM">TMM - Old Turkmenistan Manat</option>
                                                <option value="TMT">TMT - Turkmenistan Manat</option>
                                                <option value="TND">TND - Tunisian Dinar</option>
                                                <option value="TOP">TOP - Tongan Pa?anga</option>
                                                <option value="TRY">TRY - Turkish Lira</option>
                                                <option value="TTD">TTD - Trinidad And Tobago Dollar</option>
                                                <option value="TVD">TVD - Tuvaluan Dollar</option>
                                                <option value="TWD">TWD - New Taiwan Dollar</option>
                                                <option value="TZS">TZS - Tanzanian Shilling</option>
                                                <option value="UAH">UAH - Ukrainian Hryvnia</option>
                                                <option value="UGX">UGX - Ugandan Shilling</option>
                                                <option value="USD">USD - US Dollar</option>
                                                <option value="UYU">UYU - Uruguayan Peso</option>
                                                <option value="UZS">UZS - Uzbekistani Som</option>
                                                <option value="VEB">VEB - Venezuela Bolivar</option>
                                                <option value="VEF">VEF - Venezuelan Bolivar</option>
                                                <option value="VND">VND - Vietnamese Dong</option>
                                                <option value="VUV">VUV - Vanuatu Vatu</option>
                                                <option value="WST">WST - Samoan Tala</option>
                                                <option value="XAF">XAF - Central African Cfa Franc</option>
                                                <option value="XCD">XCD - East Caribbean Dollar</option>
                                                <option value="XDR">XDR - Special Drawing Rights</option>
                                                <option value="XOF">XOF - West African Cfa Franc</option>
                                                <option value="XPF">XPF - CFP Franc</option>
                                                <option value="YER">YER - Yemeni Rial</option>
                                                <option value="ZAR">ZAR - South African Rand</option>
                                                <option value="ZMK">ZMK - Zambian Kwacha</option>
                                                <option value="ZWD">ZWD - Zimbabwean Dollar</option>
                                             </select>
                                             <div class="select-options mCustomScrollbar _mCS_3">
                                                <div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 366px;" tabindex="0">
                                                   <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                      <div class="select-option" data-value="0">---</div>
                                                      <div data-value="AED" class="b-lazy select-option" data-src="../../images/flags/45/AED.png">AED - Emirati Dirham</div>
                                                      <div data-value="AFN" class="b-lazy select-option" data-src="../../images/flags/45/AFN.png">AFN - Afghan Afghani</div>
                                                      <div data-value="ALL" class="b-lazy select-option" data-src="../../images/flags/45/ALL.png">ALL - Albanian Lek</div>
                                                      <div data-value="AMD" class="b-lazy select-option" data-src="../../images/flags/45/AMD.png">AMD - Armenian Dram</div>
                                                      <div data-value="ANG" class="b-lazy select-option" data-src="../../images/flags/45/ANG.png">ANG - Netherlands Antillean Guilder</div>
                                                      <div data-value="AOA" class="b-lazy select-option" data-src="../../images/flags/45/AOA.png">AOA - Angolan Kwanza</div>
                                                      <div data-value="ARS" class="b-lazy select-option" data-src="../../images/flags/45/ARS.png">ARS - Argentine Peso</div>
                                                      <div data-value="AUD" class="b-lazy select-option" data-src="../../images/flags/45/AUD.png">AUD - Australian Dollar</div>
                                                      <div data-value="AWG" class="b-lazy select-option" data-src="../../images/flags/45/AWG.png">AWG - Aruban Florin</div>
                                                      <div data-value="AZN" class="b-lazy select-option" data-src="../../images/flags/45/AZN.png">AZN - Azerbaijani Manat</div>
                                                      <div data-value="BAM" class="b-lazy select-option" data-src="../../images/flags/45/BAM.png">BAM - Bosnia And Herzegovina Convertible Mark</div>
                                                      <div data-value="BBD" class="b-lazy select-option" data-src="../../images/flags/45/BBD.png">BBD - Barbadian Dollar</div>
                                                      <div data-value="BDT" class="b-lazy select-option" data-src="../../images/flags/45/BDT.png">BDT - Bangladeshi Taka</div>
                                                      <div data-value="BGN" class="b-lazy select-option" data-src="../../images/flags/45/BGN.png">BGN - Bulgarian Lev</div>
                                                      <div data-value="BHD" class="b-lazy select-option" data-src="../../images/flags/45/BHD.png">BHD - Bahraini Dinar</div>
                                                      <div data-value="BIF" class="b-lazy select-option" data-src="../../images/flags/45/BIF.png">BIF - Burundian Franc</div>
                                                      <div data-value="BMD" class="b-lazy select-option" data-src="../../images/flags/45/BMD.png">BMD - Bermudian Dollar</div>
                                                      <div data-value="BND" class="b-lazy select-option" data-src="../../images/flags/45/BND.png">BND - Brunei Dollar</div>
                                                      <div data-value="BOB" class="b-lazy select-option" data-src="../../images/flags/45/BOB.png">BOB - Bolivian Boliviano</div>
                                                      <div data-value="BRL" class="b-lazy select-option" data-src="../../images/flags/45/BRL.png">BRL - Brazilian Real</div>
                                                      <div data-value="BSD" class="b-lazy select-option" data-src="../../images/flags/45/BSD.png">BSD - Bahamian Dollar</div>
                                                      <div data-value="BTC" class="b-lazy select-option" data-src="../../images/flags/45/BTC.png">BTC - Bitcoin</div>
                                                      <div data-value="BTN" class="b-lazy select-option" data-src="../../images/flags/45/BTN.png">BTN - Bhutanese Ngultrum</div>
                                                      <div data-value="BWP" class="b-lazy select-option" data-src="../../images/flags/45/BWP.png">BWP - Botswana Pula</div>
                                                      <div data-value="BYR" class="b-lazy select-option" data-src="../../images/flags/45/BYR.png">BYR - Belarusian Ruble</div>
                                                      <div data-value="BZD" class="b-lazy select-option" data-src="../../images/flags/45/BZD.png">BZD - Belize Dollar</div>
                                                      <div data-value="CAD" class="b-lazy select-option" data-src="../../images/flags/45/CAD.png">CAD - Canadian Dollar</div>
                                                      <div data-value="CDF" class="b-lazy select-option" data-src="../../images/flags/45/CDF.png">CDF - Congolese Franc</div>
                                                      <div data-value="CHF" class="b-lazy select-option" data-src="../../images/flags/45/CHF.png">CHF - Swiss Franc</div>
                                                      <div data-value="CLP" class="b-lazy select-option" data-src="../../images/flags/45/CLP.png">CLP - Chilean Peso</div>
                                                      <div data-value="CNY" class="b-lazy select-option" data-src="../../images/flags/45/CNY.png">CNY - Chinese Yuan Renminbi</div>
                                                      <div data-value="COP" class="b-lazy select-option" data-src="../../images/flags/45/COP.png">COP - Colombian Peso</div>
                                                      <div data-value="CRC" class="b-lazy select-option" data-src="../../images/flags/45/CRC.png">CRC - Costa Rican Colon</div>
                                                      <div data-value="CUC" class="b-lazy select-option" data-src="../../images/flags/45/CUC.png">CUC - Cuban Convertible Peso</div>
                                                      <div data-value="CUP" class="b-lazy select-option" data-src="../../images/flags/45/CUP.png">CUP - Cuban Peso</div>
                                                      <div data-value="CVE" class="b-lazy select-option" data-src="../../images/flags/45/CVE.png">CVE - Cape Verdean Escudo</div>
                                                      <div data-value="CZK" class="b-lazy select-option" data-src="../../images/flags/45/CZK.png">CZK - Czech Koruna</div>
                                                      <div data-value="DJF" class="b-lazy select-option" data-src="../../images/flags/45/DJF.png">DJF - Djiboutian Franc</div>
                                                      <div data-value="DKK" class="b-lazy select-option" data-src="../../images/flags/45/DKK.png">DKK - Danish Krone</div>
                                                      <div data-value="DOP" class="b-lazy select-option" data-src="../../images/flags/45/DOP.png">DOP - Dominican Peso</div>
                                                      <div data-value="DZD" class="b-lazy select-option" data-src="../../images/flags/45/DZD.png">DZD - Algerian Dinar</div>
                                                      <div data-value="EEK" class="b-lazy select-option" data-src="../../images/flags/45/EEK.png">EEK - Estonian Kroon</div>
                                                      <div data-value="EGP" class="b-lazy select-option" data-src="../../images/flags/45/EGP.png">EGP - Egyptian Pound</div>
                                                      <div data-value="ERN" class="b-lazy select-option" data-src="../../images/flags/45/ERN.png">ERN - Eritrean Nakfa</div>
                                                      <div data-value="ETB" class="b-lazy select-option" data-src="../../images/flags/45/ETB.png">ETB - Ethiopian Birr</div>
                                                      <div data-value="EUR" class="b-lazy select-option" data-src="../../images/flags/45/EUR.png">EUR - Euro</div>
                                                      <div data-value="FJD" class="b-lazy select-option" data-src="../../images/flags/45/FJD.png">FJD - Fijian Dollar</div>
                                                      <div data-value="FKP" class="b-lazy select-option" data-src="../../images/flags/45/FKP.png">FKP - Falkland Islands Pound</div>
                                                      <div data-value="GBP" class="b-lazy select-option" data-src="../../images/flags/45/GBP.png">GBP - Pound Sterling</div>
                                                      <div data-value="GEL" class="b-lazy select-option" data-src="../../images/flags/45/GEL.png">GEL - Georgian Lari</div>
                                                      <div data-value="GGP" class="b-lazy select-option" data-src="../../images/flags/45/GGP.png">GGP - Guernsey Pound</div>
                                                      <div data-value="GHS" class="b-lazy select-option" data-src="../../images/flags/45/GHS.png">GHS - Ghana Cedi</div>
                                                      <div data-value="GIP" class="b-lazy select-option" data-src="../../images/flags/45/GIP.png">GIP - Gibraltar Pound</div>
                                                      <div data-value="GMD" class="b-lazy select-option" data-src="../../images/flags/45/GMD.png">GMD - Gambian Dalasi</div>
                                                      <div data-value="GNF" class="b-lazy select-option" data-src="../../images/flags/45/GNF.png">GNF - Guinean Franc</div>
                                                      <div data-value="GTQ" class="b-lazy select-option" data-src="../../images/flags/45/GTQ.png">GTQ - Guatemalan Quetzal</div>
                                                      <div data-value="GYD" class="b-lazy select-option" data-src="../../images/flags/45/GYD.png">GYD - Guyanese Dollar</div>
                                                      <div data-value="HKD" class="b-lazy select-option" data-src="../../images/flags/45/HKD.png">HKD - Hong Kong Dollar</div>
                                                      <div data-value="HNL" class="b-lazy select-option" data-src="../../images/flags/45/HNL.png">HNL - Honduran Lempira</div>
                                                      <div data-value="HRK" class="b-lazy select-option" data-src="../../images/flags/45/HRK.png">HRK - Croatian Kuna</div>
                                                      <div data-value="HTG" class="b-lazy select-option" data-src="../../images/flags/45/HTG.png">HTG - Haitian Gourde</div>
                                                      <div data-value="HUF" class="b-lazy select-option" data-src="../../images/flags/45/HUF.png">HUF - Hungarian Forint</div>
                                                      <div data-value="IDR" class="b-lazy select-option" data-src="../../images/flags/45/IDR.png">IDR - Indonesian Rupiah</div>
                                                      <div data-value="ILS" class="b-lazy select-option" data-src="../../images/flags/45/ILS.png">ILS - Israeli New Shekel</div>
                                                      <div data-value="IMP" class="b-lazy select-option" data-src="../../images/flags/45/IMP.png">IMP - Isle of Man Pound</div>
                                                      <div data-value="INR" class="b-lazy select-option" data-src="../../images/flags/45/INR.png">INR - Indian Rupee</div>
                                                      <div data-value="IQD" class="b-lazy select-option" data-src="../../images/flags/45/IQD.png">IQD - Iraqi Dinar</div>
                                                      <div data-value="IRR" class="b-lazy select-option" data-src="../../images/flags/45/IRR.png">IRR - Iranian Rial</div>
                                                      <div data-value="ISK" class="b-lazy select-option" data-src="../../images/flags/45/ISK.png">ISK - Icelandic Krona</div>
                                                      <div data-value="JEP" class="b-lazy select-option" data-src="../../images/flags/45/JEP.png">JEP - Jersey Pound</div>
                                                      <div data-value="JMD" class="b-lazy select-option" data-src="../../images/flags/45/JMD.png">JMD - Jamaican Dollar</div>
                                                      <div data-value="JOD" class="b-lazy select-option" data-src="../../images/flags/45/JOD.png">JOD - Jordanian Dinar</div>
                                                      <div data-value="JPY" class="b-lazy select-option" data-src="../../images/flags/45/JPY.png">JPY - Japanese Yen</div>
                                                      <div data-value="KES" class="b-lazy select-option" data-src="../../images/flags/45/KES.png">KES - Kenyan Shilling</div>
                                                      <div data-value="KGS" class="b-lazy select-option" data-src="../../images/flags/45/KGS.png">KGS - Kyrgyzstani Som</div>
                                                      <div data-value="KHR" class="b-lazy select-option" data-src="../../images/flags/45/KHR.png">KHR - Cambodian Riel</div>
                                                      <div data-value="KMF" class="b-lazy select-option" data-src="../../images/flags/45/KMF.png">KMF - Comorian Franc</div>
                                                      <div data-value="KPW" class="b-lazy select-option" data-src="../../images/flags/45/KPW.png">KPW - North Korean Won</div>
                                                      <div data-value="KRW" class="b-lazy select-option" data-src="../../images/flags/45/KRW.png">KRW - South Korean Won</div>
                                                      <div data-value="KWD" class="b-lazy select-option" data-src="../../images/flags/45/KWD.png">KWD - Kuwaiti Dinar</div>
                                                      <div data-value="KYD" class="b-lazy select-option" data-src="../../images/flags/45/KYD.png">KYD - Cayman Islands Dollar</div>
                                                      <div data-value="KZT" class="b-lazy select-option" data-src="../../images/flags/45/KZT.png">KZT - Kazakhstani Tenge</div>
                                                      <div data-value="LAK" class="b-lazy select-option" data-src="../../images/flags/45/LAK.png">LAK - Lao Kip</div>
                                                      <div data-value="LBP" class="b-lazy select-option" data-src="../../images/flags/45/LBP.png">LBP - Lebanese Pound</div>
                                                      <div data-value="LKR" class="b-lazy select-option" data-src="../../images/flags/45/LKR.png">LKR - Sri Lankan Rupee</div>
                                                      <div data-value="LRD" class="b-lazy select-option" data-src="../../images/flags/45/LRD.png">LRD - Liberian Dollar</div>
                                                      <div data-value="LSL" class="b-lazy select-option" data-src="../../images/flags/45/LSL.png">LSL - Lesotho Loti</div>
                                                      <div data-value="LTL" class="b-lazy select-option" data-src="../../images/flags/45/LTL.png">LTL - Lithuanian Litas</div>
                                                      <div data-value="LVL" class="b-lazy select-option" data-src="../../images/flags/45/LVL.png">LVL - Latvian Lat</div>
                                                      <div data-value="LYD" class="b-lazy select-option" data-src="../../images/flags/45/LYD.png">LYD - Libyan Dinar</div>
                                                      <div data-value="MAD" class="b-lazy select-option" data-src="../../images/flags/45/MAD.png">MAD - Moroccan Dirham</div>
                                                      <div data-value="MDL" class="b-lazy select-option" data-src="../../images/flags/45/MDL.png">MDL - Moldovan Leu</div>
                                                      <div data-value="MGA" class="b-lazy select-option" data-src="../../images/flags/45/MGA.png">MGA - Malagasy Ariary</div>
                                                      <div data-value="MKD" class="b-lazy select-option" data-src="../../images/flags/45/MKD.png">MKD - Macedonian Denar</div>
                                                      <div data-value="MMK" class="b-lazy select-option" data-src="../../images/flags/45/MMK.png">MMK - Burmese Kyat</div>
                                                      <div data-value="MNT" class="b-lazy select-option" data-src="../../images/flags/45/MNT.png">MNT - Mongolian Togrog</div>
                                                      <div data-value="MOP" class="b-lazy select-option" data-src="../../images/flags/45/MOP.png">MOP - Macanese Pataca</div>
                                                      <div data-value="MRO" class="b-lazy select-option" data-src="../../images/flags/45/MRO.png">MRO - Mauritanian Ouguiya</div>
                                                      <div data-value="MUR" class="b-lazy select-option" data-src="../../images/flags/45/MUR.png">MUR - Mauritian Rupee</div>
                                                      <div data-value="MVR" class="b-lazy select-option" data-src="../../images/flags/45/MVR.png">MVR - Maldivian Rufiyaa</div>
                                                      <div data-value="MWK" class="b-lazy select-option" data-src="../../images/flags/45/MWK.png">MWK - Malawian Kwacha</div>
                                                      <div data-value="MXN" class="b-lazy select-option" data-src="../../images/flags/45/MXN.png">MXN - Mexican Peso</div>
                                                      <div data-value="MYR" class="b-lazy select-option" data-src="../../images/flags/45/MYR.png">MYR - Malaysian Ringgit</div>
                                                      <div data-value="MZN" class="b-lazy select-option" data-src="../../images/flags/45/MZN.png">MZN - Mozambican Metical</div>
                                                      <div data-value="NAD" class="b-lazy select-option" data-src="../../images/flags/45/NAD.png">NAD - Namibian Dollar</div>
                                                      <div data-value="NGN" class="b-lazy select-option" data-src="../../images/flags/45/NGN.png">NGN - Nigerian Naira</div>
                                                      <div data-value="NIO" class="b-lazy select-option" data-src="../../images/flags/45/NIO.png">NIO - Nicaraguan Cordoba</div>
                                                      <div data-value="NOK" class="b-lazy select-option" data-src="../../images/flags/45/NOK.png">NOK - Norwegian Krone</div>
                                                      <div data-value="NPR" class="b-lazy select-option" data-src="../../images/flags/45/NPR.png">NPR - Nepalese Rupee</div>
                                                      <div data-value="NZD" class="b-lazy select-option" data-src="../../images/flags/45/NZD.png">NZD - New Zealand Dollar</div>
                                                      <div data-value="OMR" class="b-lazy select-option" data-src="../../images/flags/45/OMR.png">OMR - Omani Rial</div>
                                                      <div data-value="PAB" class="b-lazy select-option" data-src="../../images/flags/45/PAB.png">PAB - Panamanian Balboa</div>
                                                      <div data-value="PEN" class="b-lazy select-option" data-src="../../images/flags/45/PEN.png">PEN - Peruvian Nuevo Sol</div>
                                                      <div data-value="PGK" class="b-lazy select-option" data-src="../../images/flags/45/PGK.png">PGK - Papua New Guinean Kina</div>
                                                      <div data-value="PHP" class="b-lazy select-option" data-src="../../images/flags/45/PHP.png">PHP - Philippine Peso</div>
                                                      <div data-value="PKR" class="b-lazy select-option" data-src="../../images/flags/45/PKR.png">PKR - Pakistani Rupee</div>
                                                      <div data-value="PLN" class="b-lazy select-option" data-src="../../images/flags/45/PLN.png">PLN - Polish Zloty</div>
                                                      <div data-value="PYG" class="b-lazy select-option" data-src="../../images/flags/45/PYG.png">PYG - Paraguayan Guarani</div>
                                                      <div data-value="QAR" class="b-lazy select-option" data-src="../../images/flags/45/QAR.png">QAR - Qatari Riyal</div>
                                                      <div data-value="RON" class="b-lazy select-option" data-src="../../images/flags/45/RON.png">RON - Romanian Leu</div>
                                                      <div data-value="RSD" class="b-lazy select-option" data-src="../../images/flags/45/RSD.png">RSD - Serbian Dinar</div>
                                                      <div data-value="RUB" class="b-lazy select-option" data-src="../../images/flags/45/RUB.png">RUB - Russian Ruble</div>
                                                      <div data-value="RWF" class="b-lazy select-option" data-src="../../images/flags/45/RWF.png">RWF - Rwandan Franc</div>
                                                      <div data-value="SAR" class="b-lazy select-option" data-src="../../images/flags/45/SAR.png">SAR - Saudi Riyal</div>
                                                      <div data-value="SBD" class="b-lazy select-option" data-src="../../images/flags/45/SBD.png">SBD - Solomon Islands Dollar</div>
                                                      <div data-value="SCR" class="b-lazy select-option" data-src="../../images/flags/45/SCR.png">SCR - Seychellois Rupee</div>
                                                      <div data-value="SDG" class="b-lazy select-option" data-src="../../images/flags/45/SDG.png">SDG - Sudanese Pound</div>
                                                      <div data-value="SEK" class="b-lazy select-option" data-src="../../images/flags/45/SEK.png">SEK - Swedish Krona</div>
                                                      <div data-value="SGD" class="b-lazy select-option" data-src="../../images/flags/45/SGD.png">SGD - Singapore Dollar</div>
                                                      <div data-value="SHP" class="b-lazy select-option" data-src="../../images/flags/45/SHP.png">SHP - Saint Helena Pound</div>
                                                      <div data-value="SLL" class="b-lazy select-option" data-src="../../images/flags/45/SLL.png">SLL - Sierra Leonean Leone</div>
                                                      <div data-value="SOS" class="b-lazy select-option" data-src="../../images/flags/45/SOS.png">SOS - Somali Shilling</div>
                                                      <div data-value="SPL" class="b-lazy select-option" data-src="../../images/flags/45/SPL.png">SPL - Seborga Luigino</div>
                                                      <div data-value="SRD" class="b-lazy select-option" data-src="../../images/flags/45/SRD.png">SRD - Surinamese Dollar</div>
                                                      <div data-value="STD" class="b-lazy select-option" data-src="../../images/flags/45/STD.png">STD - São Tomé And Príncipe Dobra</div>
                                                      <div data-value="SVC" class="b-lazy select-option" data-src="../../images/flags/45/SVC.png">SVC - Salvadoran Colon</div>
                                                      <div data-value="SYP" class="b-lazy select-option" data-src="../../images/flags/45/SYP.png">SYP - Syrian Pound</div>
                                                      <div data-value="SZL" class="b-lazy select-option" data-src="../../images/flags/45/SZL.png">SZL - Swazi Lilangeni</div>
                                                      <div data-value="THB" class="b-lazy select-option" data-src="../../images/flags/45/THB.png">THB - Thai Baht</div>
                                                      <div data-value="TJS" class="b-lazy select-option" data-src="../../images/flags/45/TJS.png">TJS - Tajikistani Somoni</div>
                                                      <div data-value="TMM" class="b-lazy select-option" data-src="../../images/flags/45/TMM.png">TMM - Old Turkmenistan Manat</div>
                                                      <div data-value="TMT" class="b-lazy select-option" data-src="../../images/flags/45/TMT.png">TMT - Turkmenistan Manat</div>
                                                      <div data-value="TND" class="b-lazy select-option" data-src="../../images/flags/45/TND.png">TND - Tunisian Dinar</div>
                                                      <div data-value="TOP" class="b-lazy select-option" data-src="../../images/flags/45/TOP.png">TOP - Tongan Pa?anga</div>
                                                      <div data-value="TRY" class="b-lazy select-option" data-src="../../images/flags/45/TRY.png">TRY - Turkish Lira</div>
                                                      <div data-value="TTD" class="b-lazy select-option" data-src="../../images/flags/45/TTD.png">TTD - Trinidad And Tobago Dollar</div>
                                                      <div data-value="TVD" class="b-lazy select-option" data-src="../../images/flags/45/TVD.png">TVD - Tuvaluan Dollar</div>
                                                      <div data-value="TWD" class="b-lazy select-option" data-src="../../images/flags/45/TWD.png">TWD - New Taiwan Dollar</div>
                                                      <div data-value="TZS" class="b-lazy select-option" data-src="../../images/flags/45/TZS.png">TZS - Tanzanian Shilling</div>
                                                      <div data-value="UAH" class="b-lazy select-option" data-src="../../images/flags/45/UAH.png">UAH - Ukrainian Hryvnia</div>
                                                      <div data-value="UGX" class="b-lazy select-option" data-src="../../images/flags/45/UGX.png">UGX - Ugandan Shilling</div>
                                                      <div data-value="USD" class="b-lazy select-option" data-src="../../images/flags/45/USD.png">USD - US Dollar</div>
                                                      <div data-value="UYU" class="b-lazy select-option" data-src="../../images/flags/45/UYU.png">UYU - Uruguayan Peso</div>
                                                      <div data-value="UZS" class="b-lazy select-option" data-src="../../images/flags/45/UZS.png">UZS - Uzbekistani Som</div>
                                                      <div data-value="VEB" class="b-lazy select-option" data-src="../../images/flags/45/VEB.png">VEB - Venezuela Bolivar</div>
                                                      <div data-value="VEF" class="b-lazy select-option" data-src="../../images/flags/45/VEF.png">VEF - Venezuelan Bolivar</div>
                                                      <div data-value="VND" class="b-lazy select-option" data-src="../../images/flags/45/VND.png">VND - Vietnamese Dong</div>
                                                      <div data-value="VUV" class="b-lazy select-option" data-src="../../images/flags/45/VUV.png">VUV - Vanuatu Vatu</div>
                                                      <div data-value="WST" class="b-lazy select-option" data-src="../../images/flags/45/WST.png">WST - Samoan Tala</div>
                                                      <div data-value="XAF" class="b-lazy select-option" data-src="../../images/flags/45/XAF.png">XAF - Central African Cfa Franc</div>
                                                      <div data-value="XCD" class="b-lazy select-option" data-src="../../images/flags/45/XCD.png">XCD - East Caribbean Dollar</div>
                                                      <div data-value="XDR" class="b-lazy select-option" data-src="../../images/flags/45/XDR.png">XDR - Special Drawing Rights</div>
                                                      <div data-value="XOF" class="b-lazy select-option" data-src="../../images/flags/45/XOF.png">XOF - West African Cfa Franc</div>
                                                      <div data-value="XPF" class="b-lazy select-option" data-src="../../images/flags/45/XPF.png">XPF - CFP Franc</div>
                                                      <div data-value="YER" class="b-lazy select-option" data-src="../../images/flags/45/YER.png">YER - Yemeni Rial</div>
                                                      <div data-value="ZAR" class="b-lazy select-option" data-src="../../images/flags/45/ZAR.png">ZAR - South African Rand</div>
                                                      <div data-value="ZMK" class="b-lazy select-option" data-src="../../images/flags/45/ZMK.png">ZMK - Zambian Kwacha</div>
                                                      <div data-value="ZWD" class="b-lazy select-option" data-src="../../images/flags/45/ZWD.png">ZWD - Zimbabwean Dollar</div>
                                                   </div>
                                                   <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                                                      <a href="https://www.currency.wiki/en/#" class="mCSB_buttonUp" oncontextmenu="return false;" style="display: block;"></a>
                                                      <div class="mCSB_draggerContainer">
                                                         <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 17px; max-height: 339px; top: 0px;" oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                         </div>
                                                         <div class="mCSB_draggerRail"></div>
                                                      </div>
                                                      <a href="https://www.currency.wiki/en/#" class="mCSB_buttonDown" oncontextmenu="return false;" style="display: block;"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   @include('sidebar')
                  </div>
               </div>
              
                  <div class="center-wrap">
                     <div class="moduletable  recentPost k2_content">
                        <div class="module-body">
                           <div id="k2ModuleBox198" class="k2-items-block  recentPost">
                              <div class="items">
                                 <div class="item">
                                    <div class="item-content">
                                       <h3 class="item-title">
                                          <a class="moduleItemTitle" href="https://www.currency.wiki/en/about">About</a>
                                       </h3>
                                       <a title="currency articles" href="https://www.currency.wiki/en/component/k2/content/currency-articles" class="category-image nopic"><span>currency articles</span></a>
                                       <div class="datetime">
                                          Tuesday, 07 March 2017 04:23 
                                       </div>
                                       <p class="item-intro">
                                          ABOUT US
                                       </p>
                                       <p>Currency.wiki is designed to do one thing: make currency conversion easy.</p>
                                       <p>We have incorporated features like educational resources and conversion <a class="readmore" href="https://www.currency.wiki/en/about">
                                          Read more... </a>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="item">
                                    <div class="item-content">
                                       <h3 class="item-title">
                                          <a class="moduleItemTitle" href="https://www.currency.wiki/en/contact-us">Contact Us</a>
                                       </h3>
                                       <a title="currency articles" href="https://www.currency.wiki/en/component/k2/content/currency-articles" class="category-image nopic"><span>currency articles</span></a>
                                       <div class="datetime">
                                          Tuesday, 07 March 2017 04:23 
                                       </div>
                                       <p class="item-intro"></p>
                                       <p>If you have ideas/comments/problems please contact This email address is being protected from spambots. You need JavaScript enabled to view <a class="readmore" href="https://www.currency.wiki/en/contact-us">
                                          Read more... </a>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="k2-more">
                                    <a class="moduleCustomLink" href="https://www.currency.wiki/en/finance" title="VIEW  MORE STORIES"><span>VIEW MORE STORIES</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_guarantor"></div>
      </div>
   
@include('footer')
      
   </body>
</html>

