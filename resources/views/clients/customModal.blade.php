<div class="modal fade" id="modal-order-new-address" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-large" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-notification">{{ __('Add new address') }}</h3>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5" id="new_address_checkout_body">
                        <form role="form" id="SubmitForm">
                            @csrf
                            <div class="form-group" id="new_address_checkout_holder">
                                <label class="form-control-label" for="new_address_checkout">{{ __('New Address') }}</label>
                                {{-- <select class="noselecttwo form-control" id="new_address_checkout">
                                </select> --}}
                                <input type="text" id="address" class="form-control d-block" placeholder="Enter your address here" required>
                                
                            </div>

                            
                            </div>
                        </form>

                    </div>
                </div>
     
<script type="text/javascript">

function Saveadd($btn){
    $btn.disabled = true;
    var address = $('#address').val();
    var lat="NULL";
    var lng="NULL";
    $.ajax({
      url: "/addAddress",
      type:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
       address:address,
       lat: lat,
       lng: lng,
      },
      success:function(response){
          $('#close').click();
          $btn.disabled = true;
          console.log(response);
           window.location.reload();
      },
      error: function(response) {
        alert("Error");
       
      },
      });
    }
  </script>
            <div class="modal-footer d-block">

                <button type="button" id="close" class="btn btn-link" data-dismiss="modal">{{ __('Close') }}</button>
                {{-- <button type="button" id="submitNewAddress" class="btn btn-outline-success">{{ __('Save') }}</button> --}}
               <button type="button" onclick="Saveadd(this);" class="btn btn-outline-success">Save</button>
              </div>
             

        </div>
    </div>
    </div>




