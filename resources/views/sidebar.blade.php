  <aside id="right" class="site-content-right sidebar-b" data-area="sidebar-a" style="height: 453px;">
                        <div class="moduletable  currecentexch" data-mod="2" data-height="478" style="position: absolute;">
                           <div class="module-title"><span>Recent Conversions</span></div>
                           <div class="module-body">
                              <div id="currecentexch183">
                                 <div class="tabs-body" style="height: 354px;">
                                    <ul class="nostyle active" data-height="354" style="position: absolute;">
									@foreach ($recent as $data)
                                       <li class="">
                                          <a class="currency-link" href="https://www.currency.wiki/en/converter/3500usd-ghs">
                                          {{$data->amount}}.0 {{$data->currency_currency}}</a><span class="datetime"><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($data->date))->diffForHumans() ?></span>
                                       </li>
									   
									@endforeach
                                      
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="moduletable  curprofiles active" data-mod="0" data-height="453" style="position: absolute;">
                           <div class="module-title"><span>Top Currency Profiles</span></div>
                           <div class="module-body">
                              <div class="block-topcurrencies">
                                 <ul class="nostyle">
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/aud">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/AUD.png"></div>
                                          <span>AUD - Australian Dollar</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/btc">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/BTC.png"></div>
                                          <span>BTC - Bitcoin</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/cad">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/CAD.png"></div>
                                          <span>CAD - Canadian Dollar</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/chf">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/CHF.png"></div>
                                          <span>CHF - Swiss Franc</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/eur">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/EUR.png"></div>
                                          <span>EUR - Euro</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/gbp">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/GBP.png"></div>
                                          <span>GBP - Pound Sterling</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="https://www.currency.wiki/en/profile/usd">
                                          <div class="flag"><img width="45" src="./Free Currency Rates - Tools &amp; Exchange Analytics_files/USD.png"></div>
                                          <span>USD - US Dollar</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="moduletable  curratelivestatus" data-mod="1" data-height="399" style="position: absolute;">
                           <div class="module-title"><span>Trending Rates</span></div>
                           <div class="module-body">
                              <div class="block-rates">
                                 <ul class="nostyle">
								 
                                    <li class="down"><a class="currency-link" href="https://www.currency.wiki/en/charts/eur-usd">EUR / USD</a>
                                       <span class="rate">-0.811603%</span>
                                    </li>
                                 
									
                                 </ul>
                              </div>
                           </div>
                        </div>
                        
                       
                     </aside>