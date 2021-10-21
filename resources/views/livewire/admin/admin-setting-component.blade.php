<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Setting
                    </div>
                    <div class="panel-body">
                        @if(Session::has('setting_message'))
                           <div class="alert alert-success" role="text">{{Session::get('setting_message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="saveSetting">
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" placeholder="Email" class="form-control input-md" wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone" class="form-control input-md" wire:model="phone">
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Phone2</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Phone2" class="form-control input-md" wire:model="phone2">
                                    @error('phone2')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Addess" class="form-control input-md" wire:model="address">
                                    @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Map" class="form-control input-md" wire:model="map">
                                    @error('map')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Twitter</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Twitter" class="form-control input-md" wire:model="twitter">
                                    @error('twitter')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Facebook" class="form-control input-md" wire:model="facebook">
                                    @error('facebook')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Pinterest</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Pinterest" class="form-control input-md" wire:model="pinterest">
                                    @error('pinterest')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Instagram</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Instagram" class="form-control input-md" wire:model="instagram">
                                    @error('instagram')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Youtube</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Youtube" class="form-control input-md" wire:model="youtube">
                                    @error('youtube')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Logo</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control input-file" wire:model="newlogo">
                                    @if ($newlogo)
                                        <img src="{{$newlogo->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('assets/images/logo')}}/{{$site_logo}}" width="120"/>
                                    @endif
                                    @error('site_logo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label"> Privacy And Policy</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea type="text" id="privacy_and_policy" placeholder="privacy-and-policy" class="form-control" wire:model="privacy_and_policy"></textarea>
                                    @error('privacy_and_policy')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label"> Terms And Conditions</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea type="text" id="terms_and_conditions" placeholder="terms_and_conditions" class="form-control" wire:model="terms_and_conditions"></textarea>
                                    @error('terms_and_conditions')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label"> Return Policy</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea type="text" id="return_policy" placeholder="return_policy" class="form-control" wire:model="return_policy"></textarea>
                                    @error('return_policy')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Copyright</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="copyright" class="form-control input-md" wire:model="copyright">
                                    @error('copyright')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
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

@push('scripts')
<script>

    $(function(){
        tinymce.init({
            selector:'#privacy_and_policy',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data=$('#privacy_and_policy').val();
                    @this.set('privacy_and_policy',d_data);
                });
            }
        });
        tinymce.init({
            selector:'#terms_and_conditions',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data=$('#terms_and_conditions').val();
                    @this.set('terms_and_conditions',d_data);
                });
            }
        });
        tinymce.init({
            selector:'#return_policy',
            setup:function(editor){
                editor.on('Change',function(e){
                    tinyMCE.triggerSave();
                    var d_data=$('#return_policy').val();
                    @this.set('return_policy',d_data);
                });
            }
        });
    });
</script>

@endpush
