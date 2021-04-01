    @extends('layouts.app')
    
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">SETTING</div>
                    <div class="card-body">
                        <form method = "POST" action = "{{route('admin.settingSave')}}">
                            @csrf
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Airmail price</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "airmail" value = "{{$data->airmailprice}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Eco price</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "eco" value = "{{$data->ecoprice}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Seafreight Factor</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "seafreightfactor" value = "{{$data->seafreightfactor}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Seafreight Price</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "seafreightprice" value = "{{$data->seafreightprice}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Srd Rate</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "srdrate" value = "{{$data->srdrate}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Euro Rate</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "eurorate" value = "{{$data->eurorate}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Giftcard Rate</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "giftcard" value = "{{$data->giftcardrate}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Order Rate</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "orderrate" value = "{{$data->orderrate}}">
                                </div>
                            </div>
                            <hr>
                            <div class = "row">
                                <div class = "col-md-6">
                                    <h6>Seafreight Rate</h6>
                                </div>
                                <div class = "col-md-6">
                                    <input type = "text" name = "seafreightrate" value = "{{$data->seafreightrate}}">
                                </div>
                            </div>
                            <hr>
                            <button type="submit" name = "submit" class="btn btn-primary">&nbsp SAVE &nbsp </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection