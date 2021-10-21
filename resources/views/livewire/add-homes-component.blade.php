<div>
    <div>
        <style>
            nav svg{
                height:20px;
            }
            nav.hidden{
                display:block !important;
            }
        </style>
        <div class="container" style="padding: 30px 0">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>Add New Homes</h1>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <a href="{{route('homes')}}">All Homes</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="store">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Name" class="form-control input-md" wire:model="name"/>
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" placeholder="Email" class="form-control input-md" wire:model="email" />
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Phone</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Phone" class="form-control input-md" wire:model="phone" />
                                        @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
