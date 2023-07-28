<div class="clv_header">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="clv_left_header"> 
                    <div class="clv_logo">
                        <a href="{BASE_URL}"><img src="{BASE_URL}img/logo.png" style="width: 100px; height: 80px;" alt="Cultivation"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="clv_right_header">
                    <div class="clv_address">
                        <div class="row">
                            <?php
                                $info = select2("info","*","");
                                echo '
                                <div class="col-md-3">
                                    <div class="address_block">
                                        <span class="addr_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12px" height="16px" viewbox="0 0 12 16">
                                            <defs>
                                            <filter id="Filter_0">
                                                <feflood flood-color="rgb(254, 192, 7)" flood-opacity="1" result="floodOut"></feflood>
                                                <fecomposite operator="atop" in="floodOut" in2="SourceGraphic" result="compOut"></fecomposite>
                                                <feblend mode="normal" in="compOut" in2="SourceGraphic"></feblend>
                                            </filter>

                                            </defs>
                                            <g filter="url(#Filter_0)">
                                            <path fill-rule="evenodd" fill="rgb(83, 175, 30)" d="M5.530,-0.004 C2.497,-0.004 0.029,2.434 0.029,5.431 C0.029,9.148 4.951,14.609 5.161,14.839 C5.358,15.055 5.702,15.054 5.898,14.839 C6.108,14.609 11.029,9.148 11.029,5.431 C11.029,2.434 8.562,-0.004 5.530,-0.004 ZM5.530,8.165 C4.004,8.165 2.762,6.937 2.762,5.431 C2.762,3.923 4.004,2.696 5.530,2.696 C7.055,2.696 8.297,3.923 8.297,5.431 C8.297,6.937 7.055,8.165 5.530,8.165 Z"></path>
                                            </g>
                                            </svg>
                                        </span>
                                        <p>'.$info['address'].'</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="address_block">
                                        <a href="https://api.whatsapp.com/send?phone='.$info['phone'].'&text=Halo" target="_blank">
                                            <span class="addr_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px" viewbox="0 0 16 15">
                                                
                                                <g filter="url(#Filter_0)">
                                                <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M13.866,7.234 C13.607,5.720 12.892,4.343 11.802,3.254 C10.653,2.108 9.197,1.379 7.592,1.155 L7.754,-0.003 C9.613,0.254 11.296,1.095 12.626,2.426 C13.888,3.689 14.716,5.282 15.019,7.037 L13.866,7.234 ZM10.537,4.459 C11.296,5.220 11.796,6.178 11.977,7.238 L10.824,7.434 C10.684,6.617 10.300,5.872 9.713,5.286 C9.091,4.665 8.304,4.274 7.439,4.151 L7.601,2.995 C8.719,3.150 9.734,3.657 10.537,4.459 ZM4.909,8.180 C5.709,9.161 6.611,10.032 7.689,10.710 C7.920,10.853 8.176,10.959 8.416,11.090 C8.538,11.159 8.623,11.137 8.722,11.033 C9.088,10.660 9.459,10.290 9.831,9.922 C10.318,9.439 10.931,9.439 11.421,9.922 C12.017,10.516 12.614,11.109 13.207,11.706 C13.704,12.206 13.701,12.816 13.201,13.323 C12.864,13.664 12.505,13.987 12.186,14.344 C11.721,14.865 11.140,15.034 10.471,14.996 C9.500,14.942 8.607,14.622 7.745,14.203 C5.831,13.272 4.194,11.983 2.823,10.354 C1.808,9.148 0.971,7.834 0.421,6.353 C0.153,5.638 -0.038,4.905 0.022,4.127 C0.059,3.649 0.237,3.241 0.590,2.907 C0.971,2.544 1.330,2.168 1.705,1.798 C2.192,1.317 2.804,1.317 3.295,1.795 C3.598,2.093 3.894,2.394 4.194,2.694 C4.485,2.988 4.775,3.274 5.065,3.569 C5.578,4.083 5.578,4.683 5.069,5.194 C4.703,5.564 4.341,5.931 3.969,6.290 C3.872,6.388 3.863,6.466 3.913,6.585 C4.160,7.172 4.513,7.694 4.909,8.180 Z"></path>
                                                </g>
                                                </svg>
                                            </span>
                                            <p>'.$info['phone'].'</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="address_block">
                                        <a href="mailto:'.$info['email'].'" target="_blank">
                                            <span class="addr_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="15px" viewbox="0 0 20 15">
                                                
                                                <g filter="url(#Filter_0)">
                                                <path fill-rule="evenodd" fill="rgb(0, 0, 0)" d="M14.468,8.297 C15.479,7.588 16.707,6.742 18.151,5.760 C18.554,5.483 18.907,5.174 19.211,4.833 L19.211,13.062 L14.468,8.297 ZM17.398,4.619 C15.683,5.816 14.388,6.719 13.509,7.333 C13.026,7.670 12.667,7.920 12.436,8.082 C12.402,8.106 12.349,8.146 12.278,8.196 C12.201,8.251 12.105,8.321 11.986,8.407 C11.756,8.574 11.565,8.709 11.413,8.811 C11.261,8.915 11.077,9.031 10.862,9.159 C10.646,9.286 10.443,9.382 10.252,9.445 C10.061,9.510 9.885,9.541 9.722,9.541 L9.711,9.541 L9.701,9.541 C9.538,9.541 9.362,9.510 9.171,9.445 C8.980,9.382 8.777,9.286 8.561,9.159 C8.345,9.031 8.161,8.915 8.010,8.811 C7.858,8.709 7.667,8.574 7.437,8.407 C7.318,8.321 7.221,8.251 7.145,8.196 C7.074,8.146 7.020,8.106 6.986,8.082 C6.690,7.872 6.332,7.622 5.916,7.329 C5.428,6.989 4.861,6.591 4.208,6.138 C3.000,5.297 2.275,4.791 2.035,4.619 C1.597,4.322 1.183,3.912 0.794,3.389 C0.406,2.868 0.211,2.382 0.211,1.937 C0.211,1.382 0.358,0.920 0.651,0.551 C0.945,0.181 1.363,-0.004 1.908,-0.004 L17.515,-0.004 C17.974,-0.004 18.372,0.164 18.708,0.498 C19.043,0.832 19.211,1.233 19.211,1.701 C19.211,2.262 19.038,2.798 18.692,3.310 C18.346,3.821 17.914,4.258 17.398,4.619 ZM4.956,8.295 L0.211,13.062 L0.211,4.833 C0.522,5.181 0.879,5.491 1.282,5.760 C2.783,6.784 4.006,7.629 4.956,8.295 ZM6.551,9.435 C6.954,9.732 7.281,9.965 7.532,10.132 C7.783,10.299 8.117,10.469 8.534,10.644 C8.951,10.817 9.340,10.903 9.700,10.903 L9.711,10.903 L9.721,10.903 C10.082,10.903 10.471,10.817 10.888,10.644 C11.305,10.469 11.639,10.299 11.890,10.132 C12.141,9.965 12.468,9.732 12.871,9.435 C12.989,9.348 13.114,9.258 13.243,9.165 L18.626,14.573 C18.312,14.853 17.942,14.995 17.515,14.995 L1.908,14.995 C1.481,14.995 1.110,14.853 0.796,14.573 L6.180,9.165 C6.314,9.262 6.439,9.352 6.551,9.435 Z"></path>
                                                </g>
                                                </svg>
                                            </span>
                                            <p>'.$info['email'].'</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="address_block">
                                        <a href="'.$info['instagram'].'" target="_blank">
                                            <span class="addr_icon">
                                                <svg width="20px" height="15px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                                    <g>
                                                        <path d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#0A0A08"></path>
                                                    </g>
                                                </svg>                                    
                                            </span>
                                        </a>
                                        <a href="'.$info['facebook'].'" target="_blank">
                                            <span class="addr_icon">
                                                <svg width="20px" height="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                    <g id="XMLID_834_">
                                                        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
                                                            c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
                                                            V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
                                                            C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
                                                            c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                                    </g>
                                                </svg>                                   
                                            </span>
                                        </a>
                                    </div>
                                </div>';
                            ?>
                        </div>
                    </div>
                    <div class="clv_menu">
                        <div class="clv_menu_nav">
                            <ul>
                                {MENU_NAVIGATION}
                                {MENU_HEADER}
                            </ul>
                        </div>
                        <div class="cart_nav">
                            <ul>
                                <li class="menu_toggle">
                                    <span>
                                            
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 53 53" style="enable-background:new 0 0 53 53;" xml:space="preserve" width="20px" height="20px">
                                        <g>
                                            <g>
                                                <path d="M2,13.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,13.5,2,13.5z"></path>
                                                <path d="M2,28.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,28.5,2,28.5z"></path>
                                                <path d="M2,43.5h49c1.104,0,2-0.896,2-2s-0.896-2-2-2H2c-1.104,0-2,0.896-2,2S0.896,43.5,2,43.5z"></path>
                                            </g>
                                        </g>
                                        </svg>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>