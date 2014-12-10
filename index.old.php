<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 16:28
 */
?>

<?php include_once('head.php'); ?>

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../" class="navbar-brand">Bootstrap</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../getting-started/">Getting started</a>
                </li>
                <li>
                    <a href="../css/">CSS</a>
                </li>
                <li class="active">
                    <a href="../components/">Components</a>
                </li>
                <li>
                    <a href="../javascript/">JavaScript</a>
                </li>
                <li>
                    <a href="../customize/">Customize</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://expo.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">Expo</a></li>
                <li><a href="http://blog.getbootstrap.com" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Blog</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="bs-docs-header" id="content">
    <div class="container">
        <h1>Getting started</h1>
        <p>An overview of Bootstrap, how to download and use, basic templates and examples, and more.</p>
        <div id="carbonads-container"><div class="carbonad"><div id="azcarbon"><span><span class="carbonad-image"><a href="http://srv.carbonads.net/ads/click/x/GTND423JFTYIV5QUCKB4YKQWC6AD423ECASDKZ3JCEYIEKQICYBDLK7KC6BD453JCEADTK3EHJNCLSIZ?segment=placement:getbootstrapcom" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/18191" class="carbonad-image carbonad-img"></a></span><span class="carbonad-text"><a href="http://srv.carbonads.net/ads/click/x/GTND423JFTYIV5QUCKB4YKQWC6AD423ECASDKZ3JCEYIEKQICYBDLK7KC6BD453JCEADTK3EHJNCLSIZ?segment=placement:getbootstrapcom">ruxit uses artificial intelligence to get to the root of issues much faster than a human can</a></span><span class="carbonad-tag">ads via <a href="http://carbonads.com">Carbon</a></span></span></div><script>var z = document.createElement("script"); z.async = true; z.src = "http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div>

    </div>
</div>

<div class="container bs-docs-container">

<div class="row">
<div class="col-md-9" role="main">
<div class="bs-docs-section">
    <h1 id="download" class="page-header">Download</h1>

    <p class="lead">Bootstrap (currently v3.3.1) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

    <div class="row bs-downloads">
        <div class="col-sm-4">
            <h3 id="download-bootstrap">Bootstrap</h3>
            <p>Compiled and minified CSS, JavaScript, and fonts. No docs or original source files are included.</p>
            <p>
                <a href="https://github.com/twbs/bootstrap/releases/download/v3.3.1/bootstrap-3.3.1-dist.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download compiled');">Download Bootstrap</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h3 id="download-source">Source code</h3>
            <p>Source Less, JavaScript, and font files, along with our docs. <strong>Requires a Less compiler and <a href="#grunt">some setup.</a></strong></p>
            <p>
                <a href="https://github.com/twbs/bootstrap/archive/v3.3.1.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download source');">Download source</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h3 id="download-sass">Sass</h3>
            <p><a href="https://github.com/twbs/bootstrap-sass">Bootstrap ported from Less to Sass</a> for easy inclusion in Rails, Compass, or Sass-only projects.</p>
            <p>
                <a href="https://github.com/twbs/bootstrap-sass/archive/v3.3.1.tar.gz" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download Sass');">Download Sass</a>
            </p>
        </div>
    </div>

    <h3 id="download-cdn">Bootstrap CDN</h3>
    <p>The folks over at <a href="http://www.maxcdn.com/">MaxCDN</a> graciously provide CDN support for Bootstrap's CSS and JavaScript. Just use these <a href="http://www.bootstrapcdn.com/">Bootstrap CDN</a> links.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Latest compiled and minified CSS --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Optional theme --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></div>

    <h3 id="download-bower">Install with Bower</h3>
    <p>Install and manage Bootstrap's Less, CSS, JavaScript, and fonts using <a href="http://bower.io">Bower</a>.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash"><span class="gp">$ </span>bower install bootstrap</code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="whats-included" class="page-header">What's included</h1>

    <p class="lead">Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>

    <div class="bs-callout bs-callout-warning" id="jquery-required">
        <h4>jQuery required</h4>
        <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>. <a href="https://github.com/twbs/bootstrap/blob/v3.3.1/bower.json">Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
    </div>

    <h2 id="whats-included-precompiled">Precompiled Bootstrap</h2>
    <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
    <!-- NOTE: This info is intentionally duplicated in the README.
    Copy any changes made here over to the README too. -->
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash">bootstrap/
                ├── css/
                │   ├── bootstrap.css
                │   ├── bootstrap.min.css
                │   ├── bootstrap-theme.css
                │   └── bootstrap-theme.min.css
                ├── js/
                │   ├── bootstrap.js
                │   └── bootstrap.min.js
                └── fonts/
                ├── glyphicons-halflings-regular.eot
                ├── glyphicons-halflings-regular.svg
                ├── glyphicons-halflings-regular.ttf
                └── glyphicons-halflings-regular.woff</code></pre></div>

    <p>This is the most basic form of Bootstrap: precompiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). Fonts from Glyphicons are included, as is the optional Bootstrap theme.</p>

    <h2 id="whats-included-source">Bootstrap source code</h2>
    <p>The Bootstrap source code download includes the precompiled CSS, JavaScript, and font assets, along with source Less, JavaScript, and documentation. More specifically, it includes the following and more:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash">bootstrap/
                ├── less/
                ├── js/
                ├── fonts/
                ├── dist/
                │   ├── css/
                │   ├── js/
                │   └── fonts/
                └── docs/
                └── examples/</code></pre></div>
    <p>The <code>less/</code>, <code>js/</code>, and <code>fonts/</code> are the source code for our CSS, JS, and icon fonts (respectively). The <code>dist/</code> folder includes everything listed in the precompiled download section above. The <code>docs/</code> folder includes the source code for our documentation, and <code>examples/</code> of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
</div>

