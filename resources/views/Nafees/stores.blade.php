<!DOCTYPE html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="web-app-capable" content="yes">
@include('Nafees.includes.head')
	
	</head>

<body class="home page-template page-template-page-templates page-template-slideshow page-template-page-templatesslideshow-php page page-id-575 page-parent header--sticky nav-scroll-hide header--transparent" data-smoothscrolling data-color="#c91414" >

<div id="page" class="page">
	@include('Nafees.includes.header')

  <header data-bully id="post-37-title" class="c-hero  article__header  article__header--page two-thirds-height" data-type="image">
										<div class="c-hero__background c-hero__layer" data-rellax data-rellax-container>
							<img class="c-hero__image" data-rellax src="Images/imgp8441_2.jpg" alt="Stores"/>
						</div>
										<div class="c-hero__wrapper">
						<hgroup class="article__headline">
							<h2 class="headline__secondary"><span class="first-letter">O</span>rder Online</h2>
							<h1 class="headline__primary">Select your nearest store</h1>
													</hgroup>
					</div>
							</header>
                            <style>
                                .form-inline-row {
                                    display: flex;
                                    flex-direction: row wrap;
                                    align-items: center;
                                    padding: 20px;
                                    text-transform: uppercase;
                                    background:#f1f1f1;
                                    margin: 0px 20px 0px 20px;
                                }
                                .form-inline-row label {
                                    margin:5px 10px 5px 10px;
                                    font-weight: bold;
                                    width:30%;
                                    color:#000;
                                    font-size: 16px; 
                                }
                                .form-inline-row input{
                                    vertical-align: middle;
                                    margin:5px 10px 5px 0px;
                                    padding: 10px;
                                    background-color: #fff;
                                    border: 1px solid #ddd;
                                }
                                .form-inline-row button{
                                    padding: 10px 20px;
                                    border: 1px solid #ddd;
                                    cursor: pointer;
                                    background: #000;
color: white;
                                }
                            </style>
                            <article id="post-37" class="article--page article--main border-simple post-37 page type-page status-publish has-post-thumbnail hentry">
				<section class="article__content">
                    <form action="" class="form-inline-row">
                        
                            <label for="" class="col-3">Search Store Here</label>
                            <input type="text" name="" id="" class='col-5'>
                            <button type="submit">Search</button>
                        
                    </form>
				</section>
        <style>
           

.container {
  max-width: 1335px;
  margin: 0 auto;
}

.grid-row {
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
}

.grid-item {
  height: 400px;
  flex-basis: 30%;
  -ms-flex: auto;
  width: 259px;
  position: relative;
  padding: 10px;
  box-sizing: border-box;
}

.grid-row a {
  text-decoration: none;
}

.wrapping-link {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  color: currentColor;
}

.grid-item-wrapper {
  -webkit-box-sizing: initial;
  -moz-box-sizing: initial;
  box-sizing: initial;
  background: #ececec;
  margin: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  position: relative;
}

.grid-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.grid-image-top {
  height: 45%;
  width: 120%;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  background-position: 50% 50%;
  left: -10.5%;
  top: -4.5%;
}

.grid-image-top .centered {
  text-align: center;
  transform: translate(-50%, -50%);
  background-size: contain;
  background-repeat: no-repeat;
  position: absolute;
  top: 54.5%;
  left: 50%;
  width: 60%;
  height: 60%;
  background-position: center;
}

.grid-image-top.rex-ray {
  background: -webkit-gradient(linear,left top, left bottom,from(#007DB8),to(#00447C));
  background: -webkit-linear-gradient(#007DB8,#00447C);
  background: -o-linear-gradient(#007DB8,#00447C);
  background: linear-gradient(#007DB8,#00447C);
}



.grid-item-content {
  padding: 0 20px 20px 20px;
}

.item-title {
  font-size: 24px;
  line-height: 26px;
  font-weight: 700;
  margin-bottom: 18px;
  display: block;
}
.font-weight-bolder
{
    font-weight: 700;
}

.item-category {
  text-transform: uppercase;
  display: block;
  margin-bottom: 20px;
  font-size: 14px;
}

.item-excerpt {
  margin-bottom: 20px;
  display: block;
  font-size: 14px;
}



.grid-item:hover .more-info i {
  padding-left: 20px;
  transition-duration: .5s;
}

.more-info i::before {
  font-size: 16px;
}

.grid-item:hover .grid-item-wrapper {
  padding: 2% 2%;
  margin: -2% -2%;
}

@media(max-width: 1333px) {
  .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 1073px) {
   .grid-item {
    flex-basis: 33.33%;
  }
}

@media(max-width: 815px) {
  .grid-item {
    flex-basis: 50%;
  }
}

@media(max-width: 555px) {
  .grid-item {
    flex-basis: 100%;
  }
}


        </style>                  
                           
                           
                           <div class="container">
          <div class="grid-row">
            
          {{$stores}}
          @foreach ($stores as $store)
            <div class="grid-item">
         
              <a class="wrapping-link" href="https://www.dell.com/learn/us/en/555/campaigns/xps-linux-laptop_us" target="_blank"></a>	   
              <div class="grid-item-wrapper">
                <div class="grid-item-container">
                  <div class="grid-image-top sputnik" style="background-image: url('Images/studio68-380-e1518189564415.jpg');">
                   
                  </div>
                  <div class="grid-item-content">
                    <h2 class="item-title">Sputnik</h2>
                    <span class="font-weight-bolder" >Address:</span>
                    <span >A developer focused laptop with a pre-installed and fully support Ubuntu im...</span>
                    <h5><span class="font-weight-bolder">TEL <a href="tel://0343">0344609009</a></span></h5>
                  </div>
                </div>
              </div>
            </div>
 @endforeach
           
            
          </div>
        </div>

</article>
	@include('Nafees.includes.footer')

</body>
</html>