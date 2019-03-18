<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        hljs.configure({
            tabReplace: '    ',
        });
        hljs.initHighlightingOnLoad();
    </script>
    <style>body {
    position: relative;
}

h1 {
    margin-top: 5px;
}

h1, h2, h3, h4 {
    color: #2b2b2b;
}

h2:after {
    content: ' ';
}

h5 {
    font-weight: bold;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    display: none;
    position: absolute;
    margin-left: 8px;
}

h1:hover a, h2:hover a, h3:hover a, h4:hover a, h5:hover a, h6:hover a {
    color: #a5a5a5;
    display: initial;
}

.nav.nav-tabs > li > a {
    padding-top: 4px;
    padding-bottom: 4px;
}

.tab-content {
    padding-top: 8px;
}

.table {
    margin-bottom: 8px;
}

pre {
    border-radius: 0px;
    border: none;
}

pre code {
    margin: -9.5px;
}

.request {
    margin-top: 12px;
    margin-bottom: 24px;
}

.response-text-sample {
    padding: 0px !important;
}

.response-text-sample pre {
    margin-bottom: 0px;
}


#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 250px;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #2b2b2b;
    padding-top: 20px;
}

#sidebar-wrapper ul {
    width: 250px;
}

#sidebar-wrapper ul li {
    margin-right: 10px;
}

#sidebar-wrapper ul li a:hover {
    background: inherit;
    text-decoration: none;
}

#sidebar-wrapper ul li a {
    display: block;
    color: #ECF0F1;
    padding: 6px 15px;
}

#sidebar-wrapper ul li ul {
    padding-left: 25px;
}

#sidebar-wrapper ul li ul li a {
    padding: 1px 0px;
}

#sidebar-wrapper ul li a:hover,
#sidebar-wrapper ul li a:focus {
    color: #e0c46c;
    border-right: solid 1px #e0c46c;
}

#sidebar-wrapper ul li.active > a {
    color: #e0c46c;
    border-right: solid 3px #e0c46c;
}

#sidebar-wrapper ul li:not(.active) ul {
    display: none;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px 15px 15px 250px;
}
</style>
</head>
<body data-spy="scroll" data-target=".scrollspy">
<div id="sidebar-wrapper">
    <div class="scrollspy">
    <ul id="main-menu" data-spy="affix" class="nav">
        <li>
            <a href="#doc-general-notes">General notes</a>
        </li>
        
        <li>
            <a href="#doc-api-detail">API detail</a>
        </li>
        
        
        
        <li>
            <a href="#folder-authentication">Authentication</a>
            <ul>
                
                <li>
                    <a href="#request-authentication-login">Login</a>
                </li>
                
                <li>
                    <a href="#request-authentication-register">Register</a>
                </li>
                
                <li>
                    <a href="#request-authentication-user">User</a>
                </li>
                
            </ul>
        </li>
        
        
        <li>
            <a href="#folder-houses">houses</a>
            <ul>
                
                <li>
                    <a href="#request-houses-list">List</a>
                </li>
                
                <li>
                    <a href="#request-houses-show">show</a>
                </li>
                
            </ul>
        </li>
        
        
        <li>
            <a href="#folder-misc">misc</a>
            <ul>
                
                <li>
                    <a href="#request-misc-provinces">Provinces</a>
                </li>
                
            </ul>
        </li>
        
        
        <li>
            <a href="#folder-service">service</a>
            <ul>
                
                <li>
                    <a href="#request-service-show-booked-house">Show booked house</a>
                </li>
                
                <li>
                    <a href="#request-service-list-booked-house">List booked house</a>
                </li>
                
                <li>
                    <a href="#request-service-book-house">Book house</a>
                </li>
                
                <li>
                    <a href="#request-service-house-refund">House refund</a>
                </li>
                
            </ul>
        </li>
        
    </ul>
</div>