<div class="bs-docs-section">
    <h1 id="grunt" class="page-header">Compiling CSS and JavaScript</h1>

    <p class="lead">Bootstrap uses <a href="http://gruntjs.com">Grunt</a> for its build system, with convenient methods for working with the framework. It's how we compile our code, run tests, and more.</p>

    <h2 id="grunt-installing">Installing Grunt</h2>
    <p>To install Grunt, you must <strong>first <a href="http://nodejs.org/download/">download and install node.js</a></strong> (which includes npm). npm stands for <a href="http://npmjs.org/">node packaged modules</a> and is a way to manage development dependencies through node.js.</p>

    Then, from the command line:
    <ol>
        <li>Install <code>grunt-cli</code> globally with <code>npm install -g grunt-cli</code>.</li>
        <li>Navigate to the root <code>/bootstrap/</code> directory, then run <code>npm install</code>. npm will look at the <a href="https://github.com/twbs/bootstrap/blob/master/package.json"><code>package.json</code></a> file and automatically install the necessary local dependencies listed there.</li>
    </ol>

    <p>When completed, you'll be able to run the various Grunt commands provided from the command line.</p>

    <h2 id="grunt-commands">Available Grunt commands</h2>
    <h3><code>grunt dist</code> (Just compile CSS and JavaScript)</h3>
    <p>Regenerates the <code>/dist/</code> directory with compiled and minified CSS and JavaScript files. As a Bootstrap user, this is normally the command you want.</p>

    <h3><code>grunt watch</code> (Watch)</h3>
    <p>Watches the Less source files and automatically recompiles them to CSS whenever you save a change.</p>

    <h3><code>grunt test</code> (Run tests)</h3>
    <p>Runs <a href="http://jshint.com">JSHint</a> and runs the <a href="http://qunitjs.com">QUnit</a> tests headlessly in <a href="http://phantomjs.org">PhantomJS</a>.</p>

    <h3><code>grunt docs</code> (Build &amp; test the docs assets)</h3>
    <p>Builds and tests CSS, JavaScript, and other assets which are used when running the documentation locally via <code>jekyll serve</code>.</p>

    <h3><code>grunt</code> (Build absolutely everything and run tests)</h3>
    <p>Compiles and minifies CSS and JavaScript, builds the documentation website, runs the HTML5 validator against the docs, regenerates the Customizer assets, and more. Requires <a href="http://jekyllrb.com/docs/installation/">Jekyll</a>. Usually only necessary if you're hacking on Bootstrap itself.</p>

    <h2 id="grunt-troubleshooting">Troubleshooting</h2>
    <p>Should you encounter problems with installing dependencies or running Grunt commands, first delete the <code>/node_modules/</code> directory generated by npm. Then, rerun <code>npm install</code>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="template" class="page-header">Basic template</h1>

    <p class="lead">Start with this basic HTML template, or modify <a href="#examples">these examples</a>. We hope you'll customize our templates and examples, adapting them to suit your needs.</p>

    <p>Copy the HTML below to begin working with a minimal Bootstrap document.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
                <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;head&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;title&gt;</span>Bootstrap 101 Template<span class="nt">&lt;/title&gt;</span>

                <span class="c">&lt;!-- Bootstrap --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"css/bootstrap.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --&gt;</span>
                <span class="c">&lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;</span>
    <span class="c">&lt;!--[if lt IE 9]&gt;
      &lt;script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"&gt;&lt;/script&gt;
      &lt;script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"&gt;&lt;/script&gt;
    &lt;![endif]--&gt;</span>
                <span class="nt">&lt;/head&gt;</span>
                <span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

                <span class="c">&lt;!-- jQuery (necessary for Bootstrap's JavaScript plugins) --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="c">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="nt">&lt;/body&gt;</span>
                <span class="nt">&lt;/html&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="examples" class="page-header">Examples</h1>

    <p class="lead">Build on the basic template above with Bootstrap's many components. We encourage you to customize and adapt Bootstrap to suit your individual project's needs.</p>

    <h3 id="examples-framework">Using the framework</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/starter-template/">
                <img src="../examples/screenshots/starter-template.jpg" alt="">
            </a>
            <h4>Starter template</h4>
            <p>Nothing but the basics: compiled CSS and JavaScript along with a container.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/theme/">
                <img src="../examples/screenshots/theme.jpg" alt="">
            </a>
            <h4>Bootstrap theme</h4>
            <p>Load the optional Bootstrap theme for a visually enhanced experience.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/grid/">
                <img src="../examples/screenshots/grid.jpg" alt="">
            </a>
            <h4>Grids</h4>
            <p>Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/jumbotron/">
                <img src="../examples/screenshots/jumbotron.jpg" alt="">
            </a>
            <h4>Jumbotron</h4>
            <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/jumbotron-narrow/">
                <img src="../examples/screenshots/jumbotron-narrow.jpg" alt="">
            </a>
            <h4>Narrow jumbotron</h4>
            <p>Build a more custom page by narrowing the default container and jumbotron.</p>
        </div>
    </div>

    <h3 id="examples-navbars">Navbars in action</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar/">
                <img src="../examples/screenshots/navbar.jpg" alt="">
            </a>
            <h4>Navbar</h4>
            <p>Super basic template that includes the navbar along with some additional content.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar-static-top/">
                <img src="../examples/screenshots/navbar-static.jpg" alt="">
            </a>
            <h4>Static top navbar</h4>
            <p>Super basic template with a static top navbar along with some additional content.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar-fixed-top/">
                <img src="../examples/screenshots/navbar-fixed.jpg" alt="">
            </a>
            <h4>Fixed navbar</h4>
            <p>Super basic template with a fixed top navbar along with some additional content.</p>
        </div>
    </div>

    <h3 id="examples-custom">Custom components</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/cover/">
                <img src="../examples/screenshots/cover.jpg" alt="">
            </a>
            <h4>Cover</h4>
            <p>A one-page template for building simple and beautiful home pages.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/carousel/">
                <img src="../examples/screenshots/carousel.jpg" alt="">
            </a>
            <h4>Carousel</h4>
            <p>Customize the navbar and carousel, then add some new components.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/blog/">
                <img src="../examples/screenshots/blog.jpg" alt="">
            </a>
            <h4>Blog</h4>
            <p>Simple two-column blog layout with custom navigation, header, and type.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/dashboard/">
                <img src="../examples/screenshots/dashboard.jpg" alt="">
            </a>
            <h4>Dashboard</h4>
            <p>Basic structure for a admin dashboard with fixed sidebar and navbar.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/signin/">
                <img src="../examples/screenshots/sign-in.jpg" alt="">
            </a>
            <h4>Sign-in page</h4>
            <p>Custom form layout and design for a simple sign in form.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/justified-nav/">
                <img src="../examples/screenshots/justified-nav.jpg" alt="">
            </a>
            <h4>Justified nav</h4>
            <p>Create a custom navbar with justified links. Heads up! <a href="../components/#nav-justified">Not too Safari friendly.</a></p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/sticky-footer/">
                <img src="../examples/screenshots/sticky-footer.jpg" alt="">
            </a>
            <h4>Sticky footer</h4>
            <p>Attach a footer to the bottom of the viewport when the content is shorter than it.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/sticky-footer-navbar/">
                <img src="../examples/screenshots/sticky-footer-navbar.jpg" alt="">
            </a>
            <h4>Sticky footer with navbar</h4>
            <p>Attach a footer to the bottom of the viewport with a fixed navbar at the top.</p>
        </div>
    </div>

    <h3 id="examples-experiments">Experiments</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/non-responsive/">
                <img src="../examples/screenshots/non-responsive.jpg" alt="">
            </a>
            <h4>Non-responsive Bootstrap</h4>
            <p>Easily disable the responsiveness of Bootstrap <a href="#disable-responsive">per our docs</a>.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/offcanvas/">
                <img src="../examples/screenshots/offcanvas.jpg" alt="">
            </a>
            <h4>Offcanvas</h4>
            <p>Build a toggleable off-canvas navigation menu for use with Bootstrap.</p>
        </div>
    </div>
</div>

<div class="bs-docs-section">
    <h1 id="tools" class="page-header">Tools</h1>

    <h2 id="tools-bootlint">Bootlint</h2>
    <p><strong><a href="https://github.com/twbs/bootlint">Bootlint</a></strong> is the official Bootstrap HTML <a href="http://en.wikipedia.org/wiki/Lint_(software)">linter</a> tool. It automatically checks for several common HTML mistakes in webpages that are using Bootstrap in a fairly "vanilla" way. Vanilla Bootstrap's components/widgets require their parts of the DOM to conform to certain structures. Bootlint checks that instances of Bootstrap components have correctly-structured HTML. Consider adding Bootlint to your Bootstrap web development toolchain so that none of the common mistakes slow down your project's development.</p>
</div>

<div class="bs-docs-section">
    <h1 id="community" class="page-header">Community</h1>

    <p class="lead">Stay up to date on the development of Bootstrap and reach out to the community with these helpful resources.</p>
    <ul>
        <li>Read and subscribe to <a href="http://blog.getbootstrap.com/">The Official Bootstrap Blog</a>.</li>
        <li>Chat with fellow Bootstrappers using IRC in the <code>irc.freenode.net</code> server, in the <a href="irc://irc.freenode.net/#twitter-bootstrap">##twitter-bootstrap channel</a>.</li>
        <li>For help using Bootstrap, ask on <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap-3">StackOverflow using the tag <code>twitter-bootstrap-3</code></a>.</li>
        <li>Find inspiring examples of people building with Bootstrap at the <a href="http://expo.getbootstrap.com">Bootstrap Expo</a>.</li>
    </ul>
    <p>You can also follow <a href="https://twitter.com/twbootstrap">@twbootstrap on Twitter</a> for the latest gossip and awesome music videos.</p>
</div>

<div class="bs-docs-section">
    <h1 id="disable-responsive" class="page-header">Disabling responsiveness</h1>

    <p class="lead">Bootstrap automatically adapts your pages for various screen sizes.
        Here's how to disable this feature so your page works like in <a href="../examples/non-responsive/">this non-responsive example</a>.</p>

    <h3>Steps to disable page responsiveness</h3>
    <ol>
        <li>Omit the viewport <code>&lt;meta&gt;</code> mentioned in <a href="../css/#overview-mobile">the CSS docs</a></li>
        <li>Override the <code>width</code> on the <code>.container</code> for each grid tier with a single width, for example <code>width: 970px !important;</code> Be sure that this comes after the default Bootstrap CSS. You can optionally avoid the <code>!important</code> with media queries or some selector-fu.</li>
        <li>If using navbars, remove all navbar collapsing and expanding behavior.</li>
        <li>For grid layouts, use <code>.col-xs-*</code> classes in addition to, or in place of, the medium/large ones. Don't worry, the extra-small device grid scales to all resolutions.</li>
    </ol>
    <p>You'll still need Respond.js for IE8 (since our media queries are still there and need to be processed).
        This disables the "mobile site" aspects of Bootstrap.</p>

    <h3>Bootstrap template with responsiveness disabled</h3>
    <p>We've applied these steps to an example. Read its source code to see the specific changes implemented.</p>
    <p>
        <a href="../examples/non-responsive/" class="btn btn-primary">View non-responsive example</a>
    </p>
</div>


<!-- Cross link to new migration page -->
<div class="bs-callout bs-callout-info" id="migration">
    <h4>Migrating from v2.x to v3.x</h4>
    <p>Looking to migrate from an older version of Bootstrap to v3.x? Check out <a href="../migration">our migration guide</a>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="support" class="page-header">Browser and device support</h1>
    <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older browsers might display differently styled, though fully functional, renderings of certain components.</p>

    <h3 id="support-browsers">Supported browsers</h3>
    <p>Specifically, we support the <strong>latest versions</strong> of the following browsers and platforms. On Windows, <strong>we support Internet Explorer 8-11</strong>. More specific support information is provided below.</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td></td>
                <th>Chrome</th>
                <th>Firefox</th>
                <th>Internet Explorer</th>
                <th>Opera</th>
                <th>Safari</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Android</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-muted" rowspan="3" style="vertical-align: middle;">N/A</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
                <td class="text-muted">N/A</td>
            </tr>
            <tr>
                <th>iOS</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-muted">N/A</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th>Mac OS X</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th>Windows</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 7, though they are not officially supported.</p>
    <p>For a list of some of the browser bugs that Bootstrap has to grapple with, see our <a href="../browser-bugs/">Wall of browser bugs</a>.</p>

    <h3 id="support-ie8-ie9">Internet Explorer 8 and 9</h3>
    <p>Internet Explorer 8 and 9 are also supported, however, please be aware that some CSS3 properties and HTML5 elements are not fully supported by these browsers. In addition, <strong>Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond">Respond.js</a> to enable media query support.</strong></p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col" class="col-xs-4">Feature</th>
                <th scope="col" class="col-xs-4">Internet Explorer 8</th>
                <th scope="col" class="col-xs-4">Internet Explorer 9</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><code>border-radius</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>box-shadow</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>transform</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported, with <code>-ms</code> prefix</td>
            </tr>
            <tr>
                <th scope="row"><code>transition</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
            </tr>
            <tr>
                <th scope="row"><code>placeholder</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>

    <h3 id="support-ie8-respondjs">Internet Explorer 8 and Respond.js</h3>
    <p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>
    <h4 id="respond-js-x-domain">Respond.js and cross-domain CSS</h4>
    <p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#cdnx-domain-setup">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-file-proto">Respond.js and <code>file://</code></h4>
    <p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-import">Respond.js and <code>@import</code></h4>
    <p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>

    <h3 id="support-ie8-box-sizing">Internet Explorer 8 and box-sizing</h3>
    <p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. For that reason, as of v3.0.1, we no longer use <code>max-width</code> on <code>.container</code>s.</p>

    <h3 id="support-ie8-font-face">Internet Explorer 8 and @font-face</h3>
    <p>IE8 has some issues with <code>@font-face</code> when combined with <code>:before</code>. Bootstrap uses that combination with its Glyphicons. If a page is cached, and loaded without the mouse over the window (i.e. hit the refresh button or load something in an iframe) then the page gets rendered before the font loads. Hovering over the page (body) will show some of the icons and hovering over the remaining icons will show those as well. <a href="https://github.com/twbs/bootstrap/issues/13863">See issue #13863</a> for details.</p>

    <h3 id="support-ie-compatibility-modes">IE Compatibility modes</h3>
    <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code>&lt;meta&gt;</code> tag in your pages:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span></code></pre></div>
    <p>Confirm the document mode by opening the debugging tools: press <kbd>F12</kbd> and check the "Document Mode".</p>
    <p>This tag is included in all of Bootstrap's documentation and examples to ensure the best rendering possible in each supported version of Internet Explorer.</p>
    <p>See <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>

    <h3 id="support-ie10-width">Internet Explorer 10 in Windows 8 and Windows Phone 8</h3>
    <p>Internet Explorer 10 doesn't differentiate <strong>device width</strong> from <strong>viewport width</strong>, and thus doesn't properly apply the media queries in Bootstrap's CSS. Normally you'd just add a quick snippet of CSS to fix this:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span></code></pre></div>
    <p>However, this doesn't work for devices running Windows Phone 8 versions older than <a href="http://blogs.windows.com/windows_phone/b/wpdev/archive/2013/10/14/introducing-windows-phone-preview-for-developers.aspx">Update 3 (a.k.a. GDR3)</a>, as it causes such devices to show a mostly desktop view instead of narrow "phone" view. To address this, you'll need to <strong>include the following CSS and JavaScript to work around the bug</strong>.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@-webkit-viewport</span>   <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-moz-viewport</span>      <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-o-viewport</span>        <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@viewport</span>           <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span></code></pre></div>

    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-js" data-lang="js"><span class="k">if</span> <span class="p">(</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span><span class="p">.</span><span class="nx">match</span><span class="p">(</span><span class="sr">/IEMobile</span><span class="se">\/</span><span class="sr">10</span><span class="se">\.</span><span class="sr">0/</span><span class="p">))</span> <span class="p">{</span>
                <span class="kd">var</span> <span class="nx">msViewportStyle</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">'style'</span><span class="p">)</span>
                <span class="nx">msViewportStyle</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span>
                <span class="s1">'@-ms-viewport{width:auto!important}'</span>
                <span class="p">)</span>
                <span class="p">)</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'head'</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">msViewportStyle</span><span class="p">)</span>
                <span class="p">}</span></code></pre></div>
    <p>For more information and usage guidelines, read <a href="http://timkadlec.com/2013/01/windows-phone-8-and-device-width/">Windows Phone 8 and Device-Width</a>.</p>
    <p>As a heads up, we include this in all of Bootstrap's documentation and examples as a demonstration.</p>

    <h3 id="support-safari-percentages">Safari percent rounding</h3>
    <p>The rendering engine of versions of Safari prior to v7.1 for OS X and Safari for iOS v8.0 had some trouble with the number of decimal places used in our <code>.col-*-1</code> grid classes. So if you had 12 individual grid columns, you'd notice that they came up short compared to other rows of columns. Besides upgrading Safari/iOS, you have some options for workarounds:</p>
    <ul>
        <li>Add <code>.pull-right</code> to your last grid column to get the hard-right alignment</li>
        <li>Tweak your percentages manually to get the perfect rounding for Safari (more difficult than the first option)</li>
    </ul>
    <p>We'll keep an eye on this though and update our code if we have an easy solution.</p>

    <h3 id="support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</h3>
    <h4>Overflow and scrolling</h4>
    <p>Support for <code>overflow: hidden</code> on the <code>&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices' browsers, the <code>&lt;body&gt;</code> content will begin to scroll.</p>
    <h4>Virtual keyboards</h4>
    <p>Also, note that if you're using a fixed navbar or using inputs within a modal, iOS has a rendering bug that doesn't update the position of fixed elements when the virtual keyboard is triggered. A few workarounds for this include transforming your elements to <code>position: absolute</code> or invoking a timer on focus to try to correct the positioning manually. This is not handled by Bootstrap, so it is up to you to decide which solution is best for your application.</p>
    <h4>Navbar Dropdowns</h4>
    <p>The <code>.dropdown-backdrop</code> element isn't used on iOS in the nav because of the complexity of z-indexing. Thus, to close dropdowns in navbars, you must directly click the dropdown element (or any other element which will fire a click event in iOS).</p>

    <h3 id="support-browser-zooming">Browser zooming</h3>
    <p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>

    <h3 id="support-printing">Printing</h3>
    <p>Even in some modern browsers, printing can be quirky.</p>
    <p>In particular, as of Chrome v32 and regardless of margin settings, Chrome uses a viewport width significantly narrower than the physical paper size when resolving media queries while printing a webpage. This can result in Bootstrap's extra-small grid being unexpectedly activated when printing. <a href="https://github.com/twbs/bootstrap/issues/12078">See #12078 for some details.</a> Suggested workarounds:</p>
    <ul>
        <li>Embrace the extra-small grid and make sure your page looks acceptable under it.</li>
        <li>Customize the values of the <code>@screen-*</code> Less variables so that your printer paper is considered larger than extra-small.</li>
        <li>Add custom media queries to change the grid size breakpoints for print media only.</li>
    </ul>
    <p>Also, as of Safari v8.0, fixed-width <code>.container</code>s can cause Safari to use an unusually small font size when printing. See <a href="https://github.com/twbs/bootstrap/issues/14868">#14868</a> for more details. One potential workaround for this is adding the following CSS:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@media</span> <span class="n">print</span> <span class="p">{</span>
                <span class="nc">.container</span> <span class="p">{</span>
                <span class="nl">width</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="p">}</span></code></pre></div>

    <h3 id="support-android-stock-browser">Android stock browser</h3>
    <p>Out of the box, Android 4.1 (and even some newer releases apparently) ship with the Browser app as the default web browser of choice (as opposed to Chrome). Unfortunately, the Browser app has lots of bugs and inconsistencies with CSS in general.</p>
    <h4>Select menus</h4>
    <p>On <code>&lt;select&gt;</code> elements, the Android stock browser will not display the side controls if there is a <code>border-radius</code> and/or <code>border</code> applied. (See <a href="http://stackoverflow.com/questions/14744437/html-select-box-not-showing-drop-down-arrow-on-android-version-4-0-when-set-with">this StackOverflow question</a> for details.) Use the snippet of code below to remove the offending CSS and render the <code>&lt;select&gt;</code> as an unstyled element on the Android stock browser. The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span>
                <span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
                <span class="kd">var</span> <span class="nx">nua</span> <span class="o">=</span> <span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span>
                <span class="kd">var</span> <span class="nx">isAndroid</span> <span class="o">=</span> <span class="p">(</span><span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Mozilla/5.0'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Android '</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'AppleWebKit'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Chrome'</span><span class="p">)</span> <span class="o">===</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
                <span class="k">if</span> <span class="p">(</span><span class="nx">isAndroid</span><span class="p">)</span> <span class="p">{</span>
                <span class="nx">$</span><span class="p">(</span><span class="s1">'select.form-control'</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">'form-control'</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="s1">'width'</span><span class="p">,</span> <span class="s1">'100%'</span><span class="p">)</span>
                <span class="p">}</span>
                <span class="p">})</span>
                <span class="nt">&lt;/script&gt;</span></code></pre></div>
    <p>Want to see an example? <a href="http://jsbin.com/kuvoz/1">Check out this JS Bin demo.</a></p>

    <h3 id="support-validators">Validators</h3>
    <p>In order to provide the best possible experience to old and buggy browsers, Bootstrap uses <a href="http://browserhacks.com">CSS browser hacks</a> in several places to target special CSS to certain browser versions in order to work around bugs in the browsers themselves. These hacks understandably cause CSS validators to complain that they are invalid. In a couple places, we also use bleeding-edge CSS features that aren't yet fully standardized, but these are used purely for progressive enhancement.</p>
    <p>These validation warnings don't matter in practice since the non-hacky portion of our CSS does fully validate and the hacky portions don't interfere with the proper functioning of the non-hacky portion, hence why we deliberately ignore these particular warnings.</p>
    <p>Our HTML docs likewise have some trivial and inconsequential HTML validation warnings due to our inclusion of a workaround for <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">a certain Firefox bug</a>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="third-parties" class="page-header">Third party support</h1>
    <p class="lead">While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.</p>

    <h3 id="third-box-sizing">Box-sizing</h3>
    <p>Some third party software, including Google Maps and Google Custom Search Engine, conflict with Bootstrap due to <code>* { box-sizing: border-box; }</code>, a rule which makes it so <code>padding</code> does not affect the final computed width of an element. Learn more about <a href="http://css-tricks.com/box-sizing/">box model and sizing at CSS Tricks</a>.</p>
    <p>Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="cm">/* Box-sizing resets
 *
 * Reset individual elements or override regions to avoid conflicts due to
 * global box model settings of Bootstrap. Two options, individual overrides and
 * region resets, are available as plain CSS and uncompiled Less formats.
 */</span>

                <span class="cm">/* Option 1A: Override a single element's box model via CSS */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 1B: Override a single element's box model by using a Bootstrap Less mixin */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">)</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 2A: Reset an entire region via CSS */</span>
                <span class="nc">.reset-box-sizing</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 2B: Reset an entire region with a custom Less mixin */</span>
                <span class="nc">.reset-box-sizing</span> <span class="p">{</span>
                <span class="k">&amp;</span><span class="o">,</span>
                <span class="o">*,</span>
                <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
                <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">)</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="p">}</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="nc">.reset-box-sizing</span><span class="o">()</span><span class="p">;</span>
                <span class="p">}</span></code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="accessibility" class="page-header">Accessibility</h1>
    <p class="lead">Bootstrap follows common web standards and—with minimal extra effort—can be used to create sites that are accessible to those using <abbr title="Assistive Technology" class="initialism">AT</abbr>.</p>

    <h3>Skip navigation</h3>
    <p>If your navigation contains many links and comes before the main content in the DOM, add a <code>Skip to main content</code> link immediately after your opening <code>&lt;body&gt;</code> tag. <a href="http://a11yproject.com/posts/skip-nav-links/">(read why)</a></p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#content"</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span> <span class="na">id=</span><span class="s">"content"</span><span class="nt">&gt;</span>
                The main page content.
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/body&gt;</span></code></pre></div>

    <h3>Nested headings</h3>
    <p>When nesting headings (<code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code>), your primary document header should be an <code>&lt;h1&gt;</code>. Subsequent headings should make logical use of <code>&lt;h2&gt;</code> - <code>&lt;h6&gt;</code> such that screen readers can construct a table of contents for your pages.</p>
    <p>Learn more at <a href="http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/">HTML CodeSniffer</a> and <a href="http://accessibility.psu.edu/headings">Penn State's AccessAbility</a>.</p>

    <h3>Color contrast</h3>
    <p>Currently, some of the default color combinations available in Bootstrap (such as the various <a href="../css/#buttons">styled button</a> classes, some of the code highlighting colors used for <a href="../css/#code-block">basic code blocks</a>, the <code>.bg-primary</code> <a href="..css/#helper-classes-backgrounds">contextual background</a> helper class, and the default link color when used on a white background) have a low contrast ratio (below the <a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast">recommended ratio of 4.5:1</a>). This can cause problems to users with low vision or who are color blind. These default colors may need to be modified to increase their contrast and legibility.</p>

    <h3>Additional resources</h3>
    <ul>
        <li><a href="https://github.com/squizlabs/HTML_CodeSniffer">"HTML Codesniffer" bookmarklet for identifying accessibility issues</a></li>
        <li><a href="https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en">Chrome's Accessibility Developer Tools extension</a></li>
        <li><a href="http://www.paciellogroup.com/resources/contrastanalyser/">Colour Contrast Analyser</a>
        </li><li><a href="http://a11yproject.com/">The A11Y Project</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Accessibility">MDN accessibility documentation</a></li>
    </ul>
</div>

<div class="bs-docs-section">
    <h1 id="license-faqs" class="page-header">License FAQs</h1>
    <p class="lead">Bootstrap is released under the MIT license and is copyright 2014 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

    <h4>It requires you to:</h4>
    <ul>
        <li>Include the license and copyright notice in your works</li>
    </ul>

    <h4>It permits you to:</h4>
    <ul>
        <li>Freely download and use Bootstrap, in whole or in part, for personal, private, company internal, or commercial purposes</li>
        <li>Use Bootstrap in packages or distributions that you create</li>
        <li>Modify the source code</li>
        <li>Grant a sublicense to modify and distribute Bootstrap to third parties not included in the license</li>
    </ul>

    <h4>It forbids you to:</h4>
    <ul>
        <li>Hold the authors and license owners liable for damages as Bootstrap is provided without warranty</li>
        <li>Hold the creators or copyright holders of Bootstrap liable</li>
        <li>Redistribute any piece of Bootstrap without proper attribution</li>
        <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
        <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
    </ul>

    <h4>It does not require you to:</h4>
    <ul>
        <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
        <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
    </ul>

    <p>The full Bootstrap license is located <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE">in the project repository</a> for more information.</p>
</div>

<div class="bs-docs-section">
    <h1 id="translations" class="page-header">Translations</h1>

    <p class="lead">Community members have translated Bootstrap's documentation into various languages. None are officially supported and they may not always be up to date.</p>
    <ul>

        <li><a href="http://v3.bootcss.com/" hreflang="zh">Bootstrap 中文文档 (Chinese)</a></li>

        <li><a href="http://getbootstrap.dk/" hreflang="da">Bootstrap på Dansk (Danish)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/fr" hreflang="fr">Bootstrap en Français (French)</a></li>

        <li><a href="http://holdirbootstrap.de/" hreflang="de">Bootstrap auf Deutsch (German)</a></li>

        <li><a href="http://www.hackerstribe.com/guide/IT-bootstrap-3.1.1/" hreflang="it">Bootstrap in Italiano (Italian)</a></li>

        <li><a href="http://bootstrapk.com/BS3/" hreflang="ko">Bootstrap 한국어 (Korean)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/ru" hreflang="ru">Bootstrap по-русски (Russian)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/es" hreflang="es">Bootstrap en Español (Spanish)</a></li>

        <li><a href="http://twbs.docs.org.ua" hreflang="uk">Bootstrap українською (Ukrainian)</a></li>

    </ul>
    <p><strong class="text-danger">We don't help organize or host translations, we just link to them.</strong></p>
    <p>Finished a new or better translation? Open a pull request to add it to our list.</p>
</div>


</div>

<div class="col-md-3">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav bs-docs-sidenav">

            <li>
                <a href="#download">Download</a>
            </li>
            <li>
                <a href="#whats-included">What's included</a>
                <ul class="nav">
                    <li><a href="#whats-included-precompiled">Precompiled</a></li>
                    <li><a href="#whats-included-source">Source code</a></li>
                </ul>
            </li>
            <li>
                <a href="#grunt">Compiling CSS and JavaScript</a>
                <ul class="nav">
                    <li><a href="#grunt-installing">Installing Grunt</a></li>
                    <li><a href="#grunt-commands">Available Grunt commands</a></li>
                    <li><a href="#grunt-troubleshooting">Troubleshooting</a></li>
                </ul>
            </li>
            <li>
                <a href="#template">Basic template</a>
            </li>
            <li>
                <a href="#examples">Examples</a>
                <ul class="nav">
                    <li><a href="#examples-framework">Using the framework</a></li>
                    <li><a href="#examples-navbars">Navbars in action</a></li>
                    <li><a href="#examples-custom">Custom components</a></li>
                    <li><a href="#examples-experiments">Experiments</a></li>
                </ul>
            </li>
            <li>
                <a href="#tools">Tools</a>
                <ul class="nav">
                    <li><a href="#tools-bootlint">Bootlint</a></li>
                </ul>
            </li>
            <li>
                <a href="#community">Community</a>
            </li>
            <li>
                <a href="#disable-responsive">Disabling responsiveness</a>
            </li>
            <li>
                <a href="#migration">Migrating from 2.x to 3.0</a>
            </li>
            <li>
                <a href="#support">Browser and device support</a>
                <ul class="nav">
                    <li><a href="#support-browsers">Supported browsers</a></li>
                    <li><a href="#support-ie8-ie9">Internet Explorer 8-9</a></li>
                    <li><a href="#support-ie8-respondjs">IE8 and Respond.js</a></li>
                    <li><a href="#support-ie8-box-sizing">IE8 and box-sizing</a></li>
                    <li><a href="#support-ie8-font-face">IE8 and @font-face</a></li>
                    <li><a href="#support-ie-compatibility-modes">IE Compatibility modes</a></li>
                    <li><a href="#support-ie10-width">IE10 and Windows (Phone) 8</a></li>
                    <li><a href="#support-safari-percentages">Safari percent rounding</a></li>
                    <li><a href="#support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</a></li>
                    <li><a href="#support-browser-zooming">Browser zooming</a></li>
                    <li><a href="#support-printing">Printing</a></li>
                    <li><a href="#support-android-stock-browser">Android stock browser</a></li>
                    <li><a href="#support-validators">Validators</a></li>
                </ul>
            </li>
            <li>
                <a href="#third-parties">Third party support</a>
            </li>
            <li>
                <a href="#accessibility">Accessibility</a>
            </li>
            <li>
                <a href="#license-faqs">License FAQs</a>
            </li>
            <li>
                <a href="#translations">Translations</a>
            </li>


        </ul>
        <a class="back-to-top" href="#top">
            Back to top
        </a>

    </div>
</div>

</div>
</div><div class="container bs-docs-container">

<div class="row">
<div class="col-md-9" role="main">
<div class="bs-docs-section">
    <h1 id="download" class="page-header">Download</h1>

    <p class="lead">Bootstrap (currently v3.3.1) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

    <div class="row bs-downloads">
        <div class="col-sm-4">
            <h3 id="download-bootstrap">Bootstrap</h3>
            <p>Compiled and minified CSS, JavaScript, and fonts. No docs or original source files are included.</p>
            <p>
                <a href="https://github.com/twbs/bootstrap/releases/download/v3.3.1/bootstrap-3.3.1-dist.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download compiled');">Download Bootstrap</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h3 id="download-source">Source code</h3>
            <p>Source Less, JavaScript, and font files, along with our docs. <strong>Requires a Less compiler and <a href="#grunt">some setup.</a></strong></p>
            <p>
                <a href="https://github.com/twbs/bootstrap/archive/v3.3.1.zip" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download source');">Download source</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h3 id="download-sass">Sass</h3>
            <p><a href="https://github.com/twbs/bootstrap-sass">Bootstrap ported from Less to Sass</a> for easy inclusion in Rails, Compass, or Sass-only projects.</p>
            <p>
                <a href="https://github.com/twbs/bootstrap-sass/archive/v3.3.1.tar.gz" class="btn btn-lg btn-outline" role="button" onclick="ga('send', 'event', 'Getting started', 'Download', 'Download Sass');">Download Sass</a>
            </p>
        </div>
    </div>

    <h3 id="download-cdn">Bootstrap CDN</h3>
    <p>The folks over at <a href="http://www.maxcdn.com/">MaxCDN</a> graciously provide CDN support for Bootstrap's CSS and JavaScript. Just use these <a href="http://www.bootstrapcdn.com/">Bootstrap CDN</a> links.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Latest compiled and minified CSS --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Optional theme --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- Latest compiled and minified JavaScript --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></div>

    <h3 id="download-bower">Install with Bower</h3>
    <p>Install and manage Bootstrap's Less, CSS, JavaScript, and fonts using <a href="http://bower.io">Bower</a>.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash"><span class="gp">$ </span>bower install bootstrap</code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="whats-included" class="page-header">What's included</h1>

    <p class="lead">Bootstrap is downloadable in two forms, within which you'll find the following directories and files, logically grouping common resources and providing both compiled and minified variations.</p>

    <div class="bs-callout bs-callout-warning" id="jquery-required">
        <h4>jQuery required</h4>
        <p>Please note that <strong>all JavaScript plugins require jQuery</strong> to be included, as shown in the <a href="#template">starter template</a>. <a href="https://github.com/twbs/bootstrap/blob/v3.3.1/bower.json">Consult our <code>bower.json</code></a> to see which versions of jQuery are supported.</p>
    </div>

    <h2 id="whats-included-precompiled">Precompiled Bootstrap</h2>
    <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
    <!-- NOTE: This info is intentionally duplicated in the README.
    Copy any changes made here over to the README too. -->
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash">bootstrap/
                ├── css/
                │   ├── bootstrap.css
                │   ├── bootstrap.min.css
                │   ├── bootstrap-theme.css
                │   └── bootstrap-theme.min.css
                ├── js/
                │   ├── bootstrap.js
                │   └── bootstrap.min.js
                └── fonts/
                ├── glyphicons-halflings-regular.eot
                ├── glyphicons-halflings-regular.svg
                ├── glyphicons-halflings-regular.ttf
                └── glyphicons-halflings-regular.woff</code></pre></div>

    <p>This is the most basic form of Bootstrap: precompiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). Fonts from Glyphicons are included, as is the optional Bootstrap theme.</p>

    <h2 id="whats-included-source">Bootstrap source code</h2>
    <p>The Bootstrap source code download includes the precompiled CSS, JavaScript, and font assets, along with source Less, JavaScript, and documentation. More specifically, it includes the following and more:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-bash" data-lang="bash">bootstrap/
                ├── less/
                ├── js/
                ├── fonts/
                ├── dist/
                │   ├── css/
                │   ├── js/
                │   └── fonts/
                └── docs/
                └── examples/</code></pre></div>
    <p>The <code>less/</code>, <code>js/</code>, and <code>fonts/</code> are the source code for our CSS, JS, and icon fonts (respectively). The <code>dist/</code> folder includes everything listed in the precompiled download section above. The <code>docs/</code> folder includes the source code for our documentation, and <code>examples/</code> of Bootstrap usage. Beyond that, any other included file provides support for packages, license information, and development.</p>
