<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->    
        <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- AdminLTE App -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css?v=3.2.0">
        <script nonce="4cc490d4-888b-481a-9f59-697e79d7cfdb">(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
    </head>

    <body class="hold-transition lockscreen">
        <!-- Login Box -->
        <div class="lockscreen-wrapper">
            <!-- Headline -->
            <div class="lockscreen-logo">
                <h1><b>Flora dan Fauna</b></h1>
            </div>
            
            <!-- Profile Name -->
            <div class="lockscreen-name">
                <b>AlwanTD</b>
            </div>

            <div class="lockscreen-item">
                <!-- Profile Image -->
                <div class="lockscreen-image">
                    <img src="<?= base_url() ?>/assets/dist/img/user1-128x128.jpg" alt="User Image">
                </div>
        
                <!-- Password Column -->
                <form class="lockscreen-credentials">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <button type="button" class="btn">
                                <i class="fas fa-arrow-right text-muted"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- /.End Password Column -->
            </div>
            
            <!-- Remember Messages -->
            <div class="help-block text-center">
                Enter your password to retrieve your session
            </div>

            <br>
            <br>
            <!-- Forgot Password Button -->
            <p class="mb-1 text-center">
                <a href="<?= base_url('Auth/forgotPassword') ?>">Forgot my password</a>
            </p>
                
            <!-- Register Button -->
            <div class="text-center">
                <a href="<?= base_url('Auth/register') ?>">Or register new account</a>
            </div>
        </div>
        <!-- /.End Login Box -->
    </body>

    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js?v=3.2.0"></script>
</html>