</div>
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>Icumbi</h1>

                <h2 id="doc-general-notes">
                    General notes
                    <a href="#doc-general-notes"><i class="glyphicon glyphicon-link"></i></a>
                </h2>

                

                

                <h2 id="doc-api-detail">
                    API detail
                    <a href="#doc-api-detail"><i class="glyphicon glyphicon-link"></i></a>
                </h2>

                


                
                
                <div class="endpoints-group">
                    <h3 id="folder-authentication">
                        Authentication
                        <a href="#folder-authentication"><i class="glyphicon glyphicon-link"></i></a>
                    </h3>

                    <div></div>

                    
                    
                    <div class="request">

                        <h4 id="request-authentication-login">
                            Login
                            <a href="#request-authentication-login"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>Log in with api</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-authentication-login-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-authentication-login-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-authentication-login-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW" -H "Content-Type: application/json" "http://localhost:8000/api/login"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-authentication-login-example-http">
                                    <pre><code class="hljs http">POST /api/login HTTP/1.1
Host: localhost:8000
Content-Type: application/json</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-authentication-login-responses-eb283b5b-537d-c7f8-d0d6-0349547d75fe" data-toggle="tab">
                                        
                                            Response
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-authentication-login-responses-eb283b5b-537d-c7f8-d0d6-0349547d75fe">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 15:40:12 +0000, Sun, 17 Mar 2019 15:40:12 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI3OWE5NjVjY2NkYjFmYzY4ZmYxMGQ3ODM0NDg4OWFkNmE5ZDA5MWMxNTFmNTVhMWYwMWQ3OGNhYjI1MjFlZWVmYWIwNDk1ZTAwZTJiODFkIn0.eyJhdWQiOiIxIiwianRpIjoiMjc5YTk2NWNjY2RiMWZjNjhmZjEwZDc4MzQ0ODg5YWQ2YTlkMDkxYzE1MWY1NWExZjAxZDc4Y2FiMjUyMWVlZWZhYjA0OTVlMDBlMmI4MWQiLCJpYXQiOjE1NTI4MzcyMTEsIm5iZiI6MTU1MjgzNzIxMSwiZXhwIjoxNTg0NDU5NjExLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.cqTbXwuINTu7d-DYGtNNf6huxSQ7MTB9U9qm-DoyvvRNqCTk3SRH0ChaNb7tKc3wnEdoQoFWBJ8FjGh5k4haVrkIcB9hZfYB_p3byVaefLpkzOr_R_AHnaw6DP5w5vAgtgZMUAOp-iLPC9YULPEmLmBnjylgQ1-9ylo_aAeah2vfWSLXPihsnbhib0E7uO-VBD4xpZ5sebc9n2hylpoovZjRsDaafX-43SbAKNujcHUf3jFDJAq-I5anJB5ySaTDK7WzLoBEEP4DXJaLNNJryV3A8ab2I52jZ6_G7tpuAyYv9BtZyM7fRWUIoJmAIUMQTx8JAtAIOogJg4_bAldu0jclmxBxUok9G6UW-kIrTDFFH9T0FmGzIjKHR01h7ilX3zPb3BOjogJovsAZ4uzzHUYh6RjEsgBfQ1RXHtYSNAP71psGk7WGXFdDMc7zQZm_B-Cmnl7jcF4fR8xfqbjV66mJvua8XpgssiXBpYg9orPN_HjXPlzYPVwLYJZBaNIVqfah1xIpsdTtlfJmqDsjzQ-D9RfhPcYQ0q4cbC29aMrZbr62yZ0WfJ1D83BFa76OciiPCMz989HI3KneuYpEQYaOdzzfvUrA4cucMg2or019gISVlVc_X1evW2mcHps9Ks2_cdPeuabemIJOehxRkdnt5C516GCvTdIR2gm48I0"
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-authentication-register">
                            Register
                            <a href="#request-authentication-register"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>Register user with api</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-authentication-register-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-authentication-register-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-authentication-register-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Content-Type: application/json" -d '{
	"firstName": "Hirwa",
	"lastName": "Hamidou",
	"email": "ryan@gmail.com",
	"password": "peaceall",
	"password_confirmation": "peaceall",
	"phoneNumber": "25789000000",
	"roleId": "3"
}' "http://localhost:8000/api/register"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-authentication-register-example-http">
                                    <pre><code class="hljs http">POST /api/register HTTP/1.1
