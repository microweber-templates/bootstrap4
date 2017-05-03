<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>
<?php include template_dir(). "header.php"; ?>

<div class="container edit" id="home-layout"  rel="page" field="content">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="jumbotron">
        <h1> Hello, world! </h1>
        <p> This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique. </p>
        <p> <a class="btn btn-primary btn-large" href="#">Learn more</a> </p>
      </div>
    </div>
  </div>
  <div class="mw-row clearfix">
    <div class="mw-col" style="width:33.33%">
      <div class="mw-col-container">
        <div class="element">
          <h2> Heading </h2>
          <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p> <a class="btn" href="#">View details »</a> </p>
        </div>
      </div>
    </div>
    <div class="mw-col" style="width:33.33%">
      <div class="mw-col-container">
        <div class="element">
          <h2> Heading </h2>
          <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p> <a class="btn" href="#">View details »</a> </p>
        </div>
      </div>
    </div>
    <div class="mw-col" style="width:33.33%">
      <div class="mw-col-container">
        <div class="element">
          <h2> Heading </h2>
          <p> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p> <a class="btn" href="#">View details »</a> </p>
        </div>
      </div>
    </div>
  </div>
   
  <div class="container">
    <div class="element"> <br>
      <br>
      <h3 align="center" class="symbol">Powerful &nbsp;&amp;&nbsp; User Friendly &nbsp;Content Management System &nbsp;of &nbsp;New Generation</h3>
      <h4 align="center">with rich PHP and JavaScript API</h4>
        <br>
    </div>
  </div>
  <div class="container">
    <div class="mw-row">
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <div class="element">
            <hr class="visible-desktop column-hr">
          </div>
        </div>
      </div>
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <h2 align="center">
            <?php _e("Latest Posts"); ?>
          </h2>
        </div>
      </div>
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <div class="element">
            <hr class="visible-desktop column-hr">
          </div>
        </div>
      </div>
    </div>
    <?php

    /*

         Parameters(attributes) for "Posts" Module:


             * template - Name of the template.
               Templates provided from Microweber:
                 - default - loads when no template is specified
                 - 3 columns
                 - 4 columns
                 - sidebar

             * limit - number of posts to show per page. Default is the value specified in the Admin -> Settings (10) .

             * description-length
                - number: Number of symbols you want to show from description. Default: 400

             * title-length
                - number: Number of symbols you want to show from title. Default: 120

             * current_page - usage is for paging
                - number: The number of the page where the posts will appear. Default: 1

             * hide-paging
                - y/n - Default: n

             * data-show:
                 Possible values:
                    - thumbnail,
                    - title,
                    - read_more,
                    - description,
                    - created_at

     */

?>
    <module
          data-type="posts"
          data-limit="3"
          id="home-posts"
          data-description-length="100"
          data-show="thumbnail,title,created_at,read_more,description"
          data-template="columns" />
  </div>
  <div class="container">
    <div class="mw-row">
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <div class="element">
            <hr class="visible-desktop column-hr">
          </div>
        </div>
      </div>
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <h2 align="center">
            <?php _e("Latest Products"); ?>
          </h2>
        </div>
      </div>
      <div class="mw-col" style="width:33.33%">
        <div class="mw-col-container">
          <div class="element">
            <hr class="visible-desktop column-hr">
          </div>
        </div>
      </div>
    </div>
    <?php

    /*

         Parameters(attributes) for "Products" Module:


             * template - Name of the template.
               Templates provided from Microweber:
                 - default - loads when no template is specified
                 - 3 columns
                 - 4 columns
                 - sidebar

             * limit - number of posts to show per page. Default is the value specified in the Admin -> Settings (10) .

             * description-length
                - number: Number of symbols you want to show from description. Default: 400

             * title-length
                - number: Number of symbols you want to show from title. Default: 120

             * current_page - usage is for paging
                - number: The number of the page where the posts will appear. Default: 1

             * hide-paging
                - y/n - Default: n

             * data-show:
                 Possible values:
                    - thumbnail,
                    - title,
                    - read_more,
                    - description,
                    - created_at

     */

?>
    <module
          data-type="shop/products"
          data-limit="3"
          id="home-products"
          
            />
  </div>
</div>
<?php include template_dir().  "footer.php"; ?>