</div>

<div class="bs-docs-section">
    <h1 id="grunt" class="page-header">Compiling CSS and JavaScript</h1>

    <p class="lead">Bootstrap uses <a href="http://gruntjs.com">Grunt</a> for its build system, with convenient methods for working with the framework. It's how we compile our code, run tests, and more.</p>

    <h2 id="grunt-installing">Installing Grunt</h2>
    <p>To install Grunt, you must <strong>first <a href="http://nodejs.org/download/">download and install node.js</a></strong> (which includes npm). npm stands for <a href="http://npmjs.org/">node packaged modules</a> and is a way to manage development dependencies through node.js.</p>

    Then, from the command line:
    <ol>
        <li>Install <code>grunt-cli</code> globally with <code>npm install -g grunt-cli</code>.</li>
        <li>Navigate to the root <code>/bootstrap/</code> directory, then run <code>npm install</code>. npm will look at the <a href="https://github.com/twbs/bootstrap/blob/master/package.json"><code>package.json</code></a> file and automatically install the necessary local dependencies listed there.</li>
    </ol>

    <p>When completed, you'll be able to run the various Grunt commands provided from the command line.</p>

    <h2 id="grunt-commands">Available Grunt commands</h2>
    <h3><code>grunt dist</code> (Just compile CSS and JavaScript)</h3>
    <p>Regenerates the <code>/dist/</code> directory with compiled and minified CSS and JavaScript files. As a Bootstrap user, this is normally the command you want.</p>

    <h3><code>grunt watch</code> (Watch)</h3>
    <p>Watches the Less source files and automatically recompiles them to CSS whenever you save a change.</p>

    <h3><code>grunt test</code> (Run tests)</h3>
    <p>Runs <a href="http://jshint.com">JSHint</a> and runs the <a href="http://qunitjs.com">QUnit</a> tests headlessly in <a href="http://phantomjs.org">PhantomJS</a>.</p>

    <h3><code>grunt docs</code> (Build &amp; test the docs assets)</h3>
    <p>Builds and tests CSS, JavaScript, and other assets which are used when running the documentation locally via <code>jekyll serve</code>.</p>

    <h3><code>grunt</code> (Build absolutely everything and run tests)</h3>
    <p>Compiles and minifies CSS and JavaScript, builds the documentation website, runs the HTML5 validator against the docs, regenerates the Customizer assets, and more. Requires <a href="http://jekyllrb.com/docs/installation/">Jekyll</a>. Usually only necessary if you're hacking on Bootstrap itself.</p>

    <h2 id="grunt-troubleshooting">Troubleshooting</h2>
    <p>Should you encounter problems with installing dependencies or running Grunt commands, first delete the <code>/node_modules/</code> directory generated by npm. Then, rerun <code>npm install</code>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="template" class="page-header">Basic template</h1>

    <p class="lead">Start with this basic HTML template, or modify <a href="#examples">these examples</a>. We hope you'll customize our templates and examples, adapting them to suit your needs.</p>

    <p>Copy the HTML below to begin working with a minimal Bootstrap document.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
                <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;head&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;title&gt;</span>Bootstrap 101 Template<span class="nt">&lt;/title&gt;</span>

                <span class="c">&lt;!-- Bootstrap --&gt;</span>
                <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"css/bootstrap.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --&gt;</span>
                <span class="c">&lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;</span>
    <span class="c">&lt;!--[if lt IE 9]&gt;
      &lt;script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"&gt;&lt;/script&gt;
      &lt;script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"&gt;&lt;/script&gt;
    &lt;![endif]--&gt;</span>
                <span class="nt">&lt;/head&gt;</span>
                <span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

                <span class="c">&lt;!-- jQuery (necessary for Bootstrap's JavaScript plugins) --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="c">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span>
                <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"js/bootstrap.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
                <span class="nt">&lt;/body&gt;</span>
                <span class="nt">&lt;/html&gt;</span></code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="examples" class="page-header">Examples</h1>

    <p class="lead">Build on the basic template above with Bootstrap's many components. We encourage you to customize and adapt Bootstrap to suit your individual project's needs.</p>

    <h3 id="examples-framework">Using the framework</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/starter-template/">
                <img src="../examples/screenshots/starter-template.jpg" alt="">
            </a>
            <h4>Starter template</h4>
            <p>Nothing but the basics: compiled CSS and JavaScript along with a container.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/theme/">
                <img src="../examples/screenshots/theme.jpg" alt="">
            </a>
            <h4>Bootstrap theme</h4>
            <p>Load the optional Bootstrap theme for a visually enhanced experience.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/grid/">
                <img src="../examples/screenshots/grid.jpg" alt="">
            </a>
            <h4>Grids</h4>
            <p>Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/jumbotron/">
                <img src="../examples/screenshots/jumbotron.jpg" alt="">
            </a>
            <h4>Jumbotron</h4>
            <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/jumbotron-narrow/">
                <img src="../examples/screenshots/jumbotron-narrow.jpg" alt="">
            </a>
            <h4>Narrow jumbotron</h4>
            <p>Build a more custom page by narrowing the default container and jumbotron.</p>
        </div>
    </div>

    <h3 id="examples-navbars">Navbars in action</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar/">
                <img src="../examples/screenshots/navbar.jpg" alt="">
            </a>
            <h4>Navbar</h4>
            <p>Super basic template that includes the navbar along with some additional content.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar-static-top/">
                <img src="../examples/screenshots/navbar-static.jpg" alt="">
            </a>
            <h4>Static top navbar</h4>
            <p>Super basic template with a static top navbar along with some additional content.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/navbar-fixed-top/">
                <img src="../examples/screenshots/navbar-fixed.jpg" alt="">
            </a>
            <h4>Fixed navbar</h4>
            <p>Super basic template with a fixed top navbar along with some additional content.</p>
        </div>
    </div>

    <h3 id="examples-custom">Custom components</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/cover/">
                <img src="../examples/screenshots/cover.jpg" alt="">
            </a>
            <h4>Cover</h4>
            <p>A one-page template for building simple and beautiful home pages.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/carousel/">
                <img src="../examples/screenshots/carousel.jpg" alt="">
            </a>
            <h4>Carousel</h4>
            <p>Customize the navbar and carousel, then add some new components.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/blog/">
                <img src="../examples/screenshots/blog.jpg" alt="">
            </a>
            <h4>Blog</h4>
            <p>Simple two-column blog layout with custom navigation, header, and type.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/dashboard/">
                <img src="../examples/screenshots/dashboard.jpg" alt="">
            </a>
            <h4>Dashboard</h4>
            <p>Basic structure for a admin dashboard with fixed sidebar and navbar.</p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/signin/">
                <img src="../examples/screenshots/sign-in.jpg" alt="">
            </a>
            <h4>Sign-in page</h4>
            <p>Custom form layout and design for a simple sign in form.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/justified-nav/">
                <img src="../examples/screenshots/justified-nav.jpg" alt="">
            </a>
            <h4>Justified nav</h4>
            <p>Create a custom navbar with justified links. Heads up! <a href="../components/#nav-justified">Not too Safari friendly.</a></p>
        </div>
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/sticky-footer/">
                <img src="../examples/screenshots/sticky-footer.jpg" alt="">
            </a>
            <h4>Sticky footer</h4>
            <p>Attach a footer to the bottom of the viewport when the content is shorter than it.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/sticky-footer-navbar/">
                <img src="../examples/screenshots/sticky-footer-navbar.jpg" alt="">
            </a>
            <h4>Sticky footer with navbar</h4>
            <p>Attach a footer to the bottom of the viewport with a fixed navbar at the top.</p>
        </div>
    </div>

    <h3 id="examples-experiments">Experiments</h3>
    <div class="row bs-examples">
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/non-responsive/">
                <img src="../examples/screenshots/non-responsive.jpg" alt="">
            </a>
            <h4>Non-responsive Bootstrap</h4>
            <p>Easily disable the responsiveness of Bootstrap <a href="#disable-responsive">per our docs</a>.</p>
        </div>
        <div class="col-xs-6 col-md-4">
            <a class="thumbnail" href="../examples/offcanvas/">
                <img src="../examples/screenshots/offcanvas.jpg" alt="">
            </a>
            <h4>Offcanvas</h4>
            <p>Build a toggleable off-canvas navigation menu for use with Bootstrap.</p>
        </div>
    </div>
</div>

<div class="bs-docs-section">
    <h1 id="tools" class="page-header">Tools</h1>

    <h2 id="tools-bootlint">Bootlint</h2>
    <p><strong><a href="https://github.com/twbs/bootlint">Bootlint</a></strong> is the official Bootstrap HTML <a href="http://en.wikipedia.org/wiki/Lint_(software)">linter</a> tool. It automatically checks for several common HTML mistakes in webpages that are using Bootstrap in a fairly "vanilla" way. Vanilla Bootstrap's components/widgets require their parts of the DOM to conform to certain structures. Bootlint checks that instances of Bootstrap components have correctly-structured HTML. Consider adding Bootlint to your Bootstrap web development toolchain so that none of the common mistakes slow down your project's development.</p>
</div>

<div class="bs-docs-section">
    <h1 id="community" class="page-header">Community</h1>

    <p class="lead">Stay up to date on the development of Bootstrap and reach out to the community with these helpful resources.</p>
    <ul>
        <li>Read and subscribe to <a href="http://blog.getbootstrap.com/">The Official Bootstrap Blog</a>.</li>
        <li>Chat with fellow Bootstrappers using IRC in the <code>irc.freenode.net</code> server, in the <a href="irc://irc.freenode.net/#twitter-bootstrap">##twitter-bootstrap channel</a>.</li>
        <li>For help using Bootstrap, ask on <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap-3">StackOverflow using the tag <code>twitter-bootstrap-3</code></a>.</li>
        <li>Find inspiring examples of people building with Bootstrap at the <a href="http://expo.getbootstrap.com">Bootstrap Expo</a>.</li>
    </ul>
    <p>You can also follow <a href="https://twitter.com/twbootstrap">@twbootstrap on Twitter</a> for the latest gossip and awesome music videos.</p>
</div>

<div class="bs-docs-section">
    <h1 id="disable-responsive" class="page-header">Disabling responsiveness</h1>

    <p class="lead">Bootstrap automatically adapts your pages for various screen sizes.
        Here's how to disable this feature so your page works like in <a href="../examples/non-responsive/">this non-responsive example</a>.</p>

    <h3>Steps to disable page responsiveness</h3>
    <ol>
        <li>Omit the viewport <code>&lt;meta&gt;</code> mentioned in <a href="../css/#overview-mobile">the CSS docs</a></li>
        <li>Override the <code>width</code> on the <code>.container</code> for each grid tier with a single width, for example <code>width: 970px !important;</code> Be sure that this comes after the default Bootstrap CSS. You can optionally avoid the <code>!important</code> with media queries or some selector-fu.</li>
        <li>If using navbars, remove all navbar collapsing and expanding behavior.</li>
        <li>For grid layouts, use <code>.col-xs-*</code> classes in addition to, or in place of, the medium/large ones. Don't worry, the extra-small device grid scales to all resolutions.</li>
    </ol>
    <p>You'll still need Respond.js for IE8 (since our media queries are still there and need to be processed).
        This disables the "mobile site" aspects of Bootstrap.</p>

    <h3>Bootstrap template with responsiveness disabled</h3>
    <p>We've applied these steps to an example. Read its source code to see the specific changes implemented.</p>
    <p>
        <a href="../examples/non-responsive/" class="btn btn-primary">View non-responsive example</a>
    </p>
</div>


<!-- Cross link to new migration page -->
<div class="bs-callout bs-callout-info" id="migration">
    <h4>Migrating from v2.x to v3.x</h4>
    <p>Looking to migrate from an older version of Bootstrap to v3.x? Check out <a href="../migration">our migration guide</a>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="support" class="page-header">Browser and device support</h1>
    <p class="lead">Bootstrap is built to work best in the latest desktop and mobile browsers, meaning older browsers might display differently styled, though fully functional, renderings of certain components.</p>

    <h3 id="support-browsers">Supported browsers</h3>
    <p>Specifically, we support the <strong>latest versions</strong> of the following browsers and platforms. On Windows, <strong>we support Internet Explorer 8-11</strong>. More specific support information is provided below.</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <td></td>
                <th>Chrome</th>
                <th>Firefox</th>
                <th>Internet Explorer</th>
                <th>Opera</th>
                <th>Safari</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Android</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-muted" rowspan="3" style="vertical-align: middle;">N/A</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
                <td class="text-muted">N/A</td>
            </tr>
            <tr>
                <th>iOS</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-muted">N/A</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th>Mac OS X</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th>Windows</th>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 7, though they are not officially supported.</p>
    <p>For a list of some of the browser bugs that Bootstrap has to grapple with, see our <a href="../browser-bugs/">Wall of browser bugs</a>.</p>

    <h3 id="support-ie8-ie9">Internet Explorer 8 and 9</h3>
    <p>Internet Explorer 8 and 9 are also supported, however, please be aware that some CSS3 properties and HTML5 elements are not fully supported by these browsers. In addition, <strong>Internet Explorer 8 requires the use of <a href="https://github.com/scottjehl/Respond">Respond.js</a> to enable media query support.</strong></p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col" class="col-xs-4">Feature</th>
                <th scope="col" class="col-xs-4">Internet Explorer 8</th>
                <th scope="col" class="col-xs-4">Internet Explorer 9</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><code>border-radius</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>box-shadow</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
            </tr>
            <tr>
                <th scope="row"><code>transform</code></th>
                <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
                <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported, with <code>-ms</code> prefix</td>
            </tr>
            <tr>
                <th scope="row"><code>transition</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
            </tr>
            <tr>
                <th scope="row"><code>placeholder</code></th>
                <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p>Visit <a href="http://caniuse.com/">Can I use...</a> for details on browser support of CSS3 and HTML5 features.</p>

    <h3 id="support-ie8-respondjs">Internet Explorer 8 and Respond.js</h3>
    <p>Beware of the following caveats when using Respond.js in your development and production environments for Internet Explorer 8.</p>
    <h4 id="respond-js-x-domain">Respond.js and cross-domain CSS</h4>
    <p>Using Respond.js with CSS hosted on a different (sub)domain (for example, on a CDN) requires some additional setup. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#cdnx-domain-setup">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-file-proto">Respond.js and <code>file://</code></h4>
    <p>Due to browser security rules, Respond.js doesn't work with pages viewed via the <code>file://</code> protocol (like when opening a local HTML file). To test responsive features in IE8, view your pages over HTTP(S). <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>
    <h4 id="respond-import">Respond.js and <code>@import</code></h4>
    <p>Respond.js doesn't work with CSS that's referenced via <code>@import</code>. In particular, some Drupal configurations are known to use <code>@import</code>. <a href="https://github.com/scottjehl/Respond/blob/master/README.md#support--caveats">See the Respond.js docs</a> for details.</p>

    <h3 id="support-ie8-box-sizing">Internet Explorer 8 and box-sizing</h3>
    <p>IE8 does not fully support <code>box-sizing: border-box;</code> when combined with <code>min-width</code>, <code>max-width</code>, <code>min-height</code>, or <code>max-height</code>. For that reason, as of v3.0.1, we no longer use <code>max-width</code> on <code>.container</code>s.</p>

    <h3 id="support-ie8-font-face">Internet Explorer 8 and @font-face</h3>
    <p>IE8 has some issues with <code>@font-face</code> when combined with <code>:before</code>. Bootstrap uses that combination with its Glyphicons. If a page is cached, and loaded without the mouse over the window (i.e. hit the refresh button or load something in an iframe) then the page gets rendered before the font loads. Hovering over the page (body) will show some of the icons and hovering over the remaining icons will show those as well. <a href="https://github.com/twbs/bootstrap/issues/13863">See issue #13863</a> for details.</p>

    <h3 id="support-ie-compatibility-modes">IE Compatibility modes</h3>
    <p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you're using the latest rendering mode for IE, consider including the appropriate <code>&lt;meta&gt;</code> tag in your pages:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span></code></pre></div>
    <p>Confirm the document mode by opening the debugging tools: press <kbd>F12</kbd> and check the "Document Mode".</p>
    <p>This tag is included in all of Bootstrap's documentation and examples to ensure the best rendering possible in each supported version of Internet Explorer.</p>
    <p>See <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>

    <h3 id="support-ie10-width">Internet Explorer 10 in Windows 8 and Windows Phone 8</h3>
    <p>Internet Explorer 10 doesn't differentiate <strong>device width</strong> from <strong>viewport width</strong>, and thus doesn't properly apply the media queries in Bootstrap's CSS. Normally you'd just add a quick snippet of CSS to fix this:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span></code></pre></div>
    <p>However, this doesn't work for devices running Windows Phone 8 versions older than <a href="http://blogs.windows.com/windows_phone/b/wpdev/archive/2013/10/14/introducing-windows-phone-preview-for-developers.aspx">Update 3 (a.k.a. GDR3)</a>, as it causes such devices to show a mostly desktop view instead of narrow "phone" view. To address this, you'll need to <strong>include the following CSS and JavaScript to work around the bug</strong>.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@-webkit-viewport</span>   <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-moz-viewport</span>      <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-ms-viewport</span>       <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@-o-viewport</span>        <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span>
                <span class="k">@viewport</span>           <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="n">device-width</span><span class="p">;</span> <span class="p">}</span></code></pre></div>

    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-js" data-lang="js"><span class="k">if</span> <span class="p">(</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span><span class="p">.</span><span class="nx">match</span><span class="p">(</span><span class="sr">/IEMobile</span><span class="se">\/</span><span class="sr">10</span><span class="se">\.</span><span class="sr">0/</span><span class="p">))</span> <span class="p">{</span>
                <span class="kd">var</span> <span class="nx">msViewportStyle</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">'style'</span><span class="p">)</span>
                <span class="nx">msViewportStyle</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span>
                <span class="s1">'@-ms-viewport{width:auto!important}'</span>
                <span class="p">)</span>
                <span class="p">)</span>
                <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'head'</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">msViewportStyle</span><span class="p">)</span>
                <span class="p">}</span></code></pre></div>
    <p>For more information and usage guidelines, read <a href="http://timkadlec.com/2013/01/windows-phone-8-and-device-width/">Windows Phone 8 and Device-Width</a>.</p>
    <p>As a heads up, we include this in all of Bootstrap's documentation and examples as a demonstration.</p>

    <h3 id="support-safari-percentages">Safari percent rounding</h3>
    <p>The rendering engine of versions of Safari prior to v7.1 for OS X and Safari for iOS v8.0 had some trouble with the number of decimal places used in our <code>.col-*-1</code> grid classes. So if you had 12 individual grid columns, you'd notice that they came up short compared to other rows of columns. Besides upgrading Safari/iOS, you have some options for workarounds:</p>
    <ul>
        <li>Add <code>.pull-right</code> to your last grid column to get the hard-right alignment</li>
        <li>Tweak your percentages manually to get the perfect rounding for Safari (more difficult than the first option)</li>
    </ul>
    <p>We'll keep an eye on this though and update our code if we have an easy solution.</p>

    <h3 id="support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</h3>
    <h4>Overflow and scrolling</h4>
    <p>Support for <code>overflow: hidden</code> on the <code>&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices' browsers, the <code>&lt;body&gt;</code> content will begin to scroll.</p>
    <h4>Virtual keyboards</h4>
    <p>Also, note that if you're using a fixed navbar or using inputs within a modal, iOS has a rendering bug that doesn't update the position of fixed elements when the virtual keyboard is triggered. A few workarounds for this include transforming your elements to <code>position: absolute</code> or invoking a timer on focus to try to correct the positioning manually. This is not handled by Bootstrap, so it is up to you to decide which solution is best for your application.</p>
    <h4>Navbar Dropdowns</h4>
    <p>The <code>.dropdown-backdrop</code> element isn't used on iOS in the nav because of the complexity of z-indexing. Thus, to close dropdowns in navbars, you must directly click the dropdown element (or any other element which will fire a click event in iOS).</p>

    <h3 id="support-browser-zooming">Browser zooming</h3>
    <p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>

    <h3 id="support-printing">Printing</h3>
    <p>Even in some modern browsers, printing can be quirky.</p>
    <p>In particular, as of Chrome v32 and regardless of margin settings, Chrome uses a viewport width significantly narrower than the physical paper size when resolving media queries while printing a webpage. This can result in Bootstrap's extra-small grid being unexpectedly activated when printing. <a href="https://github.com/twbs/bootstrap/issues/12078">See #12078 for some details.</a> Suggested workarounds:</p>
    <ul>
        <li>Embrace the extra-small grid and make sure your page looks acceptable under it.</li>
        <li>Customize the values of the <code>@screen-*</code> Less variables so that your printer paper is considered larger than extra-small.</li>
        <li>Add custom media queries to change the grid size breakpoints for print media only.</li>
    </ul>
    <p>Also, as of Safari v8.0, fixed-width <code>.container</code>s can cause Safari to use an unusually small font size when printing. See <a href="https://github.com/twbs/bootstrap/issues/14868">#14868</a> for more details. One potential workaround for this is adding the following CSS:</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@media</span> <span class="n">print</span> <span class="p">{</span>
                <span class="nc">.container</span> <span class="p">{</span>
                <span class="nl">width</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="p">}</span></code></pre></div>

    <h3 id="support-android-stock-browser">Android stock browser</h3>
    <p>Out of the box, Android 4.1 (and even some newer releases apparently) ship with the Browser app as the default web browser of choice (as opposed to Chrome). Unfortunately, the Browser app has lots of bugs and inconsistencies with CSS in general.</p>
    <h4>Select menus</h4>
    <p>On <code>&lt;select&gt;</code> elements, the Android stock browser will not display the side controls if there is a <code>border-radius</code> and/or <code>border</code> applied. (See <a href="http://stackoverflow.com/questions/14744437/html-select-box-not-showing-drop-down-arrow-on-android-version-4-0-when-set-with">this StackOverflow question</a> for details.) Use the snippet of code below to remove the offending CSS and render the <code>&lt;select&gt;</code> as an unstyled element on the Android stock browser. The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers.</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span>
                <span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
                <span class="kd">var</span> <span class="nx">nua</span> <span class="o">=</span> <span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span>
                <span class="kd">var</span> <span class="nx">isAndroid</span> <span class="o">=</span> <span class="p">(</span><span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Mozilla/5.0'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Android '</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'AppleWebKit'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Chrome'</span><span class="p">)</span> <span class="o">===</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
                <span class="k">if</span> <span class="p">(</span><span class="nx">isAndroid</span><span class="p">)</span> <span class="p">{</span>
                <span class="nx">$</span><span class="p">(</span><span class="s1">'select.form-control'</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">'form-control'</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="s1">'width'</span><span class="p">,</span> <span class="s1">'100%'</span><span class="p">)</span>
                <span class="p">}</span>
                <span class="p">})</span>
                <span class="nt">&lt;/script&gt;</span></code></pre></div>
    <p>Want to see an example? <a href="http://jsbin.com/kuvoz/1">Check out this JS Bin demo.</a></p>

    <h3 id="support-validators">Validators</h3>
    <p>In order to provide the best possible experience to old and buggy browsers, Bootstrap uses <a href="http://browserhacks.com">CSS browser hacks</a> in several places to target special CSS to certain browser versions in order to work around bugs in the browsers themselves. These hacks understandably cause CSS validators to complain that they are invalid. In a couple places, we also use bleeding-edge CSS features that aren't yet fully standardized, but these are used purely for progressive enhancement.</p>
    <p>These validation warnings don't matter in practice since the non-hacky portion of our CSS does fully validate and the hacky portions don't interfere with the proper functioning of the non-hacky portion, hence why we deliberately ignore these particular warnings.</p>
    <p>Our HTML docs likewise have some trivial and inconsequential HTML validation warnings due to our inclusion of a workaround for <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">a certain Firefox bug</a>.</p>