Host: localhost:8000
Content-Type: application/json

{
	"firstName": "Hirwa",
	"lastName": "Hamidou",
	"email": "ryan@gmail.com",
	"password": "peaceall",
	"password_confirmation": "peaceall",
	"phoneNumber": "25789000000",
	"roleId": "3"
}</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-authentication-register-responses-626329ef-4502-8466-043e-388b70a69ba3" data-toggle="tab">
                                        
                                            Response
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-authentication-register-responses-626329ef-4502-8466-043e-388b70a69ba3">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 15:55:58 +0000, Sun, 17 Mar 2019 15:55:58 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ",
        "email": "ryan@gmail.com"
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-authentication-user">
                            User
                            <a href="#request-authentication-user"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>Get user details</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-authentication-user-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-authentication-user-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-authentication-user-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Content-Type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW" -H "Content-Type: application/json" -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" "http://localhost:8000/api/user"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-authentication-user-example-http">
                                    <pre><code class="hljs http">POST /api/user HTTP/1.1
Host: localhost:8000
Content-Type: application/json
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-authentication-user-responses-cf61546f-e0f6-fcd0-6139-32eb87150055" data-toggle="tab">
                                        
                                            Response
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-authentication-user-responses-cf61546f-e0f6-fcd0-6139-32eb87150055">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 15:59:50 +0000, Sun, 17 Mar 2019 15:59:50 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "success": {
        "id": 4,
        "firstName": "Hirwa",
        "lastName": "Hamidou",
        "phoneNumber": "25789000000",
        "accountConfirmationCode": "1",
        "amount": 500,
        "email": "ryan@gmail.com",
        "created_at": "2019-03-17 15:55:57",
        "updated_at": "2019-03-17 15:55:57"
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    

                </div>
                
                
                <div class="endpoints-group">
                    <h3 id="folder-houses">
                        houses
                        <a href="#folder-houses"><i class="glyphicon glyphicon-link"></i></a>
                    </h3>

                    <div></div>

                    
                    
                    <div class="request">

                        <h4 id="request-houses-list">
                            List
                            <a href="#request-houses-list"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>list houses</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-houses-list-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-houses-list-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-houses-list-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" -H "Content-Type: application/json" -d '{
	"page": "1",
	"size": "2",
	"district": "30",
	"startPrice": "1000",
	"endPrice": "10000"
}' "http://localhost:8000/api/houses/list"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-houses-list-example-http">
                                    <pre><code class="hljs http">POST /api/houses/list HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ
Content-Type: application/json

