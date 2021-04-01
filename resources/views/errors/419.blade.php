<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body { background-color: #007bffeb;}
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
    h1 {
        margin-top: 52px;
        font-size: 78px;
        color: white;
    }
    h4 {
        font-size: 22px;
        margin: 40px;
        color: white;
    }
    .error-actions{
        margin-top: 82px;
    }
    img{
        width: 32%;
        margin-right: -531px;
        margin-top: 208px;
        border-radius: 50%;
    }
    h5{
        color: white;
    }
    .error-template{
        margin-top: 36px;
        padding: 40px 15px;
        text-align: center;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <div class="error-image">
                    <img src = "{{asset('assets/images/admin.jpg')}}">
                </div>
                <h1>
                    419!
                </h1>
                <div class="error-details">
                    <h4>Sorry,  Your Session is expired!<br></h4>
                    
                </div>
                
                <div class="error-actions">
                    <a href="{{route('home')}}" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
</div>