</div>

<div class="bs-docs-section">
    <h1 id="third-parties" class="page-header">Third party support</h1>
    <p class="lead">While we don't officially support any third party plugins or add-ons, we do offer some useful advice to help avoid potential issues in your projects.</p>

    <h3 id="third-box-sizing">Box-sizing</h3>
    <p>Some third party software, including Google Maps and Google Custom Search Engine, conflict with Bootstrap due to <code>* { box-sizing: border-box; }</code>, a rule which makes it so <code>padding</code> does not affect the final computed width of an element. Learn more about <a href="http://css-tricks.com/box-sizing/">box model and sizing at CSS Tricks</a>.</p>
    <p>Depending on the context, you may override as-needed (Option 1) or reset the box-sizing for entire regions (Option 2).</p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="cm">/* Box-sizing resets
 *
 * Reset individual elements or override regions to avoid conflicts due to
 * global box model settings of Bootstrap. Two options, individual overrides and
 * region resets, are available as plain CSS and uncompiled Less formats.
 */</span>

                <span class="cm">/* Option 1A: Override a single element's box model via CSS */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 1B: Override a single element's box model by using a Bootstrap Less mixin */</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">)</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 2A: Reset an entire region via CSS */</span>
                <span class="nc">.reset-box-sizing</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
                <span class="nc">.reset-box-sizing</span> <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="na">-webkit-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="na">-moz-box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="nl">box-sizing</span><span class="p">:</span> <span class="n">content-box</span><span class="p">;</span>
                <span class="p">}</span>

                <span class="cm">/* Option 2B: Reset an entire region with a custom Less mixin */</span>
                <span class="nc">.reset-box-sizing</span> <span class="p">{</span>
                <span class="k">&amp;</span><span class="o">,</span>
                <span class="o">*,</span>
                <span class="o">*</span><span class="nd">:before</span><span class="o">,</span>
                <span class="o">*</span><span class="nd">:after</span> <span class="p">{</span>
                <span class="nc">.box-sizing</span><span class="o">(</span><span class="nt">content-box</span><span class="o">)</span><span class="p">;</span>
                <span class="p">}</span>
                <span class="p">}</span>
                <span class="nc">.element</span> <span class="p">{</span>
                <span class="nc">.reset-box-sizing</span><span class="o">()</span><span class="p">;</span>
                <span class="p">}</span></code></pre></div>