{
	"page": "1",
	"size": "2",
	"district": "30",
	"startPrice": "1000",
	"endPrice": "10000"
}</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-houses-list-responses-b60d6279-e686-b349-c768-9e9bc9f17b85" data-toggle="tab">
                                        
                                            List with data
                                        
                                    </a>
                                </li>
                                
                                <li role="presentation">
                                    <a href="#request-houses-list-responses-f336d055-4cd7-90a2-9797-5cd3bdb525b5" data-toggle="tab">
                                        
                                            List - no data
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-houses-list-responses-b60d6279-e686-b349-c768-9e9bc9f17b85">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 16:09:31 +0000, Sun, 17 Mar 2019 16:09:31 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "data": [
        {
            "id": 1,
            "housePrice": 10000,
            "status": "2",
            "paymentfrequency": "Monthly",
            "country": "Rwanda",
            "province": "Kigali",
            "district": "Nyarugenge",
            "rooms": 3,
            "length": "2.00",
            "width": "3.00",
            "water": "1",
            "bathroom": "1",
            "toilet": "1",
            "fenced": "1",
            "views": 0,
            "photos": [
                {
                    "id": 9,
                    "title": "image",
                    "source": "http:\/\/localhost:8000\/images\/HouseUploads\/15425362082015-Nissan-GT-R-Nismo-V12-1600.jpg"
                }
            ]
        },
        {
            "id": 4,
            "housePrice": 10000,
            "status": "2",
            "paymentfrequency": "Monthly",
            "country": "Rwanda",
            "province": "Kigali",
            "district": "Nyarugenge",
            "rooms": 3,
            "length": "3.00",
            "width": "3.00",
            "water": "1",
            "bathroom": "1",
            "toilet": "1",
            "fenced": "1",
            "views": 0,
            "photos": [
                {
                    "id": 4,
                    "title": "image",
                    "source": "http:\/\/localhost:8000\/images\/HouseUploads\/15404564062015-Nissan-GT-R-Nismo-V12-1600.jpg"
                }
            ]
        }
    ],
    "meta": {
        "count": 2
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                                <div class="tab-pane" id="request-houses-list-responses-f336d055-4cd7-90a2-9797-5cd3bdb525b5">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 16:23:36 +0000, Sun, 17 Mar 2019 16:23:36 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>57</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "data": [],
    "meta": {
        "count": 0
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-houses-show">
                            show
                            <a href="#request-houses-show"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>return single house simple details</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-houses-show-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-houses-show-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-houses-show-example-curl">
                                    <pre><code class="hljs curl">curl -X GET -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" "http://localhost:8000/api/houses/show/200"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-houses-show-example-http">
                                    <pre><code class="hljs http">GET /api/houses/show/200 HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-houses-show-responses-8e7f2498-9c8f-f33c-3126-298e9801a433" data-toggle="tab">
                                        
                                            show with valid id
                                        
                                    </a>
                                </li>
                                
                                <li role="presentation">
                                    <a href="#request-houses-show-responses-13216da4-4a72-2a1d-fc55-c4d66b84551d" data-toggle="tab">
                                        
                                            show with invalid id
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-houses-show-responses-8e7f2498-9c8f-f33c-3126-298e9801a433">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 16:18:55 +0000, Sun, 17 Mar 2019 16:18:55 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "id": 1,
    "housePrice": 10000,
    "status": "2",
    "paymentfrequency": "Monthly",
    "country": "Rwanda",
    "province": "Kigali",
    "district": "Nyarugenge",
    "rooms": 3,
    "length": "2.00",
    "width": "3.00",
    "water": "1",
    "bathroom": "1",
    "toilet": "1",
    "fenced": "1",
    "views": 1,
    "photos": [
        {
            "id": 9,
            "title": "image",
            "source": "http:\/\/localhost:8000\/images\/HouseUploads\/15425362082015-Nissan-GT-R-Nismo-V12-1600.jpg"
        }
    ]
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                                <div class="tab-pane" id="request-houses-show-responses-13216da4-4a72-2a1d-fc55-c4d66b84551d">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>404 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 16:22:49 +0000, Sun, 17 Mar 2019 16:22:49 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "status": "404",
    "description": "house not found"
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    

                </div>
                
                
                <div class="endpoints-group">
                    <h3 id="folder-misc">
                        misc
                        <a href="#folder-misc"><i class="glyphicon glyphicon-link"></i></a>
                    </h3>

                    <div></div>

                    
                    
                    <div class="request">

                        <h4 id="request-misc-provinces">
                            Provinces
                            <a href="#request-misc-provinces"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>return provinces and their respective district</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-misc-provinces-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-misc-provinces-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-misc-provinces-example-curl">
                                    <pre><code class="hljs curl">curl -X GET "http://localhost:8000/api/provinces"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-misc-provinces-example-http">
                                    <pre><code class="hljs http">GET /api/provinces HTTP/1.1
Host: localhost:8000</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-misc-provinces-responses-b3be6212-c556-c002-b000-de1e346b421d" data-toggle="tab">
                                        
                                            Response
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-misc-provinces-responses-b3be6212-c556-c002-b000-de1e346b421d">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 17:58:03 +0000, Sun, 17 Mar 2019 17:58:03 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "data": [
        {
            "id": 1,
            "name": "Amajyaruguru",
            "districts": [
                {
                    "id": 1,
                    "name": "Burera"
                },
                {
                    "id": 2,
                    "name": "Gakenke"
                },
                {
                    "id": 3,
                    "name": "Gicumbi"
                },
                {
                    "id": 4,
                    "name": "Musanze"
                },
                {
                    "id": 5,
                    "name": "Rulindo"
                }
            ],
            "count": 5
        },
        {
            "id": 2,
            "name": "Amajyepfo",
            "districts": [
                {
                    "id": 6,
                    "name": "Gisagara"
                },
                {
                    "id": 7,
                    "name": "Huye"
                },
                {
                    "id": 8,
                    "name": "Kamonyi"
                },
                {
                    "id": 9,
                    "name": "Muhanga"
                },
                {
                    "id": 10,
                    "name": "Nyamagabe"
                },
                {
                    "id": 11,
                    "name": "Nyanza"
                },
                {
                    "id": 12,
                    "name": "Nyaruguru"
                },
                {
                    "id": 13,
                    "name": "Ruhano"
                }
            ],
            "count": 8
        },
        {
            "id": 3,
            "name": "Iburasirazuba",
            "districts": [
                {
                    "id": 14,
                    "name": "Bugesera"
                },
                {
                    "id": 15,
                    "name": "Gatsibo"
                },
                {
                    "id": 16,
                    "name": "Kayonza"
                },
                {
                    "id": 17,
                    "name": "Kirehe"
                },
                {
                    "id": 18,
                    "name": "Ngoma"
                },
                {
                    "id": 19,
                    "name": "Nyagatare"
                },
                {
                    "id": 20,
                    "name": "Rwamagana"
                }
            ],
            "count": 7
        },
        {
            "id": 4,
            "name": "Uburengerazuba",
            "districts": [
                {
                    "id": 21,
                    "name": "Karongi"
                },
                {
                    "id": 22,
                    "name": "Ngororero"
                },
                {
                    "id": 23,
                    "name": "Nyabihu"
                },
                {
                    "id": 24,
                    "name": "Nyamasheke"
                },
                {
                    "id": 25,
                    "name": "Rubavu"
                },
                {
                    "id": 26,
                    "name": "Rusizi"
                },
                {
                    "id": 27,
                    "name": "Rutsiro"
                }
            ],
            "count": 7
        },
        {
            "id": 5,
            "name": "Kigali",
            "districts": [
                {
                    "id": 28,
                    "name": "Gasabo"
                },
                {
                    "id": 29,
                    "name": "Kicukiro"
                },
                {
                    "id": 30,
                    "name": "Nyarugenge"
                }
            ],
            "count": 3
        }
    ],
    "count": 5
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    

                </div>
                
                
                <div class="endpoints-group">
                    <h3 id="folder-service">
                        service
                        <a href="#folder-service"><i class="glyphicon glyphicon-link"></i></a>
                    </h3>

                    <div></div>

                    
                    
                    <div class="request">

                        <h4 id="request-service-show-booked-house">
                            Show booked house
                            <a href="#request-service-show-booked-house"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>display booked house full details</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-service-show-booked-house-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-service-show-booked-house-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-service-show-booked-house-example-curl">
                                    <pre><code class="hljs curl">curl -X GET -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" "http://localhost:8000/api/service/show/7"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-service-show-booked-house-example-http">
                                    <pre><code class="hljs http">GET /api/service/show/7 HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-service-show-booked-house-responses-a7cd3863-64a2-cd78-3423-d3fafd5457c3" data-toggle="tab">
                                        
                                            show - when house was not booked
                                        
                                    </a>
                                </li>
                                
                                <li role="presentation">
                                    <a href="#request-service-show-booked-house-responses-2826b588-f9d6-fd75-0b63-cf1153f2cd0b" data-toggle="tab">
                                        
                                            show - when house is truly booked
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-service-show-booked-house-responses-a7cd3863-64a2-cd78-3423-d3fafd5457c3">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>404 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 16:59:40 +0000, Sun, 17 Mar 2019 16:59:39 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "status": "404",
    "description": "Service not found"
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                                <div class="tab-pane" id="request-service-show-booked-house-responses-2826b588-f9d6-fd75-0b63-cf1153f2cd0b">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 17:01:29 +0000, Sun, 17 Mar 2019 17:01:29 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "id": 7,
    "house": {
        "housePrice": 10000,
        "houseLocation": "-1.9475448999999998:30.073214899999996",
        "street": "kn 123 st",
        "ownerFName": "Hirwa",
        "ownerLName": "Hamidou",
        "status": "3",
        "paymentfrequency": "Monthly",
        "country": "Rwanda",
        "province": "Kigali",
        "district": "Nyarugenge",
        "sector": "Kimisagara",
        "cell": "Kabusunzu",
        "rooms": 3,
        "length": "2.00",
        "width": "3.00",
        "water": "1",
        "bathroom": "1",
        "toilet": "1",
        "fenced": "1",
        "views": 1,
        "photos": [
            {
                "id": 9,
                "title": "image",
                "source": "http:\/\/localhost:8000\/images\/HouseUploads\/15425362082015-Nissan-GT-R-Nismo-V12-1600.jpg"
            }
        ]
    },
    "refunded": "false",
    "paymentID": 100,
    "userID": 4,
    "createdAt": {
        "date": "2019-03-17 16:53:18.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    }
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-service-list-booked-house">
                            List booked house
                            <a href="#request-service-list-booked-house"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>returns a list of all house that you have once booked</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-service-list-booked-house-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-service-list-booked-house-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-service-list-booked-house-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" -H "Content-Type: application/json" -d '{
	"size": 2,
	"page": 1
}' "http://localhost:8000/api/service/list"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-service-list-booked-house-example-http">
                                    <pre><code class="hljs http">POST /api/service/list HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ
Content-Type: application/json

{
	"size": 2,
	"page": 1
}</code></pre>
                                </div>
                            </div>
                        </div>

                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-service-book-house">
                            Book house
                            <a href="#request-service-book-house"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>API function to book a house</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-service-book-house-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-service-book-house-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-service-book-house-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" -H "Content-Type: application/json" -d '{
	"house": "3"
}' "http://localhost:8000/api/service/book"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-service-book-house-example-http">
                                    <pre><code class="hljs http">POST /api/service/book HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ
