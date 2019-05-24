{*
/*
 * @Description: 
 * 本区块放在菜单之上没有问题，
 * 放在菜单之下时，如果菜单内容较多，挤占空间，在ipad上长/宽会失常
 * @Author: Alisa
 * @Date: 2019-05-22 14:05:06
 * @LastEditors: Alisa
 * @LastEditTime: 2019-05-24 17:57:23
 */
*}
<div class="slider-wrapper">
        
        <!-- masterslider -->
        <div class="master-slider wrapper" id="masterslider" data-height="fullscreen">
        	
            <!-- Slide 1 -->
            <div class="ms-slide slide-1" style="z-index: 10" data-delay="8">
            	
                <!-- slide background -->
                <img src="{$webRoot}data/slides/slider/transparent.png" data-src="{$webRoot}data/slides/slider/image1.png" alt="lorem ipsum dolor sit" />
                
                <h1 class="ms-layer center" style="left:0; top:25px;"
                    data-effect="rotatetop(-40,60,l)"
                    data-duration="3500"
                    data-delay="0"
                    data-ease="easeOutExpo"
                >Welcome Human</h1>
                
                <h2 class="ms-layer center"  style="left:0; top:156px" 
                    data-effect="left(short)"
                    data-duration="3500"
                    data-delay="300"
                    data-ease="easeOutExpo"
                >The picture you paint will be the one they’ll see.</h2>
                
                <!-- iPhone mockup -->
                <img src="{$webRoot}data/slides/slider/blank.gif" data-src="{$webRoot}data/slides/slider/iphone.png" alt="layer" class="ms-layer"
                    style="top:280px; left:145px; width:797px; height:595px;" 
                    data-effect="bottom(100)"
                    data-duration="1200"
                    data-delay="600"
                    data-ease="easeOutQuad"
                    data-type="image"
                />
                
                <!-- First iPhone Screen Layer -->
                <img src="{$webRoot}data/slides/slider/blank.gif" data-src="{$webRoot}data/slides/slider/slide-1-iphonescreen-1.png" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="600"
                    data-ease="easeOutQuad"
                    data-effect="bottom(100)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="3000"
                />
                
                <!-- First iPhone Screen Layer -->
                <img src="{$webRoot}data/slides/slider/blank.gif" data-src="{$webRoot}data/slides/slider/slide-1-iphonescreen-1.png" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="3000"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="4500"
                />
                
                 <!-- First iPhone Screen Layer -->
                <img src="{$webRoot}data/slides/slider/blank.gif" data-src="{$webRoot}data/slides/slider/slide-1-iphonescreen-1.png" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="4500"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="6000"
                />
                
                <!-- First iPhone Screen Layer -->
                <img src="{$webRoot}data/slides/slider/blank.gif" data-src="{$webRoot}data/slides/slider/slide-1-iphonescreen-3.png" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="6000"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                />
             
            </div>
            <!-- end of slide -->
            
            <!-- slide 2 -->
            <div class="ms-slide slide-2" style="z-index: 11" data-delay="6">
          
                <!-- slide background -->
            	<img src="{$webRoot}data/slides/slider/transparent.png" data-src="{$webRoot}data/slides/slider/laptopglasses.png" alt="lorem ipsum dolor sit"/>  
                 
                  <h2 class="ms-layer" style="left:7px; top:215px;"
                    data-effect="top(100)"
                    data-duration="3500"
                    data-delay="0"
                    data-ease="easeOutExpo"
                >A website like no other.</h2>
                
                <h1 class="ms-layer"  style="left:0; top:276px" 
                    data-effect="bottom(short)"
                    data-duration="2500"
                    data-delay="500"
                    data-ease="easeOutExpo"
                >Modern, Clean, Minimal</h1>
                
                <p class="ms-layer h4" style="left:7px; top:415px; width:460px;"
                	data-effect="bottom(short)"
                    data-duration="1200"
                    data-delay="600"
                    data-ease="300"
               >Rigged with over xx homepages, xx header styels, xx sliders, 
				xx footer styles, inifinite color options.</p>
                
                 <p class="ms-layer h4" style="left:7px; top:517px; width:460px;"
                	data-effect="bottom(short)"
                    data-duration="1000"
                    data-delay="650"
                    data-ease="300"
               ><a class="btn btn-bordered white anim"  style="left:7px; top:460px;" role="button">Buy Dale</a></p>
                
            </div>
            <!-- end of slide -->
            
            <!-- slide 3 -->
            <div class="ms-slide slide-video" style="z-index: 9" data-delay="8">
                 
            	<img src="{$webRoot}data/slides/slider/transparent.png" data-src="{$webRoot}data/slides/slider/laptopglasses.png" alt="lorem ipsum dolor sit"/>  
                
                <video id="video1" class="video-js vjs-default-skin" poster="{$webRoot}data/slides/videos/CameraLens/poster.jpg"  muted="" autoplay="" loop="" preload="">
                    <source src="{$webRoot}data/slides/videos/CameraLens/CameraLens.mp4" type='video/mp4' />
                    <source src="{$webRoot}data/slides/videos/CameraLens/CameraLens.webm" type='video/webm' />
                    <source src="{$webRoot}data/slides/videos/CameraLens/CameraLens.ogv" type='video/ogg' />
                </video>
                    
               	<h2 class="ms-layer" style="left:390px; top:215px;"
                    data-effect="right(200)"
                    data-duration="3500"
                    data-delay="100"
                    data-ease="easeOutExpo"
                >Custom Video Backgrounds</h2>
                
                <h1 class="ms-layer center"  style="left:0; top:276px" 
                    data-effect="bottom(short)"
                    data-duration="2500"
                    data-delay="800"
                    data-ease="easeOutExpo"
                >Perfected Every Pixel</h1>
                 
              	<p class="ms-layer h4" style="left:91px; top:415px; width:460px;"
                	data-effect="left(short)"
                    data-duration="1200"
                    data-delay="1200"
                    data-ease="300"
               >All videos you see in the preview are available in the 
               download file along with stock photos!</p>
                
            </div>
            <!-- end of slide -->
            
        </div> <!-- end of masterslider -->
         
        <a href="#firstSection"><i class="fa fa-chevron-down" id="go-down"></i></a>
        
    </div><!-- end of slider-wrapper -->