</div>

<div class="bs-docs-section">
    <h1 id="accessibility" class="page-header">Accessibility</h1>
    <p class="lead">Bootstrap follows common web standards and—with minimal extra effort—can be used to create sites that are accessible to those using <abbr title="Assistive Technology" class="initialism">AT</abbr>.</p>

    <h3>Skip navigation</h3>
    <p>If your navigation contains many links and comes before the main content in the DOM, add a <code>Skip to main content</code> link immediately after your opening <code>&lt;body&gt;</code> tag. <a href="http://a11yproject.com/posts/skip-nav-links/">(read why)</a></p>
    <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#content"</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span> <span class="na">id=</span><span class="s">"content"</span><span class="nt">&gt;</span>
                The main page content.
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/body&gt;</span></code></pre></div>

    <h3>Nested headings</h3>
    <p>When nesting headings (<code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code>), your primary document header should be an <code>&lt;h1&gt;</code>. Subsequent headings should make logical use of <code>&lt;h2&gt;</code> - <code>&lt;h6&gt;</code> such that screen readers can construct a table of contents for your pages.</p>
    <p>Learn more at <a href="http://squizlabs.github.io/HTML_CodeSniffer/Standards/Section508/">HTML CodeSniffer</a> and <a href="http://accessibility.psu.edu/headings">Penn State's AccessAbility</a>.</p>

    <h3>Color contrast</h3>
    <p>Currently, some of the default color combinations available in Bootstrap (such as the various <a href="../css/#buttons">styled button</a> classes, some of the code highlighting colors used for <a href="../css/#code-block">basic code blocks</a>, the <code>.bg-primary</code> <a href="..css/#helper-classes-backgrounds">contextual background</a> helper class, and the default link color when used on a white background) have a low contrast ratio (below the <a href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast">recommended ratio of 4.5:1</a>). This can cause problems to users with low vision or who are color blind. These default colors may need to be modified to increase their contrast and legibility.</p>

    <h3>Additional resources</h3>
    <ul>
        <li><a href="https://github.com/squizlabs/HTML_CodeSniffer">"HTML Codesniffer" bookmarklet for identifying accessibility issues</a></li>
        <li><a href="https://chrome.google.com/webstore/detail/accessibility-developer-t/fpkknkljclfencbdbgkenhalefipecmb?hl=en">Chrome's Accessibility Developer Tools extension</a></li>
        <li><a href="http://www.paciellogroup.com/resources/contrastanalyser/">Colour Contrast Analyser</a>
        </li><li><a href="http://a11yproject.com/">The A11Y Project</a></li>
        <li><a href="https://developer.mozilla.org/en-US/docs/Accessibility">MDN accessibility documentation</a></li>
    </ul>
</div>

<div class="bs-docs-section">
    <h1 id="license-faqs" class="page-header">License FAQs</h1>
    <p class="lead">Bootstrap is released under the MIT license and is copyright 2014 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

    <h4>It requires you to:</h4>
    <ul>
        <li>Include the license and copyright notice in your works</li>
    </ul>

    <h4>It permits you to:</h4>
    <ul>
        <li>Freely download and use Bootstrap, in whole or in part, for personal, private, company internal, or commercial purposes</li>
        <li>Use Bootstrap in packages or distributions that you create</li>
        <li>Modify the source code</li>
        <li>Grant a sublicense to modify and distribute Bootstrap to third parties not included in the license</li>
    </ul>

    <h4>It forbids you to:</h4>
    <ul>
        <li>Hold the authors and license owners liable for damages as Bootstrap is provided without warranty</li>
        <li>Hold the creators or copyright holders of Bootstrap liable</li>
        <li>Redistribute any piece of Bootstrap without proper attribution</li>
        <li>Use any marks owned by Twitter in any way that might state or imply that Twitter endorses your distribution</li>
        <li>Use any marks owned by Twitter in any way that might state or imply that you created the Twitter software in question</li>
    </ul>

    <h4>It does not require you to:</h4>
    <ul>
        <li>Include the source of Bootstrap itself, or of any modifications you may have made to it, in any redistribution you may assemble that includes it</li>
        <li>Submit changes that you make to Bootstrap back to the Bootstrap project (though such feedback is encouraged)</li>
    </ul>

    <p>The full Bootstrap license is located <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE">in the project repository</a> for more information.</p>
</div>

<div class="bs-docs-section">
    <h1 id="translations" class="page-header">Translations</h1>

    <p class="lead">Community members have translated Bootstrap's documentation into various languages. None are officially supported and they may not always be up to date.</p>
    <ul>

        <li><a href="http://v3.bootcss.com/" hreflang="zh">Bootstrap 中文文档 (Chinese)</a></li>

        <li><a href="http://getbootstrap.dk/" hreflang="da">Bootstrap på Dansk (Danish)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/fr" hreflang="fr">Bootstrap en Français (French)</a></li>

        <li><a href="http://holdirbootstrap.de/" hreflang="de">Bootstrap auf Deutsch (German)</a></li>

        <li><a href="http://www.hackerstribe.com/guide/IT-bootstrap-3.1.1/" hreflang="it">Bootstrap in Italiano (Italian)</a></li>

        <li><a href="http://bootstrapk.com/BS3/" hreflang="ko">Bootstrap 한국어 (Korean)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/ru" hreflang="ru">Bootstrap по-русски (Russian)</a></li>

        <li><a href="http://www.oneskyapp.com/docs/bootstrap/es" hreflang="es">Bootstrap en Español (Spanish)</a></li>

        <li><a href="http://twbs.docs.org.ua" hreflang="uk">Bootstrap українською (Ukrainian)</a></li>

    </ul>
    <p><strong class="text-danger">We don't help organize or host translations, we just link to them.</strong></p>
    <p>Finished a new or better translation? Open a pull request to add it to our list.</p>
</div>


</div>

<div class="col-md-3">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav bs-docs-sidenav">

            <li>
                <a href="#download">Download</a>
            </li>
            <li>
                <a href="#whats-included">What's included</a>
                <ul class="nav">
                    <li><a href="#whats-included-precompiled">Precompiled</a></li>
                    <li><a href="#whats-included-source">Source code</a></li>
                </ul>
            </li>
            <li>
                <a href="#grunt">Compiling CSS and JavaScript</a>
                <ul class="nav">
                    <li><a href="#grunt-installing">Installing Grunt</a></li>
                    <li><a href="#grunt-commands">Available Grunt commands</a></li>
                    <li><a href="#grunt-troubleshooting">Troubleshooting</a></li>
                </ul>
            </li>
            <li>
                <a href="#template">Basic template</a>
            </li>
            <li>
                <a href="#examples">Examples</a>
                <ul class="nav">
                    <li><a href="#examples-framework">Using the framework</a></li>
                    <li><a href="#examples-navbars">Navbars in action</a></li>
                    <li><a href="#examples-custom">Custom components</a></li>
                    <li><a href="#examples-experiments">Experiments</a></li>
                </ul>
            </li>
            <li>
                <a href="#tools">Tools</a>
                <ul class="nav">
                    <li><a href="#tools-bootlint">Bootlint</a></li>
                </ul>
            </li>
            <li>
                <a href="#community">Community</a>
            </li>
            <li>
                <a href="#disable-responsive">Disabling responsiveness</a>
            </li>
            <li>
                <a href="#migration">Migrating from 2.x to 3.0</a>
            </li>
            <li>
                <a href="#support">Browser and device support</a>
                <ul class="nav">
                    <li><a href="#support-browsers">Supported browsers</a></li>
                    <li><a href="#support-ie8-ie9">Internet Explorer 8-9</a></li>
                    <li><a href="#support-ie8-respondjs">IE8 and Respond.js</a></li>
                    <li><a href="#support-ie8-box-sizing">IE8 and box-sizing</a></li>
                    <li><a href="#support-ie8-font-face">IE8 and @font-face</a></li>
                    <li><a href="#support-ie-compatibility-modes">IE Compatibility modes</a></li>
                    <li><a href="#support-ie10-width">IE10 and Windows (Phone) 8</a></li>
                    <li><a href="#support-safari-percentages">Safari percent rounding</a></li>
                    <li><a href="#support-fixed-position-keyboards">Modals, navbars, and virtual keyboards</a></li>
                    <li><a href="#support-browser-zooming">Browser zooming</a></li>
                    <li><a href="#support-printing">Printing</a></li>
                    <li><a href="#support-android-stock-browser">Android stock browser</a></li>
                    <li><a href="#support-validators">Validators</a></li>
                </ul>
            </li>
            <li>
                <a href="#third-parties">Third party support</a>
            </li>
            <li>
                <a href="#accessibility">Accessibility</a>
            </li>
            <li>
                <a href="#license-faqs">License FAQs</a>
            </li>
            <li>
                <a href="#translations">Translations</a>
            </li>


        </ul>
        <a class="back-to-top" href="#top">
            Back to top
        </a>

    </div>
</div>

</div>
</div>

<div class="container">
    <div class="row">
        <div style="background-color: #0000f6;" class="col-md-12">.col-md-12</div>
    </div>
</div>

<?php include_once('footer.php'); ?>

