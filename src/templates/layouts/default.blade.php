<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('includes.docs.{prefix}.head')
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-3" id="sidebar">
                    <div class="column-content">
                        <div class="search-header">
                            <img src="{logo-path}" class="logo" alt="Logo CoDev" />
                            <input id="search" type="text" placeholder="Search">
                        </div>
                        <ul id="navigation">

                            <li><a href="#introduction">Introduction</a></li>

                            {navigation}

                        </ul>
                    </div>
                </div>
                <div class="col-9" id="main-content">

                    <div class="column-content">

                        @include('includes.docs.{prefix}.introduction')

                        <hr />

                        {body-content}

                    </div>
                    <div class="col-12">
                        <p style="margin-left: 10px;"><a href="https://github.com/codev-vn/apidocs" target="_blank">CoDev Service Co., Ltd</a> developed on the foundation of <a href="https://github.com/f2m2/apidocs" target="_blank">F2M2</a></p>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
