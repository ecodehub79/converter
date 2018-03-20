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
                     <div id="main-content">
                        <div id="system-message-container"></div>
                        <div id="content">
                           <div class="blog-featured" itemscope="" itemtype="https://schema.org/Blog"></div>
                        </div>
                     </div>
                     <div id="cont-wrap" class="site-content-middle r">
                        <div class="site-content-middle-in">
                                  <?php
								  foreach($profile_info as $profile)
								  {
									  echo $profile->info;
								  }
								  ?>
                        </div>
                     </div>
                    @include('sidebar')
                  </div>
               </div>
              
  
               </div>
            </div>
         </div>
         <div class="footer_guarantor"></div>
      </div>
   
      @include('header')
   
      
   </body>
</html>