Content-Type: application/json

{
	"house": "3"
}</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-service-book-house-responses-b69855ac-e502-20eb-5539-3afab7a4ad66" data-toggle="tab">
                                        
                                            Book house - when house is booked or just not available
                                        
                                    </a>
                                </li>
                                
                                <li role="presentation">
                                    <a href="#request-service-book-house-responses-f8981b9a-2925-8800-f64e-97f7c92e1e48" data-toggle="tab">
                                        
                                            Book house - successful booking
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-service-book-house-responses-b69855ac-e502-20eb-5539-3afab7a4ad66">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>400 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 17:31:52 +0000, Sun, 17 Mar 2019 17:31:52 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>58</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "status": "400",
    "description": "Bad Request - house not available"
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                                <div class="tab-pane" id="request-service-book-house-responses-f8981b9a-2925-8800-f64e-97f7c92e1e48">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 17:36:25 +0000, Sun, 17 Mar 2019 17:36:25 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "serviceID": 19
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    
                    
                    <div class="request">

                        <h4 id="request-service-house-refund">
                            House refund
                            <a href="#request-service-house-refund"><i class="glyphicon glyphicon-link"></i></a>
                        </h4>

                        <div><p>make a refund on a previous booked house</p>
</div>

                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#request-service-house-refund-example-curl" data-toggle="tab">Curl</a></li>
                                <li role="presentation"><a href="#request-service-house-refund-example-http" data-toggle="tab">HTTP</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="request-service-house-refund-example-curl">
                                    <pre><code class="hljs curl">curl -X POST -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ" -H "Content-Type: application/json" -d '{
	"service": 19,
	"house": 2
}' "http://localhost:8000/api/service/refund"</code></pre>
                                </div>
                                <div class="tab-pane" id="request-service-house-refund-example-http">
                                    <pre><code class="hljs http">POST /api/service/refund HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI1MDIzYzIxMjljYzI0MWExZjIwNTE2MmEzYTNkNDIxOGYzNjQ5YjkzODMyNWJhZWYwN2M0ZTc5ZjVhZTNiMWNjYzBhYjU4MzE4ODQ4ZDUzIn0.eyJhdWQiOiIxIiwianRpIjoiMjUwMjNjMjEyOWNjMjQxYTFmMjA1MTYyYTNhM2Q0MjE4ZjM2NDliOTM4MzI1YmFlZjA3YzRlNzlmNWFlM2IxY2NjMGFiNTgzMTg4NDhkNTMiLCJpYXQiOjE1NTI4MzgxNTcsIm5iZiI6MTU1MjgzODE1NywiZXhwIjoxNTg0NDYwNTU3LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.nkVeTbbqdRZCHjx1Uy-RG9Yn1BUCXl3Og3Rhxh9lP8tOXy12AMayEFyaBTVAk3F5L2HO34D48l-Rkow6K7QDJlqiWs8ofaoVdtQL6dA31eGpbIGyroeLQ8RX_4MbLzhA3cPPWIB8BVnvtUJOIppfDTZMi7xBE_fFOJX5AI-_YrhFfxiCGa1vcDkQlAKo_cA4RMMmjEmUUWNXFFtXxDNerCo_0KT_WiaxRhcbsa0ABXZ_bkqjv_JhIf_MhmS4k1fTTH0_hNd5DJxSW8bygwn3Emvw4svbIryR4fM3AXTqPj8AnZAfCs_Unn7Qu5urdRBM2y-TiD9DrbqPySPY5TLbpEEI-w1Lu964BfxxMmY7rUTrfNz3zE7y6Ha8v853iFKdzf_qQvxAmjCtviJueTxsNZY6uosz9j1gXbQ9svCXZ01bFc-j818CGK6mwJiWXnkstsR8Lw2um4AXagKpuMdKRO0G3w6-ZqUG3Vqm3sqh2DvxJMQ-oba4LviiSR73OOSIG6K4Om1okq8mA2ft_DAewAQfr7sGYoqGHsUlnQ_FvwU0SowHsi5QX8K0KNVJJ_ZFZPOrirmC_nbpSF0N3CA7YQIHbrppZuRhD0bLsaLLALmxbpiSYBvpW-PZrJQqHmfrckmHH5ViQyMIXAxUf3ztCdorXgU1i-r0HhZT4mWVLjQ
