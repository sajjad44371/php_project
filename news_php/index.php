<?php 
// db connection
include ('lib/connection.php');
// tech query
$t_sql="SELECT id, title, icon, description FROM news WHERE c_id=11 ORDER BY id DESC LIMIT 3";
$t_query= $connection -> query($t_sql);

 ?>
    <!-- header start -->
    <?php include('header.php') ?>
    <!-- header end -->
    <!-- banner start -->
    <section class="banner">
      <div class="container">
        <div class="row mh_custom align-items-center">
          <div class="col-lg-7">
            <div class="b_content">
              <h1>Lorem ipsum dolor sit amet.</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex alias repudiandae assumenda impedit voluptatem et repellat delectus reiciendis perspiciatis velit. impedit voluptatem et repellat delectus reiciendis perspiciatis velit.</p>
              <a href="#" class="btn btn-dark">Read More</a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="b_icon text-center">
              <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner end -->
    <!-- category start -->
    <section class="category">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="c_title text-center">
              <h1>Popular Categories</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit. </p>
              <hr class="w-25 m-auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-rocket" aria-hidden="true"></i>
              </a>
              <h3>tech</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-book" aria-hidden="true"></i>
              </a>
              <h3>education</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-thermometer-full" aria-hidden="true"></i>
              </a>
              <h3>weather</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-user-md" aria-hidden="true"></i>
              </a>
              <h3>health</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-university" aria-hidden="true"></i>
              </a>
              <h3>economy</h3>
            </div>
          </div>
          <div class="col-lg">
            <div class="f_icon text-center">
              <a href="#" class="text-dark">
                <i class="fa fa-bicycle" aria-hidden="true"></i>
              </a>
              <h3>sports</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- featcategory end -->
    <!-- tech news start -->
    <section class="tech">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="c_title text-center">
              <h1>Tech News</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit. </p>
              <hr class="w-25 m-auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-bug" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-bug" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-bug" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- tech news end -->
    <!-- health news start -->
    <section class="health">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="c_title text-center">
              <h1>Health News</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit. </p>
              <hr class="w-25 m-auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-heartbeat" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-heartbeat" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-heartbeat" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- health news end -->
    <!-- education news start -->
    <section class="education">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="c_title text-center">
              <h1>Education News</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. consectetur adipisicing elit. </p>
              <hr class="w-25 m-auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="c_news text-center">
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <h2>Lorem ipsum dolor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Cupiditate, nulla architecto doloremque neque ducimus at esse provident minus, itaque suscipit.</p>
              <a href="#" class="text-dark">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- education news end -->
    <!-- footer start -->
    <?php include('footer.php') ?>
    <!-- footer end -->