Content-Type: application/json

{
	"service": 19,
	"house": 2
}</code></pre>
                                </div>
                            </div>
                        </div>

                        
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                
                                <li role="presentation" class="active">
                                    <a href="#request-service-house-refund-responses-cd1c941e-87ee-e793-fda0-15d24a1ddd7d" data-toggle="tab">
                                        
                                            Response
                                        
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                
                                <div class="tab-pane active" id="request-service-house-refund-responses-cd1c941e-87ee-e793-fda0-15d24a1ddd7d">
                                    <table class="table table-bordered">
                                        <tr><th style="width: 20%;">Status</th><td>200 </td></tr>
                                        
                                        <tr><th style="width: 20%;">cache-control</th><td>no-cache, private</td></tr>
                                        
                                        <tr><th style="width: 20%;">connection</th><td>close</td></tr>
                                        
                                        <tr><th style="width: 20%;">content-type</th><td>application/json</td></tr>
                                        
                                        <tr><th style="width: 20%;">date</th><td>Sun, 17 Mar 2019 17:41:59 +0000, Sun, 17 Mar 2019 17:41:59 GMT</td></tr>
                                        
                                        <tr><th style="width: 20%;">host</th><td>localhost:8000</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-powered-by</th><td>PHP/7.2.15-0ubuntu0.18.04.1</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-limit</th><td>60</td></tr>
                                        
                                        <tr><th style="width: 20%;">x-ratelimit-remaining</th><td>59</td></tr>
                                        
                                        
                                            
                                            <tr><td class="response-text-sample" colspan="2">
                                                <pre><code>{
    "status": 200,
    "description": "House refunded successfully",
    "serviceID": 19
}</code></pre>
                                            </td></tr>
                                            
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        

                        <hr>
                    </div>
                    

                </div>
                
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("table:not(.table)").addClass('table table-bordered');
    });
</script>
</body>
</html>
